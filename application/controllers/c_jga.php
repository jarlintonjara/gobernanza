<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_jga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_jga');
	}

}

/* End of file c_jga.php */
/* Location: ./application/controllers/c_jga.php */