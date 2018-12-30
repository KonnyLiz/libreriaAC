<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cajas_model extends CI_Model {
	
	public function save($data){
		return $this->db->insert("caja", $data);
	}

	public function lastID(){		
		return $this->db->insert_id();
	}

	public function getSaldo($id){
		$this->db->where("id", $id);
		$resultado = $this->db->get("caja");
		return $resultado->row();
	}

	public function updateCaja($idCaja, $data){
		$this->db->where("id", $idCaja);
		$this->db->update("caja", $data);
	}

	public function getCaja(){
		$this->db->from('caja');
$this->db->order_by("id", "DESC");
$query = $this->db->get(); 
return $query->result();
	
	}
}
