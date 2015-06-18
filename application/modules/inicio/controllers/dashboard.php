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
        $this->load->model('inicio_model', 'inicio', TRUE);
    }

    public function index()
    {
        ## Template Admin Dashboard
        $_data = array(
            'page_title' => 'Dashboard',
            'module'     => 'inicio',
            'view_file'  => 'inicio_view'
        );

        echo Modules::run('template/head_front',$_data);
        echo Modules::run('template/front',$_data);
    }

    public function jga()
    {
        ## Template Admin Dashboard
        $_data = array(
            'page_title' => 'Dashboard',
            'module'     => 'inicio',
            'view_file'  => 'jga_view',
            'tipo'       => 'tipo'
        );

        echo Modules::run('template/head_front',$_data);
        echo Modules::run('template/front',$_data);
    }

    public function rdl()
    {
        ## Template Admin Dashboard
        $_data = array(
            'page_title' => 'Dashboard',
            'module'     => 'inicio',
            'view_file'  => 'rdl_view',
            'tipo'       => 'rdl'
        );

        echo Modules::run('template/head_front',$_data);
        echo Modules::run('template/front',$_data);
    }

}

/*
*end modules/login/controllers/dashboard.php
*/