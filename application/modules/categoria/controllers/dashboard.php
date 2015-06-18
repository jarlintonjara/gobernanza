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
class Dashboard extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoria_model', 'categoria', TRUE);
    }

    public function index()
    {
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'admin')
        {
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }

        //$data['lst_categoria'] = $this->categoria->_lst_categoria(4);
        $data['categoria_general'] = $this->categoria->_lst_categoria();
        ## Inicio de Sesión
        $data['page_title'] = 'Dashboard';

        ## Template Admin Dashboard
        $data['module'] = 'categoria';
        $data['view_file'] = 'index_view';
        echo Modules::run('template/header_login',$data);
        echo Modules::run('template/admin',$data);
        echo Modules::run('template/footer_admin',$data);
    }

    public function bucle_categoria($array,$id = NULL){


        if($id == 0){
            $categ = $this->categoria->_listado_categoria();
        }else{
            $categ = $this->categoria->_listado_categoria();
        }
        return $categ;
    }

    public function create_categoria(){
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


        $data['estado'] = '';
        $data['idcategoria'] = '';

        $data['padre'] = $this->categoria->_lst_cbo_categoria();
        $data['idpadre'] = 0;
        $data['page_title'] = 'Creación Banner Collections';
        ## Template Admin Dashboard
        $data['module'] = 'categoria';
        $data['view_file'] = 'categoria_inserta_view';
        echo Modules::run('template/header_login',$data);
        echo Modules::run('template/admin',$data);
        echo Modules::run('template/footer_admin',$data);
    }

    public function edit_categoria($id = null){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'admin')
        {
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }

        ## Formulario
        $dt_categoria = $this->categoria->_obtener_datos_categoria((int)$id);
        if(count($dt_categoria)!=0){

            $data['nombre'] = array(
                'name'  => 'nombre',
                'id'    => 'nombre',
                'class' => 'form-control',
                'type'  => 'text',
                'required' => 'required',
                'value' => $dt_categoria['cat_nombre']
            );


            $data['idcategoria'] = $dt_categoria['cat_id'];
            $data['estado']   = $dt_categoria['cat_estado'];

            $data['page_title'] = 'Editar Banner Collections';
            ## Template Admin Dashboard
            $data['module'] = 'categoria';
            $data['view_file'] = 'categoria_inserta_view';
            echo Modules::run('template/header_login',$data);
            echo Modules::run('template/admin',$data);
            echo Modules::run('template/footer_admin',$data);

        }elseif($id == '' or is_string($id)){
            redirect('categoria/dashboard','refresh');
        }

    }

    public function delete($id){
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'admin')
        {
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }

        ## Programing
        $additional_data = array(
            'cat_estado'   => 2,
        );
        $this->categoria->_update_categoria($additional_data,$id);
        $this->session->set_flashdata('message', 'delete');
        redirect(base_url().'categoria/dashboard','refresh');
    }

    ## Creación y Edición de cada categoria
    public function cu_categoria(){
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
        $this->form_validation->set_rules('id', 'Código', 'xss_clean');
        if ($this->form_validation->run() == true)
        {
            $id          = $this->input->post('idcategoria');
            $nombre      = $this->input->post('nombre');
            $estado      = $this->input->post('estado');

            $arr_datos = array(
                'cat_nombre'         =>  $nombre,
                'cat_fecha_created'  => date('Y-m-d'),
                'cat_estado'         => $estado
            );
            if(!empty($id)){
                $this->session->set_flashdata('message', 'update');
                $this->categoria->_update_categoria($arr_datos,(int)$id);
                redirect('categoria/dashboard','refresh');
            }else{
                $ins_categoria = $this->categoria->_insert_categoria($arr_datos);
                if(!$ins_categoria){
                    $this->session->set_flashdata('message', 'error');
                }
                redirect('categoria/dashboard','refresh');
            }
        }else{
            $this->session->set_flashdata('message', 'error');
            print_r(validation_errors()); //die();
            redirect('categoria/dashboard','refresh');
        }
    }


}

/*
*end modules/login/controllers/dashboard.php
*/