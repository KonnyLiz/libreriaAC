<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {
	
	public function getComprobantes(){
		$resultados = $this->db->get("tipo_comprobante");
		return $resultados->result();
	}

	public function getProductos($valor){
		$this->db->select("id, codigo, nombre as label, precio, stock");
		$this->db->from("productos");
		$this->db->like("nombre", $valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}

	public function save($data){
		return $this->db->insert("ventas", $data);
	}

	//retorna el ultimo id generado en la tabla ventas
	public function lastID(){
		return $this->db->insert_id();
	}

	public function getComprobante($id){ //retorna  la informacion del comprobante seleccionado
		$this->db->where("id", $id);
		$resultado = $this->db->get("tipo_comprobante");
		return $resultado->row();
	}

	//actualiza el correlativo del comprobante en la tabla tipo_comprobante
	public function updateComprobante($idComprobante, $data){
		$this->db->where("id", $idComprobante);
		$this->db->update("tipo_comprobante", $data);
	}

	//guarda los detalles de la venta
	public function save_detalle($data){
		$this->db->insert("detalle_venta", $data);
	}

	//consulta a la base de datos para mostrar los datos de ventas
	public function getVentas(){
		$this->db->select("v.*, c.nombres as nombres, c.apellidos as apellidos, tc.nombre as tipo_comprobante, u.nombres as usuNombre, u.apellidos as usuApellido");
		 $this->db->from("ventas v");
		 $this->db->join("clientes c", "v.cliente_id = c.id");
		 $this->db->join("usuarios u", "v.usuario_id = u.id");
		 $this->db->join("tipo_comprobante tc", "v.tipo_comprobante_id = tc.id");
		 $resultados = $this->db->get();
		 if ($resultados->num_rows() > 0){
		 	return $resultados->result();
		 } else {
		 	return false;
		 }
	}

	//obteniendo los datos de venta por el id de venta
	public function getVenta($id){
		$this->db->select("v.*, c.nombres, c.apellidos, c.direccion, c.telefono, u.nombres as usuNombre, u.apellidos as usuApellido, tc.nombre as tipo_comprobante");
		 $this->db->from("ventas v");
		 $this->db->join("clientes c", "v.cliente_id = c.id");
		 $this->db->join("usuarios u", "v.usuario_id = u.id");
		 $this->db->join("tipo_comprobante tc", "v.tipo_comprobante_id = tc.id");
		 $this->db->where("v.id", $id);
		 $resultado = $this->db->get();
		 return $resultado->row(); 
	}

	public function getDetalle($id){
		$this->db->select("dt.*, p.codigo, p.nombre");
		$this->db->from("detalle_venta dt");
		$this->db->join("productos p", "dt.producto_id = p.id");
		$this->db->where("dt.venta_id", $id);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function save_Cliente($data){
		return $this->db->insert("clientes",$data);
	}
}