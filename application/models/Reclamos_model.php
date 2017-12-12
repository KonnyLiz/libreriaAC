<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reclamos_model extends CI_Model {

	public function getReclamos(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("reclamos");
		return $resultados->result();
	}
	public function getReclamo($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("reclamos");
		return $resultado->row();

	}
	public function save($data){
		return $this->db->insert("reclamos",$data);
	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("reclamos",$data);
	}
}