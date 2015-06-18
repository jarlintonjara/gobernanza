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
class Eventos extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Lima');
        $this->load->model('productos_model', 'productos', TRUE);
        $this->load->model('eventos_model', 'eventos', TRUE);
        $this->load->library('recursos');
    }

    public function index()
    {
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'admin')
        {
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }

        $data['eventos_general'] = $this->eventos->_lst_eventos();
        ## Inicio de Sesión
        $data['page_title'] = 'Eventos';

        ## Template Admin Dashboard
        $data['module'] = 'producto';
        $data['view_file'] = 'eventos/lst_eventos_view';
        echo Modules::run('template/header_login',$data);
        echo Modules::run('template/admin',$data);
        echo Modules::run('template/footer_admin',$data);
    }

    public function create_eventos(){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'admin')
        {
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }

        ## Formulario
            $data['nombre'] = array(
                'name'  => 'nombre',
                'id'    => 'nombre',
                'class' => 'form-control',
                'type'  => 'text',
                'required' => 'required',
                'value' => $this->form_validation->set_value('nombre')
            );

            $data['subtitulo'] = array(
                'name'  => 'subtitulo',
                'id'    => 'subtitulo',
                'class' => 'form-control',
                'type'  => 'text',
                'required' => 'required',
                'value' => $this->form_validation->set_value('subtitulo')
            );

            $data['imagen'] = array(
                'name'  => 'imagen',
                'id'    => 'imagen',    
                'data-classButton' => 'btn btn-default' ,
                'data-classInput' => 'form-control inline v-middle input-s',
                'type'  => 'file',
                'required'  => 'required',
                'value' => $this->form_validation->set_value('imagen'),
            );

            $data['descripcion'] = array(
                'name'  => 'descripcion',
                'id'    => 'descripcion',
                'class' => 'form-control',
                'type'  => 'text',
                'required' => 'required',
                'value' => $this->form_validation->set_value('descripcion')
            );


        $data['estado'] = '';
        $data['id_evento'] = '';

        $data['page_title'] = 'Creación Banner Collections';
        ## Template Admin Dashboard
        $data['module'] = 'producto';
        $data['view_file'] = 'eventos/frm_evento_view';
        echo Modules::run('template/header_login',$data);
        echo Modules::run('template/admin',$data);
        echo Modules::run('template/footer_admin',$data);
    }

    public function edit_eventos($id = null){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'admin')
        {
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }

        $dt_resultado = $this->eventos->_obtener_datos_eventos((int)$id);
        if(count($dt_resultado)!=0){
            ## Formulario
                $data['nombre'] = array(
                    'name'  => 'nombre',
                    'id'    => 'nombre',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => $dt_resultado['pag_titulo']
                );

                $data['subtitulo'] = array(
                    'name'  => 'subtitulo',
                    'id'    => 'subtitulo',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => $dt_resultado['pag_subtitulo']
                );

                $data['imagen'] = array(
                    'name'  => 'imagen',
                    'id'    => 'imagen',    
                    'data-classButton' => 'btn btn-default' ,
                    'data-classInput' => 'form-control inline v-middle input-s',
                    'type'  => 'file',
                    'value' => $dt_resultado['pag_imagen']
                );

                $data['descripcion'] = array(
                    'name'  => 'descripcion',
                    'id'    => 'descripcion',
                    'class' => 'form-control',
                    'type'  => 'text',
                    'required' => 'required',
                    'value' => $dt_resultado['pag_contenido']
                );


            $data['img_print']  = $dt_resultado['pag_imagen'];
            $data['estado']     = $dt_resultado['pag_estado'];
            $data['id_evento']  = $dt_resultado['pag_id'];

            $data['page_title'] = 'Creación Banner Collections';
            ## Template Admin Dashboard
            $data['module'] = 'producto';
            $data['view_file'] = 'eventos/frm_evento_view';
            echo Modules::run('template/header_login',$data);
            echo Modules::run('template/admin',$data);
            echo Modules::run('template/footer_admin',$data);
        }elseif($id == '' or is_string($id)){
            redirect('eventos/dashboard','refresh');
        }
    }


    public function cu_eventos(){

        $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
        $this->form_validation->set_rules('subtitulo', 'Sub Titulo', 'required|xss_clean');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|xss_clean');
        $this->form_validation->set_rules('estado', 'Estado', 'required|xss_clean');
        $this->form_validation->set_rules('id', 'Código', 'xss_clean');
        if ($this->form_validation->run() == true)
        {
            $id          = $this->input->post('id_evento');
            $nombre      = $this->input->post('nombre');
            $estado      = $this->input->post('estado');
            $descripcion = $this->input->post('descripcion');
            $subtitulo   = $this->input->post('subtitulo');

            $arr_datos = array(
                'pag_titulo'         =>  $nombre,
                'pag_subtitulo'      =>  $subtitulo,
                'pag_contenido'      =>  $descripcion,
                'pag_estado'         =>  $estado,
                'pag_tipo'           =>  'evento',
                'pag_fecha_creacion' =>  date('Y-m-d H:m:s')
            );
            if(!empty($id)){
                /*
                echo '<pre>';
                echo $id_producto;
                print_r($arr_datos);
                echo '</pre>';
                //die();
                print_r($imagen); 
                die();
                */
                $imagen = $this->recursos->upload_img_products('imagen','uploads/eventos/'.$id.'/');
                if(is_array($imagen)){
                    $this->session->set_flashdata('message', 'update');
                    $this->eventos->_update_eventos($arr_datos,(int)$id);
                }else{
                    $this->session->set_flashdata('message', 'update');
                    $arr_datos_temp = array(
                        'pag_imagen'    => $imagen,
                    );
                    $arr_inst_datos = array_merge($arr_datos,$arr_datos_temp);
                    $this->eventos->_update_eventos($arr_inst_datos,(int)$id);
                }
                redirect('producto/eventos','refresh');
            }else{
                $id_nuevo = $this->eventos->_insert_eventos($arr_datos);
                if($id_nuevo){
                    $imagen = $this->recursos->upload_img_products('imagen','uploads/eventos/'.$id_nuevo.'/');
                    if(is_array($imagen)){
                        $this->session->set_flashdata('message', 'error');
                    }else{
                        $this->session->set_flashdata('message', 'insert');
                        $arr_datos_temp = array(
                            'pag_imagen'    => $imagen,
                        );
                        $this->eventos->_update_eventos($arr_datos_temp,(int)$id_nuevo);
                    }
                }else{
                    $this->session->set_flashdata('message', 'error');
                }
                redirect('producto/eventos','refresh');
            }
        }else{
            $this->session->set_flashdata('message', 'error');
            print_r(validation_errors()); 
            sleep(5);
            redirect('producto/eventos','refresh');
        }
    }

    public function delete($id,$tipo = null){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'admin')
        {
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }

        ## Programing
            // 0 = Desactivado
            // 1 = Activado
            // 2 = Eliminado
        if($tipo == 0 and $tipo != null ){
            $this->session->set_flashdata('message', 'update');
            $additional_data = array(
                'pag_estado'   => 0,
            );
        }elseif($tipo == 1 and $tipo != null ){
            $this->session->set_flashdata('message', 'update');
            $additional_data = array(
                'pag_estado'   => 1,
            );
        }else{
            $this->session->set_flashdata('message', 'delete');
            $additional_data = array(
                'pag_estado'   => 2,
            );
        }

        $this->eventos->_update_eventos($additional_data,$id);
        redirect(base_url().'producto/eventos/','refresh');
    }
}