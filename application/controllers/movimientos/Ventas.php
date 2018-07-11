<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {
private $permisos;      
	public function __construct(){
		parent::__construct();
		
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Ventas_model");
		$this->load->model("Clientes_model");
		$this->load->model("Productos_model");
	}

	public function index(){
		$data = array(
			"permisos" => $this->permisos, 
			'ventas' => $this->Ventas_model->getVentas(),
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ventas/list", $data);
		$this->load->view("layouts/footer");
	}
 
	public function add(){
		$data = array(
			"tipoComprobantes" => $this->Ventas_model->getComprobantes(),
			"clientes" => $this->Clientes_model->getClientes()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ventas/add", $data);
		$this->load->view("layouts/footer");
	}

	public function getProductos(){
		$valor = $this->input->post("valor");
		$clientes = $this->Ventas_model->getProductos($valor);
		echo json_encode($clientes);
	}

	//funcion para guardar la venta
	public function store(){
		$fecha = $this->input->post("fecha");
		$subtotal = $this->input->post("subtotal");
		$iva = $this->input->post("iva2");
		$descuento = $this->input->post("descuento");
		$total = $this->input->post("total");
		$idcomprobante = $this->input->post("idcomprobante");
		$idcliente = $this->input->post("idcliente");
		$idusuario = 1;
		$numero = $this->input->post("numero");
		$serie = $this->input->post("serie");

		$idproductos =$this->input->post("idProductos");
		$precios =$this->input->post("precios");
		$cantidades =$this->input->post("cantidades");
		$importes =$this->input->post("importes");

		$data = array(
			'fecha' => $fecha,
			'serie' => $serie,
			'subtotal' => $subtotal,
			'iva' => $iva,
			'descuento' => $descuento,
			'total' => $total,
			'cliente_id' => $idcliente,
			'usuario_id' => $idusuario,
			'num_documento' => $numero,
			'tipo_comprobante_id' => $idcomprobante
		);

		if ($this->Ventas_model->save($data)){
			$idVenta = $this->Ventas_model->lastID(); 
			$this->updateComprobante($idcomprobante); //actualizando el correlativo del comprobante
			$this->save_detalle($idproductos, $idVenta, $precios, $cantidades, $importes); //guardando el detalle de la venta
			redirect(base_url()."movimientos/ventas"); //redirigiendo a la lista de ventas
		} else {
			redirect(base_url()."movimientos/ventas/add");
		}
	}

	//funcion para actualizar el correlativo de los comprobantes
	protected function updateComprobante($idComprobante){
		$comprobanteActual = $this->Ventas_model->getComprobante($idComprobante);
		$data = array(
			'cantidad' => $comprobanteActual->cantidad + 1,
		);
		$this->Ventas_model->updateComprobante($idComprobante, $data);
	}

	//funcion para guardar el detalle de la venta
	protected function save_detalle($productos, $idVenta, $precios, $cantidades, $importes){
		for ($i=0; $i < count($productos); $i++) { 
			$data = array(
				'producto_id' => $productos[$i],
				'venta_id' => $idVenta,
				'precio' => $precios[$i],
				'cantidad' => $cantidades[$i],
				'importe' => $importes[$i],
			);
			$this->Ventas_model->save_detalle($data);
			$this->updateProducto($productos[$i], $cantidades[$i]); //actualizamos el stock del producto
		}
	}

	//funcion para actuilzar el stock de los productos
	protected function updateProducto($idProducto, $cantidad){
		$productoActual = $this->Productos_model->getProducto($idProducto);
		$data = array(
			'stock' => $productoActual->stock - $cantidad,
		);
		$this->Productos_model->update($idProducto, $data);
	}

	//obtiene de un input el id de la venta a mostrar detalles
	public function view(){
		$idVenta = $this->input->post("id");
		$data = array(
			"venta" => $this->Ventas_model->getVenta($idVenta),
			"detalles" => $this->Ventas_model->getDetalle($idVenta)
		);
		$this->load->view("admin/ventas/view", $data);
	}

	public function save_Cliente(){
		$nombres = $this->input->post("nombre2");
		$grupo  =  null;
		$apellidos = $this->input->post("r2");
		$telefono = $this->input->post("r3");
		$dui = $this->input->post("r4");
		$nit = $this->input->post("r5");
		$direccion = $this->input->post("r6");
		$registro = $this->input->post("r7");
		$empresa = $this->input->post("r8");
		$estado = 1;


		$data  = array(
			'grupo' => $grupo, 
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'telefono' => $telefono,
			'dui' => $dui,
			'nit' => $nit,
			'direccion' => $direccion,
			'registro' => $registro,
			'empresa' => $empresa,
			'estado' => $estado
		);

		if ($this->Ventas_model->save_Cliente($data)) {
			redirect(base_url()."movimientos/ventas/add");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."movimientos/ventas/add");
		}
	}
}