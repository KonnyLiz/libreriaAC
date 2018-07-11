<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reabastecer_model extends CI_Model {

	public function getProductos($valor){
		$this->db->select("id, codigo, nombre as label, precio_entrada, stock");
		$this->db->from("productos");
		$this->db->like("nombre", $valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}

	public function save($data){
		return $this->db->insert("abastecer", $data);
	}

	public function getAbastecimientos(){
		$this->db->select("a.*, u.nombres, u.apellidos");
		 $this->db->from("abastecer a");
		 $this->db->join("usuarios u", "a.usuario_id = u.id");
		 $resultados = $this->db->get();
		 if ($resultados->num_rows() > 0){
		 	return $resultados->result();
		 } else {
		 	return false;
		 }
	}

	public function lastID(){
		return $this->db->insert_id();
	}

	public function save_detalle($data){
		$this->db->insert("detalle_abastecer", $data);
	}

	//obteniendo los datos de abastecimuento por el id 
	public function getAbastecimiento($id){
		$this->db->select("a.*, u.nombres, u.apellidos");
		 $this->db->from("abastecer a");
		 $this->db->join("usuarios u", "a.usuario_id = u.id");
		 $this->db->where("a.id", $id);
		 $resultado = $this->db->get();
		 return $resultado->row();
	}

	public function getDetalle($id){
		$this->db->select("dt.*, p.codigo, p.nombre, p.precio_entrada");
		$this->db->from("detalle_abastecer dt");
		$this->db->join("productos p", "dt.producto_id = p.id");
		$this->db->where("dt.abastecer_id", $id);
		$resultados = $this->db->get();
		return $resultados->result();
	}
}