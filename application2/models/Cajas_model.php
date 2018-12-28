<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cajas_model extends CI_Model {

	public function transaccionCaja($data2){
		return $this->db->insert("caja",$data2);
	}

}

