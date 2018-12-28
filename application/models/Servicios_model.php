<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Servicios_model extends CI_Model {
 
	public function getServicios(){
		//$this->db->where("estado","1");
		$resultados = $this->db->get("servicios");
		return $resultados->result();
	}
	public function getServicio($id){
		$this->db->where("id_servicio",$id);
		$resultado = $this->db->get("servicios");
		return $resultado->row();

	}
	public function save($data){
		return $this->db->insert("servicios",$data);
	}
	public function update($id,$data){
		$this->db->where("id_servicio",$id);
		return $this->db->update("servicios",$data);
	}

}
