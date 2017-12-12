<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciativas_model extends CI_Model {

	public function getIniciativas(){
		$this->db->select("i.*,g.descripcion as grupo");
		$this->db->from("iniciativa i");
		$this->db->join("grupo g","i.grupo = g.idgrupo");
		$this->db->where("i.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getIniciativa($id){
		$this->db->where("id_iniciativa",$id);
		$resultado = $this->db->get("iniciativa");
		return $resultado->row();
	}
	public function save($data){
		return $this->db->insert("iniciativa",$data);
	}

	public function update($id,$data){
		$this->db->where("id_iniciativa",$id);
		return $this->db->update("iniciativa",$data);
	}

}

