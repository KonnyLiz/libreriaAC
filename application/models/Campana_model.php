<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campana_model extends CI_Model {

	public function getCampanas(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("campanas");
		return $resultados->result();
	}
	public function getCampana($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("campanas");
		return $resultado->row();
	}
	public function save($data){
		return $this->db->insert("campanas",$data);
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("campanas",$data);
	}

	public function save1($data){
		return $this->db->insert("eventos",$data);
	}

}

