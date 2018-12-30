<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presentacion_model extends CI_Model {

	public function getPresentacion(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("tipo_presentacion");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("tipo_presentacion",$data);
	}
	public function getPresent($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("tipo_presentacion");
		return $resultado->row();

	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("tipo_presentacion",$data);
	}
}
