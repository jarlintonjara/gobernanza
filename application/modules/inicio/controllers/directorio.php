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
class Directorio extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('inicio_model', 'inicio', TRUE);
    }

    public function index()
    {
        
        ## Template Admin Dashboard
        $_data = array(
            'page_title' => 'Dashboard',
            'module'     => 'inicio',
            'view_file'  => 'directorio_view',
            'tipo'       => '',
            'titulo'     => 'Comite de Personas y Organización (CPO)'
        );

        echo Modules::run('template/head_front',$_data);
        echo Modules::run('template/front',$_data);
    }

    public function ordinario()
    {
        
        ## Template Admin Dashboard
        $_data = array(
            'page_title' => 'Dashboard',
            'module'     => 'inicio',
            'view_file'  => 'directorio_view',
            'tipo'       => 'ordinario',
            'titulo'     => 'Ordinario'
        );

        echo Modules::run('template/head_front',$_data);
        echo Modules::run('template/front',$_data);
    }

    public function extraordinario()
    {
        
        ## Template Admin Dashboard
        $_data = array(
            'page_title' => 'Dashboard',
            'module'     => 'inicio',
            'view_file'  => 'directorio_view',
            'tipo'       => 'extraordinario',
            'titulo'     => 'Extraordinario'
        );

        echo Modules::run('template/head_front',$_data);
        echo Modules::run('template/front',$_data);
    }

}

/*
*end modules/login/controllers/dashboard.php
*/