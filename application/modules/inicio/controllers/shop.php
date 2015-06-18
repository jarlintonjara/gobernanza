<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*************************************************************
Página/Clase    : Modules/Admin/Controller/login.php
Propósito       : Página de Administrador Dashboard
Notas           : N/A
Modificaciones  : N/A
******** Datos Creación *********
Autor           : Junior Tello
Fecha y hora    : 04/04/2015 - 15:12 hrs.
*************************************************************
*/
class Shop extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('inicio_model', 'inicio', TRUE);
    }

    public function index()
    {
        
        $data['prod_general'] = $this->inicio->_lst_producto(true);

        ## Inicio de Sesión
        $data['page_title'] = 'Shop';

        ## Template Admin Dashboard
        $data['module'] = 'inicio';
        $data['view_file'] = 'shop_view';
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
        echo Modules::run('template/footer_front',$data);
    }

    public function detail($id)
    {
        
        if($id == ''){
            redirect(base_url().'inicio/dashboard','refresh');
        }else{
            $data['prod_general'] = $this->inicio->_lst_producto_detail((int)$id);
            $data['prod_general_gale'] = $this->inicio->_lst_producto_galeria((int)$id);
            $data['prod_random'] = $this->inicio->_lst_producto_rand();

            ## Inicio de Sesión
            $data['page_title'] = 'Shop';

            ## Template Admin Dashboard
            $data['module'] = 'inicio';
            $data['view_file'] = 'shop_detalle_view';
            echo Modules::run('template/head_front',$data);
            echo Modules::run('template/front',$data);
            echo Modules::run('template/footer_front',$data);
        }
    }

    public function add_products(){
        
        $id = $this->input->post('id');
        $uri = $this->input->post('uri');
        $producto = $this->inicio->_get_products_id($id);
        $cantidad = 1;
        // echo '<pre>';
        // print_r($producto);
        // echo '</pre>';
        // die();
        if(count($producto) > 0){
            //obtenemos el contenido del carrito
            $carrito = $this->cart->contents();

            foreach ($carrito as $item) {
                // si el id del producto es igual que uno que ya tengamos
                // en la cesta le sumamos uno a la cantidad
                if ($item['id'] == $id) {
                    $cantidad = 1 + $item['qty'];
                }
            }
            //cogemos los productos en un array para insertarlos en el carrito
            $insert = array(
                'id'    => $id,
                'qty'   => $cantidad,
                'price' => $producto->prod_precio,
                'name'  => $producto->prod_nombre,
                'img'   => $producto->prod_img_grande
            );
            $stock_products = $this->inicio->_get_products_stock($producto->prod_id);

            if(empty($stock_products->num_rows) > 0){
                // $num = $stock_products->prod_stock - $data['qty'];
                // if( $num < 0){
                //     echo 'FALSE';
                // }else{
                // }

                    $this->cart->insert($insert);
                    $this->session->set_flashdata('agregado', 'El producto fue agregado correctamente');
                    redirect(base_url().'inicio/shop/cart', 'refresh');
            }
            //insertamos al carrito
            //cogemos la url para redirigir a la página en la que estabamos
            //redirigimos mostrando un mensaje con las sesiones flashdata
            //de codeigniter confirmando que hemos agregado el producto

            // echo $uri;
            // die();
            
            redirect(base_url().'inicio/shop/cart', 'refresh');

        }else{
            redirect(base_url().$uri, 'refresh');
            echo '- NO HAY';
        }
        //End
    }

    public function cart(){
        ## Inicio de Sesión
        $data['page_title'] = 'Shop';

        ## Template Admin Dashboard
        $data['module'] = 'inicio';
        $data['view_file'] = 'shop_cart';
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
        echo Modules::run('template/footer_front',$data);
    }

    public function empty_cart_id($id){

        $total = $this->cart->total_items();
        $nu = 0;
        //$item = $id;
        $data = array(
           'rowid' => $id,
           'qty'   => $nu
        );
        $dato =  $this->cart->update($data);
        redirect(base_url().'inicio/shop/cart', 'refresh');
    }

    public function compra(){
        //print_r($this->input->post());
        $cambio_dolar = $this->config->item('dolar');
        $tipo_cambio = $this->config->item('tipo_cambio');
        //$this->load->library("email");
        $this->load->model('inicio_model', 'inicio', TRUE);

        // Datos
        $carrito = $this->cart->contents();

        $tipopago   = $this->input->post('tipopedido');
        $courrier   = $this->input->post('courrier');

        $nombre     = $this->input->post('name');
        $apellido   = $this->input->post('apellido');
        $email      = $this->input->post('email');
        $celular    = $this->input->post('celular');
        $dep        = $this->input->post('dep');
        $prov       = $this->input->post('prov');
        $dist       = $this->input->post('dist');
        $direc      = $this->input->post('direccion');
        $ref        = $this->input->post('referencia');
        $codigo_generado = $this->generar_clave();
        $fecha_hoy = date('Y-m-d');
        //$cinf['prod'] = array_combine($idprod, $cantidad);

        if(empty($carrito)){
            echo '<script>';
            echo 'alert("Ingrese un producto como minimo")';
            echo '</script>';
            redirect(base_url().'inicio/shop','refresh');
        }

        $courrier_flete = '';
        switch ($courrier) {
            case 'serpost':
                    $courrier_flete = $this->config->item('serpost');
                break;
            case 'courrier':
                    $courrier_flete = $this->config->item('courrier');
                break;
        }

        $dAgregar = array(
            'nombre'    => $nombre,
            'apellido'  => $apellido,
            'email'     => $email,
            'celular'   => $celular,
            'dep'       => $dep,
            'prov'      => $prov,
            'dist'      => $dist,
            'direc'     => $direc,
            'ref'       => $ref,
            'tipopago'  => $tipopago,
            'courrier'  => $courrier,
            'precio_flete' => $courrier_flete,
            'codigoPago' => $codigo_generado,
            'fecha'     => $fecha_hoy
        );
        // print_r($dAgregar);
        // die();

        $idPedido = $this->inicio->_insert_productos($dAgregar);

        //-----------------------------------------
        $html = "<table>";

            $html .= "<tr>";
            $html .= "<td colspan='2'>Hola <strong>".$nombre."</strong></td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td colspan='2'>Estos son los datos de tu compra.</td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td colspan='2'></td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td><strong>CODIGO PEDIDO:</strong></td>";
            $html .= "<td>".$codigo_generado."</td>";
            $html .= "</tr>";

            
            $html .= "<tr>";
            $html .= "<td><strong>NOMBRE:</strong></td>";
            $html .= "<td>".$nombre."</td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td><strong>APELLIDO:</strong></td>";
            $html .= "<td>".$apellido."</td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td><strong>EMAIL:</strong></td>";
            $html .= "<td>".$email."</td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td><strong>CELULAR:</strong></td>";
            $html .= "<td>".$celular."</td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td><strong>DEPARTAMENTO:</strong></td>";
            $html .= "<td>".$this->nombreDep($dep)."</td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td><strong>PROVINCIA:</strong></td>";
            $html .= "<td>".$this->nombreProv($prov)."</td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td><strong>DISTRITO:</strong></td>";
            $html .= "<td>".$this->nombreDist($dist)."</td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td><strong>DIRECCION:</strong></td>";
            $html .= "<td>".$direc."</td>";
            $html .= "</tr>";

            $html .= "<tr>";
            $html .= "<td><strong>REFERENCIA:</strong></td>";
            $html .= "<td>".$ref."</td>";
            $html .= "</tr>";
            $html .= "</table>";

            $html .= "<br/><br/>";
            $html .= "<hr>";
            //Lista
            $html .= '<table>';
            $html .= '<tr>';
            $html .= '<td><strong>IMAGEN</strong></td>';
            $html .= '<td><strong>NOMBRE</strong></td>';
            $html .= '<td><strong>PRECIO</strong></td>';
            $html .= '<td><strong>CANTIDAD</strong></td>';
            $html .= '<td><strong>SUB TOTAL</strong></td>';
            $html .= '</tr>';
        
        $total = 0;

        //echo $html;
            foreach ($carrito as $valor) {
                $lstProd = $this->inicio->_get_products_id($valor['id']);
                //die();
                    $idProd     =  $lstProd->prod_id;
                    $nomProd    =  $lstProd->prod_nombre;
                    $montoProd  =  $lstProd->prod_precio;
                    $imgProd    =  $lstProd->prod_img_grande;
                    $subtotal   = $valor['subtotal'];
                    
                    $rDetalle_ped = array(
                        'idpedido' => $idPedido,
                        'cantidad' => $valor['qty'],
                        'idprod' => $valor['id'],
                        'subtot' => $subtotal,
                        'fecha' => $fecha_hoy
                    );
                    
                    $this->inicio->_insert_detalle_productos($rDetalle_ped);

                    $html .= '<tr>';
                    $html .= '<td><img src="'.base_url().'uploads/producto/'.$idProd.'/thumbs/'.$imgProd.'" style="width: 120px;"></td>';
                    $html .= '<td>'.$nomProd.'</td>';
                    $html .= '<td>'.$montoProd.'</td>';
                    $html .= '<td>'.$valor['qty'].'</td>';
                    $html .= '<td>'.$tipo_cambio.$subtotal.'</td>';
                    $html .= '</tr>';
                
            }
        //}
        
        $flete = empty($courrier_flete) ? 0 : $courrier_flete;
        $total = $this->cart->format_number($this->cart->total());
        $total_fle = ($total + $flete);
        $html .= '</table>';

            $html .= '<table>';
            $html .= '<tr>';
            $html .= '<td><strong>COSTO DE ENVIO:</strong></td>';
            $html .= '<td>'.$tipo_cambio.$flete.'</td>';
            $html .= '</tr>';
            $html .= '<tr>';
            $html .= '<td><strong>SUB TOTAL:</strong></td>';
            $html .= '<td>s/.'.$total.'</td>';
            $html .= '</tr>';
            $html .= '<tr>';
            $html .= '<td><strong>TOTAL:</strong></td>';
            $html .= '<td>'.$tipo_cambio.$this->cart->format_number($total_fle).'</td>';
            $html .= '</tr>';
            $html .= '</table>';
        $html .= '<br>';

        $html .= '<table>';
            $html .= '<tr>';
            $html .= '<td>Ahora debes seguir los siguiente pasos:</td>';
            $html .= '</tr>';

            $html .= '<tr>';
            $html .= '<td>1) Deposita en la cuenta corriente de nuestra empresa el monto total indicado ('.$tipo_cambio.' <strong>'.$this->cart->format_number($total_fle).'</strong>) Los datos son: Cuenta corriente BCP soles Nº <strong>'.$this->config->item("numero_cuenta").' </strong> a nombre de <strong>'.$this->config->item("empresa").'</strong></td>';
            $html .= '</tr>';

            $html .= '<tr>';
            $html .= '<td>1) Para esto puedes acercarte a cualquier agente BCP a pagar (no necesitas ser cliente del BCP para esto) o hacerlo por internet (si eres cliente del BCP). </td>';
            $html .= '</tr>';

            $html .= '<tr>';
            $html .= '<td>2) Envíanos el comprobante de depósito (voucher) a esta misma dirección email INDICANDO tu CODIGO DE PEDIDO <strong>'.$codigo_generado.'</strong></td>';
            $html .= '</tr>';

            $html .= '<tr>';
            $html .= '<td>¡Y listo! Confirmaremos tu pago durante el siguiente día hábil posterior a la recepción de tu voucher y procederemos a enviar tu pedido a la dirección que indicaste</td>';
            $html .= '</tr>';

            $html .= '<tr>';
            $html .= '<td>TIEMPO DE ENTREGA VIA COURIER: 2 a 3 días hábiles (sin contar sábados, domingos ni feriados) 
                    IMPORTANTE: Tienes 2 días para pagar este pedido de lo contrario se anulará automáticamente. 
                    Por cualquier duda o consulta puedes escribirnos a esta misma dirección de email. </td>';
            $html .= '</tr>';


            $html .= '<tr>';
            $html .= '<td><strong>¡¡HASTA PRONTO Y GRACIAS POR COMPRAR EN '.strtoupper($this->config->item("empresa")).'!!</strong></td>';
            $html .= '</tr>';
        $html .= '</table>';

        //$this->paypal->add('PAGO COURRIER',number_format(($flete / $cambio_dolar),2,'.',''));
        echo $html;
        die();
        $validado = $this->comprobar_email($email);
        //$destino ="tello_jr2@hotmail.com";
        if($validado == 1 ){

            $destino ="zkated@gmail.com";
            $asunto = "Solicitud de Pedido"; 
            
            $cabeceras = "From: ".$email."\r\n";
            $cabeceras .= "MIME-Version: 1.0\r\n";
            $cabeceras .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($destino,$asunto,$html,$cabeceras);
            $this->cart->destroy();
            $this->session->set_flashdata('mensaje','Mensaje enviado correctamente');
            redirect(base_url().'inicio/shop','refresh');
            //echo true;                      
        }else{
            $this->session->set_flashdata('mensaje','Ocurrio un error intentelo nuevamente');
            redirect(base_url().'inicio/shop','refresh');
            //redirect(base_url().'solicitud');
        }
        

        // -------------------------
    }

    public function generar_clave(){
        $key = "";
        $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        //aquí podemos incluir incluso caracteres especiales pero cuidado con las ‘ y “ y algunos otros
        $length = 10;
        $max = strlen($caracteres) - 1;
        for ($i=0;$i<$length;$i++) {
            $key .= substr($caracteres, rand(0, $max), 1);
        }
        
        return $key;
    }

    public function comprobar_email($email){ 
        $mail_correcto = 0; 
        //compruebo unas cosas primeras 
        if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
            if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 
                //miro si tiene caracter . 
                if (substr_count($email,".")>= 1){ 
                    //obtengo la terminacion del dominio 
                    $term_dom = substr(strrchr ($email, '.'),1); 
                    //compruebo que la terminación del dominio sea correcta 
                    if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
                        //compruebo que lo de antes del dominio sea correcto 
                        $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
                        $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
                        if ($caracter_ult != "@" && $caracter_ult != "."){ 
                            $mail_correcto = 1; 
                        }
                    }
                }
            }
        }
        if ($mail_correcto) 
                return 1;
        else
                return 0;
    }

    public function nombreDep($id){
        if($id == 0){
            return 'SIN INFORMACIÓN';
        }else{
            $this->load->model('inicio_model', 'inicio', TRUE);
            $dep = $this->inicio->nomDep($id);
            return $dep['dep_var_descripcion']; 
        }
    }

    public function nombreProv($id){
        if($id == 0){
            return 'SIN INFORMACIÓN';
        }else{
            $this->load->model('inicio_model', 'inicio', TRUE);
            $dep = $this->inicio->nomProv($id);
            return $dep['prv_var_descricpion']; 
        }
    }

    public function nombreDist($id){
        if($id == 0){
            return 'SIN INFORMACIÓN';
        }else{
            $this->load->model('inicio_model', 'inicio', TRUE);
            $dep = $this->inicio->nomDist($id);
            return $dep['dist_var_descripcion']; 
        }
    }

    public function cargaDepartamento()
    {
        $this->load->model('inicio_model', 'inicio', TRUE);
        echo $this->inicio->cargaDepartamento();
    }

    public function cargaProvincia($id = "")
    {
        $this->load->model('inicio_model', 'inicio', TRUE);
        echo $this->inicio->cargaProvincia($id);
    }

    public function cargaDistrito($id = "")
    {
        $this->load->model('inicio_model', 'inicio', TRUE);
        echo $this->inicio->cargaDistrito($id);
    }

}

/*
*end modules/login/controllers/dashboard.php
*/