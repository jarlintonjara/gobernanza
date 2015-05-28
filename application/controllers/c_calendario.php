<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_calendario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_calendario');
	}

}

/* End of file c_calendario.php */
/* Location: ./application/controllers/c_calendario.php */