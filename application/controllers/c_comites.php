<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_comites extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_comites');
	}

}

/* End of file c_comites.php */
/* Location: ./application/controllers/c_comites.php */