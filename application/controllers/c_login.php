<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_login');
	}

}

/* End of file c_inicio.php */
/* Location: ./application/controllers/c_inicio.php */