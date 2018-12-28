<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos_model extends CI_Model {

	public function getGrupos(){
		$resultados = $this->db->get("grupo");
		return $resultados->result();
	}

}
