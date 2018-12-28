<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reabastecer extends CI_Controller {
private $permisos;   
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Reabastecer_model");
		$this->load->model("Productos_model");
	}

	public function add(){
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reabastecer/add");
		$this->load->view("layouts/footer");
	}

	public function index(){
		$data = array(
			"permisos" => $this->permisos, 
			'abastecer' => $this->Reabastecer_model->getAbastecimientos(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reabastecer/list", $data);
		$this->load->view("layouts/footer");
	}

	public function getProveedor(){
		$valorProveedor = $this->input->post("valorProveedor");
		$prov = $this->Reabastecer_model->getProveedor($valorProveedor);
		echo json_encode($prov);
	}

	public function getProductos(){
		$valor = $this->input->post("valor");
		$producto = $this->Reabastecer_model->getProductos($valor);
		echo json_encode($producto);
	}

	public function store(){
		$fecha = $this->input->post("fecha");
		$idproductos =$this->input->post("idProductos");
		$cantidades =$this->input->post("cantidades");
		$importe =$this->input->post("importes");
		$total = $this->input->post("total-reabastecer");
		$idProveedor = $this->input->post("idproveedor");
		$idusuario = $this->session->userdata('id'); 

		$data = array(
			'fecha' => $fecha,
			'total_abastecer' => $total,
			'usuario_id' => $idusuario,
			'proveedor_id' => $idProveedor,
		);

		if ($this->Reabastecer_model->save($data)){
			$idAbastecer = $this->Reabastecer_model->lastID(); 
			$this->save_detalle($idproductos, $idAbastecer, $cantidades, $importe, $fecha); //guardando el detalle de la venta
			redirect(base_url()."movimientos/reabastecer"); //redirigiendo a la lista de ventas
		} else {
			redirect(base_url()."movimientos/reabastecer/add");
		}
	}

	protected function updateProducto($idProducto, $cantidad ,$fecha){
		$productoActual = $this->Productos_model->getProducto($idProducto);
		$data = array(
			'stock' => $productoActual->stock + $cantidad,
			'fecha_i'=> $fecha
		);
		$this->Productos_model->update($idProducto, $data);
	}

	public function view(){
		$idAbastecimiento = $this->input->post("id");
		$data = array(
			'datos' => $this->Reabastecer_model->getAbastecimiento($idAbastecimiento),
			'detalles' => $this->Reabastecer_model->getDetalle($idAbastecimiento)
		);
		$this->load->view("admin/reabastecer/view", $data);
	}

	//funcion para guardar el detalle de la venta
	protected function save_detalle($productos, $idAbastecimiento, $cantidades, $importes,$fecha ){
		for ($i=0; $i < count($productos); $i++) { 
			$data = array(
				'abastecer_id' => $idAbastecimiento,
				'producto_id' => $productos[$i],
				'cantidad_abastecer' => $cantidades[$i],
				'importe' => $importes[$i],
			);
			$this->Reabastecer_model->save_detalle($data);
			$this->updateProducto($productos[$i], $cantidades[$i], $fecha); //actualizamos el stock del producto
		}
	}
}