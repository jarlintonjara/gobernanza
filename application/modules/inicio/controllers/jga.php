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
        $this->load->model('inicio_model', 'inicio', TRUE);
    }

    public function index()
    {
        
        $data['eventos_general'] = $this->inicio->_lst_eventos();

        ## Inicio de Sesión
        $data['page_title'] = 'Blog';

        ## Template Admin Dashboard
        $data['module'] = 'inicio';
        $data['view_file'] = 'eventos_view';
        echo Modules::run('template/head_front',$data);
        echo Modules::run('template/front',$data);
        echo Modules::run('template/footer_front',$data);
    }

    public function detail($id)
    {
        
        if($id == ''){
            redirect(base_url().'inicio/eventos','refresh');
        }else{
            $data['lst_evento'] = $this->inicio->_lst_evento_detail((int)$id);
            ## Inicio de Sesión
            $data['page_title'] = 'Shop';

            ## Template Admin Dashboard
            $data['module'] = 'inicio';
            $data['view_file'] = 'evento_detalle';
            echo Modules::run('template/head_front',$data);
            echo Modules::run('template/front',$data);
            echo Modules::run('template/footer_front',$data);
        }
    }

}

/*
*end modules/login/controllers/dashboard.php
*/