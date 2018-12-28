<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendarios_model extends CI_Model {

	public function getEventos(){
		$this->db->select("id_evento id, nombre title, fecha_i start, fecha_f end");
		 $this->db->from("eventos");
		return $this->db->get()->result();
	}
	
	public function updEvento($param){
		$campos = array(
			'fecha_i' => $param['fecini'],
			'fecha_f' => $param['fecfin']
			);

		$this->db->where('id_evento',$param['id']);
		$this->db->update('eventos',$campos);

		if ($this->db->affected_rows() == 1) {
			return 1;
		}else{
			return 0;
		}
	}

	public function deleteEvento($id){
		$this->db->where('id_evento', $id);
		return $this->db->delete('eventos');
	}

	public function updEvento2($param){
		$campos = array(
			'nombre' => $param['nome'],
			'fecha_i' => $param['fi'],
			'fecha_f' => $param['ff'],
			);

		$this->db->where('id_evento',$param['id']);
		$this->db->update('eventos',$campos);

		if ($this->db->affected_rows() == 1) {
			return 1;
		}else{
			return 0;
		}
	}

	public function save1($param){
		return $this->db->insert("eventos",$param);
	}

}
