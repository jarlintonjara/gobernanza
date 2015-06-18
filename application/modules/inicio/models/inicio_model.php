<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Inicio_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	

	public function _lst_slider($id){
        $sql = "SELECT s.slide_nombre,s.slide_id,sd.* FROM cay_slider s INNER JOIN cay_detalle_slider sd
                ON s.slide_id = sd.dslide_idslider WHERE sd.dslide_estado=1 and s.slide_id =".$id;
        $datos = $this->db->query($sql);
        return $datos->result();
    }

    public function _lst_producto($limit = false){
        if($limit == false){
            $all = "limit 8";
        }else{
            $all = " ";
        }

        $sql = "SELECT p.*,c.cat_nombre FROM cay_producto p INNER JOIN cay_categoria c
                ON p.prod_cat_id = c.cat_id WHERE prod_estado = 1 order by prod_id desc ".$all;
        $datos = $this->db->query($sql);
        return $datos->result();
    }

    public function _lst_producto_rand(){
        $sql = "SELECT p.*,c.cat_nombre FROM cay_producto p INNER JOIN cay_categoria c
                ON p.prod_cat_id = c.cat_id WHERE prod_estado = 1 order by rand() limit 8";
        $datos = $this->db->query($sql);
        return $datos->result();
    }

    public function _lst_producto_detail($id){
        $sql = "SELECT p.*,c.cat_nombre FROM cay_producto p INNER JOIN cay_categoria c
                ON p.prod_cat_id = c.cat_id WHERE prod_id = ".$id." limit 1";
        $datos = $this->db->query($sql);
        return $datos->row_array();
    }

    public function _lst_producto_galeria($id){
        $this->db->select('*');
        $this->db->from('cay_galeria_producto');
        $this->db->where('gale_producto_id',$id);
        $this->db->where('gale_estado',1);
        $this->db->order_by('gale_id','desc');
        $query = $this->db->get();
        $arrayResultado = $query->result();
        return $arrayResultado;
    }

    public function _lst_blog(){
        $this->db->select('*');
        $this->db->from('cay_page');
        $this->db->where('pag_tipo','blog');
        $this->db->order_by('pag_id','desc');
        $query = $this->db->get();
        $arrayResultado = $query->result();
        return $arrayResultado;
    }

    public function _lst_eventos(){
        $this->db->select('*');
        $this->db->from('cay_page');
        $this->db->where('pag_tipo','evento');
        $this->db->where('pag_estado',1);
        $this->db->order_by('pag_id','desc');
        $query = $this->db->get();
        $arrayResultado = $query->result();
        return $arrayResultado;
    }

    public function _lst_evento_detail($id){
        $this->db->select('*');
        $this->db->from('cay_page');
        $this->db->where('pag_id',$id);
        $this->db->where('pag_estado',1);
        $this->db->limit(1);
        $query = $this->db->get();
        $arrayResultado = $query->row_array();
        return $arrayResultado;
    }


    //Cart
    public function _get_products_id($id){
        $this->db->where('prod_id',$id);
        $this->db->where('prod_estado',1);
        $this->db->limit(1);
        $query = $this->db->get('cay_producto');
        $arrayResultado = $query->result();
        foreach ($arrayResultado as $producto) {
            $data[] = $producto;
        }
        return $producto;
    }

    public function _get_products_stock($id){
        $this->db->select('prod_stock');
        $this->db->where('prod_id',$id);
        $this->db->where('prod_estado',1);
        $this->db->limit(1);
        $query = $this->db->get('cay_producto');
        $arrayResultado = $query->result();
        foreach ($arrayResultado as $producto) {
            $data[] = $producto;
        }
        return $producto;
    }


    public function _insert_productos($arrPosts){
        $this->db->insert('pedido', $arrPosts);
        return $this->db->insert_id();
    }

    public function _insert_detalle_productos($arrPosts){
        $this->db->insert('detalle_pedido', $arrPosts);
        return $this->db->insert_id();
    }


    // Cargar Departamento
    function cargaDepartamento()
    {
        $query = $this->db->query("SELECT pk_dep_int_id AS id, dep_var_descripcion AS descripcion
                                    FROM tm_departamentos WHERE dep_var_estado = 1 ORDER BY descripcion ASC");
        if($query->num_rows>0){
            $arraysito = array();
            foreach($query->result() as $row){
                $arraysito[] = array(
                        htmlspecialchars($row->id,ENT_QUOTES),
                        htmlspecialchars($row->descripcion,ENT_QUOTES)
                    );
            }
            $query->free_result();
            return json_encode($arraysito);
        }else{
            return json_encode(array(1=> array("-- No se encontraron registros--")));
        }
    }

    // Cargar Provincia
    function cargaProvincia($id)
    {
        if(empty($id) or !ctype_digit($id)) return false;

        $query = $this->db
        ->query("SELECT pk_prv_int_id AS id, prv_var_descricpion AS descripcion 
                 FROM tm_provincias WHERE fk_dep_int_id = ?
                 ORDER BY descripcion ASC",array($id));

        if($query->num_rows>0){
            $arraysito = array();
            foreach($query->result() as $row){
                $arraysito[] = array(
                        htmlspecialchars($row->id,ENT_QUOTES),
                        htmlspecialchars($row->descripcion,ENT_QUOTES)
                    );
            }
            $query->free_result();
            return json_encode($arraysito);
        }else{
            return json_encode(array(1=> array("-- No se encontraron registros--")));
        }
    }

    // Cargar Distrito
    function cargaDistrito($id)
    {
        if(empty($id) or !ctype_digit($id)) return false;

        $query = $this->db
        ->query("SELECT pk_dis_int_id AS id, dist_var_descripcion AS descripcion 
                 FROM tm_distritos WHERE fk_prv_int_id = ?
                 ORDER BY descripcion ASC",array($id));

        if($query->num_rows>0){
            $arraysito = array();
            foreach($query->result() as $row){
                $arraysito[] = array(
                        htmlspecialchars($row->id,ENT_QUOTES),
                        htmlspecialchars($row->descripcion,ENT_QUOTES)
                    );
            }
            $query->free_result();
            return json_encode($arraysito);
        }else{
            return json_encode(array(1=> array("-- No se encontraron registros--")));
        }
    }

    public function nomDep($id)
    {
        $arrayWhere = array("pk_dep_int_id"=>$id);
        $this->db->where($arrayWhere);  
        $this->db->select('*');
        $this->db->from('tm_departamentos');
        $query = $this->db->get();
        $arrayResultado = $query->row_array();
        return $arrayResultado;
    }

    public function nomProv($id)
    {
        $arrayWhere = array("pk_prv_int_id"=>$id);
        $this->db->where($arrayWhere);  
        $this->db->select('*');
        $this->db->from('tm_provincias');
        $query = $this->db->get();
        $arrayResultado = $query->row_array();
        return $arrayResultado;
    }


    public function nomDist($id)
    {
        $arrayWhere = array("pk_dis_int_id"=>$id);
        $this->db->where($arrayWhere);  
        $this->db->select('*');
        $this->db->from('tm_distritos');
        $query = $this->db->get();
        $arrayResultado = $query->row_array();
        return $arrayResultado;
    }
        

}
