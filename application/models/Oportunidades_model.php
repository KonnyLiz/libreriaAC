<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oportunidades_model extends CI_Model {

	public function getOportunidades(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("oportunidad");
		return $resultados->result();
	}
	public function getOportunidad($id){
		$this->db->where("id_oportunidad",$id);
		$resultado = $this->db->get("oportunidad");
		return $resultado->row();
	}
	public function save($data){
		return $this->db->insert("oportunidad",$data);
	}

	public function update($id,$data){
		$this->db->where("id_oportunidad",$id);
		return $this->db->update("oportunidad",$data);
	}

	public function save1($data){
		return $this->db->insert("eventos",$data);
	}

}
