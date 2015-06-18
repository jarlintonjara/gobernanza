<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller{

	## Dashboard Admin
    function header_admin($data){
        $this->load->view('layout/head_dash_view',$data);
    }
    function admin($data){
        $this->load->view('index_view_dash',$data);
    }
    function footer_admin($data){
        $this->load->view('layout/footer_dash_view',$data);
    }

	    
    ## Login
    function  header_login($data){
        $this->load->view('layout/head_login_view',$data);
    }
    function  login($data){
        $this->load->view('index_view',$data);
    }
    function  footer_login($data){
        $this->load->view('layout/footer_login_view',$data);
    }


    ## Front
    function  head_front($data){
        $this->load->view('front/layout/head_view',$data);
    }
    
    function  front($data){
        $this->load->view('front/inicio_view',$data);
    }

    function  footer_front($data){
        $this->load->view('front/layout/footer_view',$data);
    }

}