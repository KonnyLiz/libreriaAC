<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {
	
	public function getComprobantes(){
		$resultados = $this->db->get("tipo_comprobante");
		return $resultados->result();
	}
 
	public function getProductos($valor){

			$this->db->select("prod.id, prod.codigo, prod.nombre, prod.precio, prod.stock, 
			prod.precio_mayoreo1 as precio2,prod.precio_mayoreo2 as precio3, tp.nombre as tipo_presentacion");
			$this->db->from("productos prod");
			$this->db->join("tipo_presentacion tp", "prod.id_presentacion = tp.id");
			$this->db->like("prod.estado", "1");
			$this->db->like("prod.nombre", $valor);
			$resultados = $this->db->get();
			return $resultados->result();
	}

	public function getClientes($valor){
		$this->db->select("id, nombres");
		$this->db->from("clientes");
		$this->db->like("nombres", $valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}

	public function getSiExisteServicio($valor){
        $this->db->select("nombre");
			$this->db->from("servicios");
			$this->db->like("nombre", $valor);
			$resultados = $this->db->get();

			return $resultados->num_rows();
    }

    function getServicio($valor){
    	$this->db->select("serv.id_servicio as id, serv.nombre, serv.precio, serv.precio2, serv.precio3, tp.nombre as tipo_presentacion");
			$this->db->from("servicios serv");
			$this->db->join("tipo_presentacion tp", "serv.id_presentacion = tp.id");
			$this->db->like("serv.nombre", $valor);
			$resultados = $this->db->get();
			return $resultados->result_array();
    }

	// $this->db->select("prod.id, prod.codigo, prod.nombre, prod.precio, prod.stock, 
	// 		prod.precio_mayoreo1 as precio2,prod.precio_mayoreo2 as precio3, tp.nombre as tipo_presentacion");
	// 		$this->db->from("productos prod");
	// 		$this->db->join("tipo_presentacion tp", "prod.id_presentacion = tp.id");
	// 		$this->db->like("prod.estado", "1");
	// 		$this->db->like("prod.nombre", $valor);
	// 		$resultados = $this->db->get();
	// 		return $resultados->result();

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
		$this->db->insert("detalle_vjksdjkdentasssss", $data);
	}

	public function save_detalle_servicio($data){
		$this->db->insert("detalle_venta_servicio", $data);
	}

	//consulta a la base de datos para mostrar los datos de ventas
	public function getVentas(){
		$this->db->select("v.*, c.nombres as nombres, tc.nombre as tipo_comprobante, u.nombres as usuNombre, u.apellidos as usuApellido");
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

	public function getDetalleServicio($id){
		$this->db->select("dts.*, s.id_servicio, s.nombre");
		$this->db->from("detalle_venta_servicio dts");
		$this->db->join("servicios s", "dts.servicio_id = s.id_servicio");
		$this->db->where("dts.venta_id", $id);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getSiExisteVentaServicio($valor){
        $this->db->select("venta_id");
			$this->db->from("detalle_venta_servicio");
			$this->db->like("venta_id", $valor);
			$resultados = $this->db->get();

			return $resultados->num_rows();
    }

	public function save_Cliente($data){
		return $this->db->insert("clientes",$data);
	}
}