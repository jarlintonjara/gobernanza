<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */

class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function _lst_blog(){
        $this->db->select('*');
        $this->db->where('pag_tipo','blog');
        $this->db->where('pag_estado',1);
        $this->db->or_where('pag_estado',0);
        $this->db->from('cay_page');
        $this->db->order_by('pag_id','desc');
        $query = $this->db->get();
        $arrayResultado = $query->result();
        return $arrayResultado;
    }

    public function _insert_blog($arrPosts){
            $this->db->insert('cay_page', $arrPosts);
            return $this->db->insert_id();
        }

        public function _update_blog($arrPosts,$id){
            $this->db->where('pag_id', $id);
            return $this->db->update('cay_page', $arrPosts);
        }

        public function _obtener_datos_blog($id){
            $this->db->where('pag_id',(int)$id);
            $this->db->limit(1);
            $resultado = $this->db->get('cay_page');
            return $resultado->row_array();
        }
}