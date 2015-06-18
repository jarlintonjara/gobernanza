<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*************************************************************
Página/Clase    : Modules/Slider/Controller/dashboard.php
Propósito       : Creacion de banners generales
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
        $this->load->model('nosotros_model','nosotros');
    }

    public function index()
    {
        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'admin')
        {
            $this->session->set_flashdata('usuario_incorrecto', 'sesion_login');
            redirect('login/inicio','refresh');
        }
        ## Programing
        $dt_historia = $this->nosotros->_obtener_datos_page('historia');
        $dt_vision   = $this->nosotros->_obtener_datos_page('vision');
        $dt_staff    = $this->nosotros->_obtener_datos_page('staff');


        ## Inicio de Sesión
        $data['page_title'] = 'Nosotros';

        $data['nombre'] = array(
            'name'  => 'nombre',
            'id'    => 'nombre',
            'class' => 'form-control',
            'type'  => 'text',
            'required' => 'required',
            'value' => $dt_historia['pag_titulo']
        );

        $data['describe'] = array(
            'name'  => 'describe',
            'id'    => 'describe',
            'class' => 'form-control',
            'type'  => 'text',
            'required' => 'required',
            'value' => $dt_historia['pag_contenido']
        );

        $data['id_page_h'] = $dt_historia['pag_id'];
        $data['id_page_v'] = $dt_vision['pag_id'];
        $data['id_page_s'] = $dt_staff['pag_id'];

        ## Misión y visión
        $data['nombre_vision'] = array(
            'name'  => 'nombre_vision',
            'id'    => 'nombre_vision',
            'class' => 'form-control',
            'type'  => 'text',
            'required' => 'required',
            'value' => $dt_vision['pag_titulo']
        );

        $data['describe_vision'] = array(
            'name'  => 'describe_vision',
            'id'    => 'describe_vision',
            'class' => 'form-control',
            'type'  => 'text',
            'required' => 'required',
            'value' => $dt_vision['pag_contenido']
        );
        ## Staff
        $data['titulo_staff'] = array(
            'name'  => 'titulo_staff',
            'id'    => 'titulo_staff',
            'class' => 'form-control',
            'type'  => 'text',
            'required' => 'required',
            'value' => $dt_staff['pag_titulo']
        );

        $data['describe_staff'] = array(
            'name'  => 'describe_staff',
            'id'    => 'describe_staff',
            'class' => 'form-control',
            'type'  => 'text',
            'required' => 'required',
            'value' => $dt_staff['pag_contenido']
        );

        ## Template Admin Dashboard
        $data['module'] = 'nosotros';
        $data['view_file'] = 'nosotros_form_view';
        echo Modules::run('template/header_login',$data);
        echo Modules::run('template/admin',$data);
        echo Modules::run('template/footer_admin',$data);
    }

    ## Creación y Edición de cada Slider
    public function page(){
        $this->form_validation->set_rules('id_page', 'Código', 'required|xss_clean');
        if ($this->form_validation->run() == true)
        {
            $id          = $this->input->post('id_page');

            $nombre_historia      = $this->input->post('nombre');
            $describe_historia    = $this->input->post('describe');

            $nombre_vision      = $this->input->post('nombre_vision');
            $describe_vision    = $this->input->post('describe_vision');

            $titulo_staff      = $this->input->post('titulo_staff');
            $describe_staff    = $this->input->post('describe_staff');

            $arr_datos = array();
            switch($id){
                case 1 :
                    $arr_datos = array(
                        'pag_titulo'         =>  $nombre_historia,
                        'pag_contenido'      =>  $describe_historia,
                        'pag_fecha_update'   => date('Y-m-d')
                    );
                    break;
                case 2:
                    $arr_datos = array(
                        'pag_titulo'         =>  $nombre_vision,
                        'pag_contenido'      =>  $describe_vision,
                        'pag_fecha_update'   => date('Y-m-d')
                    );
                break;
                case 3:
                    $arr_datos = array(
                        'pag_titulo'         =>  $titulo_staff,
                        'pag_contenido'      =>  $describe_staff,
                        'pag_fecha_update'   => date('Y-m-d')
                    );
                    break;
                default:
                    $this->session->set_flashdata('message', 'error');
                    redirect('nosotros/dashboard','refresh');
                    break;
            }

            if(!empty($id)){
                if(!empty($arr_datos)){
                    $this->session->set_flashdata('message', 'update');
                    $this->nosotros->_update_page($arr_datos,(int)$id);
                    redirect('nosotros/dashboard','refresh');
                }else{
                    $this->session->set_flashdata('message', 'error');
                    redirect('nosotros/dashboard','refresh');
                }

            }else{
                $this->session->set_flashdata('message', 'error');
                redirect('nosotros/dashboard','refresh');
            }
        }else{
            $this->session->set_flashdata('message', 'error');
            print_r(validation_errors());
            redirect('nosotros/dashboard','refresh');
        }
    }

}

/*
*end modules/login/controllers/dashboard.php
*/