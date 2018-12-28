<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cajas_model extends CI_Model {

	public function getCaja(){
		$this->db->select("p.*,c.nombre as categoria");
		$this->db->from("productos p");
		$this->db->join("categorias c","p.categoria_id = c.id");
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

