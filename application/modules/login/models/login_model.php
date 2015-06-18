<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function login_user($username,$password)
	{
		$this->db->where('user_email',$username);
		$this->db->where('user_password',$password);
		$this->db->where('user_estado',1);

		$query = $this->db->get('cay_user');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			redirect('login/inicio','refresh');
		}
	}

}
