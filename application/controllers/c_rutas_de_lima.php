<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_rutas_de_lima extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_rutas_de_lima');
	}

}

/* End of file c_rutas_de_lima.php */
/* Location: ./application/controllers/c_rutas_de_lima.php */