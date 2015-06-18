<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class Nosotros_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


    public function _obtener_datos_page($tipo){
        $this->db->where('pag_tipo',$tipo);
        $this->db->where('pag_estado',1);
        $this->db->limit(1);
        $resultado = $this->db->get('cay_page');
        return $resultado->row_array();
    }

    public function _update_page($arrPosts,$id){
        $this->db->where('pag_id', $id);
        return $this->db->update('cay_page', $arrPosts);
    }


}
