<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_admin');
	}

	public function cfi()
	{
		$this->load->view('v_admincfi');
	}
	
		public function cfifechas()
	{
		$this->load->view('v_admincfifechas');
	}

	public function cpo()
	{
		$this->load->view('v_admincpo');
	}

		public function cpofechas()
	{
		$this->load->view('v_admincpofechas');
	}

	public function directorio()
	{
		$this->load->view('v_admindirectorio');
	}

	public function directoriofechas()
	{
		$this->load->view('v_admindirectoriofechas');
	}
	public function jga()
	{
		$this->load->view('v_adminjga');
	}

	public function jgafechas()
	{
		$this->load->view('v_adminjgafechas');
	}

	public function macroestructura()
	{
		$this->load->view('v_adminmacroestructura');
	}
	public function estatuto()
	{
		$this->load->view('v_adminestatuto');
	}
	public function usuarios()
	{
		$this->load->view('v_adminusuarios');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */