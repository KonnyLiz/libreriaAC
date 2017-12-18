<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

	public function getProductos(){
		$this->db->select("p.*,c.nombre as categoria_id,pr.nombre as id_proveedor,m.nombre as id_marca");
		$this->db->from("productos p");
		$this->db->join("categorias c","p.categoria_id = c.id");
		$this->db->join("marca m","p.id_marca = m.id_marca");
		$this->db->join("proveedor pr","p.id_proveedor = pr.id_proveedor");
		$this->db->where("p.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getProducto($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("productos");
		return $resultado->row();
	}
	public function save($data){
		return $this->db->insert("productos",$data); 
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("productos",$data);
	}

}

