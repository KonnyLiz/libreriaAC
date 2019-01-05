<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Servicios_model extends CI_Model {
 
	public function getServicios(){
		$this->db->from("servicios s");
		$this->db->select("s.*,pre.nombre as id_presentacion");
		$this->db->join("tipo_presentacion pre","s.id_presentacion = pre.id");/**/
		$resultados = $this->db->get();
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

	public function getSer($id){
		$this->db->where("id_servicio",$id);
		$resultado = $this->db->get("servicios");
		return $resultado->row();
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Productos_model->update($id,$data);
		echo "mantenimiento/productos";
	}
}
