<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_sesiones_de_directorio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_sesiones_de_directorio');
	}

}

/* End of file c_sesiones_de_directorio.php */
/* Location: ./application/controllers/c_sesiones_de_directorio.php */