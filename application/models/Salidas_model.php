<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salidas_model extends CI_Model {

	public function getSalidas(){
		$resultados = $this->db->get("salida");
		return $resultados->result();	
	}

	public function save($data){
		return $this->db->insert("salida", $data);
	}

	/*public function getSalidas(){
		$this->db->select("a.*, u.nombres, u.apellidos");
		 $this->db->from("salida a");
		 $this->db->join("usuarios u", "a.usuario_id = u.id");
		 $resultados = $this->db->get();
		 if ($resultados->num_rows() > 0){
		 	return $resultados->result();
		 } else {
		 	return false;
		 }
	}*/
}