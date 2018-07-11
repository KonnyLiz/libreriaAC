<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendedores_model extends CI_Model {
 
	public function login($username, $password){
		$this->db->where("username", $username);
		$this->db->where("password", $password);

		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
	public function getRoles(){
		$resultados = $this->db->get("roles");
		return $resultados ->result();
	}

	public function getUsuarios(){
		$this->db->where("estado","1");
		$this->db->where("rol_id","3");
		$resultados = $this->db->get("usuarios");
		return $resultados->result();
	}
	public function getUsuario($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("usuarios");
		return $resultado->row();
	}
	public function save($data){
		return $this->db->insert("usuarios",$data);
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("usuarios",$data);
	}

}
