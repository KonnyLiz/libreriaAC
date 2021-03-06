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
		$this->load->model("Servicios_model");
		$this->load->model("Cajas_model");
		$this->load->model("Presentacion_model");
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
			"clientes" => $this->Clientes_model->getClientes(),
			'servicios' => $this->Servicios_model->getServicios(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ventas/add", $data);
		$this->load->view("layouts/footer");
	}

	public function getProductos(){
		$valor = $this->input->post("valor");
		$existe = $this->Ventas_model->getSiExisteServicio($valor);
		if ($existe > 0){
			$servicio = $this->Ventas_model->getServicio($valor);
			echo json_encode($servicio);
		} else{
			$productos = $this->Ventas_model->getProductos($valor);
			echo json_encode($productos);
		}
	}

	public function getClientes(){
		$valor = $this->input->post("valor");
		$clientes = $this->Ventas_model->getClientes($valor);
		echo json_encode($clientes);
	}

	//funcion para guardar la venta
	public function store(){
		$fecha = $this->input->post("fechas");
		$subtotal = $this->input->post("subtotal");
		$iva = $this->input->post("iva2");
		$descuento = $this->input->post("descuento");
		$total = $this->input->post("total");
		$idcomprobante = $this->input->post("idcomprobante");
		$idcliente = $this->input->post("idcliente");
		$idusuario = $this->session->userdata("id"); ///hay que modificar esto
		$numero = $this->input->post("numero");
		$serie = $this->input->post("serie");
		$nombreProductos = $this->input->post("nombreProductos");
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
			'tipo_comprobante_id' => $idcomprobante,
			'estado' => "1",
 		);

		//operación para el saldo
		$dat2= array(
			'usuario' => $idusuario,
			'transaccion' => 'venta',
			'fecha' => $fecha,
			'monto' => $total,
			'saldo' => $total,
		);
		//guardamos el registro en caja
		if($this->Cajas_model->save($dat2)){
			$id_caja = $this->Cajas_model->lastID();
			$this->updateCaja($id_caja,$subtotal,1);//se actualiza el saldo de la caja
		}
		///////////////////////////////

		if ($this->Ventas_model->save($data)){
			$idVenta = $this->Ventas_model->lastID();
			$this->updateComprobante($idcomprobante); //actualizando el correlativo del comprobante
			$this->save_detalle($idproductos, $nombreProductos, $idVenta, $precios, $cantidades, $importes); //guardando el detalle de la venta
			//$this->caja($total);
			redirect(base_url()."movimientos/ventas"); //redirigiendo a la lista de ventas
		} else {
			redirect(base_url()."movimientos/ventas/add");
		}
	}

	//funcion para actualizar caja
	protected function updateCaja($idcaja,$subtotal,$tipo){

		$saldoActual = $this->Cajas_model->getSaldo($idcaja-1);
		if ($tipo == 1) {
			# code...
			$data = array(
			'saldo' => $saldoActual->saldo + $subtotal,
		);
		}else{
			$data = array(
				'saldo' => $saldoActual->saldo - $subtotal,
			);
		}
		$this->Cajas_model->updateCaja($idcaja, $data);
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
	protected function save_detalle($productos, $nombreProductos, $idVenta, $precios, $cantidades, $importes){
		$tipo = 1;
		$data;
		for ($i=0; $i < count($productos); $i++) {

			$valor = $nombreProductos[$i];
			$existe = $this->Ventas_model->getSiExisteServicio($valor);

			if ($existe > 0){
				$data = array(
				'servicio_id' => $productos[$i],
				'venta_id' => $idVenta,
				'precio' => $precios[$i],
				'cantidad' => $cantidades[$i],
				'importe' => $importes[$i],
				);
				$this->Ventas_model->save_detalle_servicio($data);

			} else {
				$data = array(
				'producto_id' => $productos[$i],
				'venta_id' => $idVenta,
				'precio' => $precios[$i],
				'cantidad' => $cantidades[$i],
				'importe' => $importes[$i],
			);
			$this->Ventas_model->save_detalle($data);
			if ($idcomprobante != 3) {
				$this->updateProducto($productos[$i], $cantidades[$i], $tipo); //actualizamos el stock del producto
			}
			}
		}
	}

	//funcion para actuilzar el stock de los productos
	protected function updateProducto($idProducto, $cantidad, $tipo){
		$productoActual = $this->Productos_model->getProducto($idProducto);
		if ($tipo == 1){
			$data = array(
				'stock' => $productoActual->stock - $cantidad,
			);
		} else {
			$data = array(
				'stock' => $productoActual->stock + $cantidad,
			);
		}
		$this->Productos_model->update($idProducto, $data);
	}

	//obtiene de un input el id de la venta a mostrar detalles
	public function view(){
		$idVenta = $this->input->post("id");
		$comprobante = $this->input->post("tipo_comprobante");

		$existe = $this->Ventas_model->getSiExisteVentaServicio($idVenta);

		if ($existe > 0){
			$data = array(
				"venta" => $this->Ventas_model->getVenta($idVenta),
				"detalles" => $this->Ventas_model->getDetalle($idVenta),
				"detallesServicios" => $this->Ventas_model->getDetalleServicio($idVenta)
			);
		} else {
			$data = array(
				"venta" => $this->Ventas_model->getVenta($idVenta),
				"detalles" => $this->Ventas_model->getDetalle($idVenta),
				"detallesServicios" => ""
			);
		}

		if ($comprobante == 1) {
			$this->load->view("admin/ventas/fc", $data);
		}elseif($comprobante == 2){
			$this->load->view("admin/ventas/view", $data);
		}elseif($comprobante == 3){
			$this->load->view("admin/ventas/view", $data);
		}else{
			echo "que pedo";
		}
	}

	public function save_Cliente(){
		$nombres = $this->input->post("nombre2");
		$apellidos = $this->input->post("r2");
		$telefono = $this->input->post("r3");
		$nit = $this->input->post("r5");
		$direccion = $this->input->post("r6");
		$registro = $this->input->post("r7");
		$estado = 1;


		$data  = array(
			'nombres' => $nombres,
			'apellidos' => $apellidos,
			'telefono' => $telefono,
			'nit' => $nit,
			'direccion' => $direccion,
			'registro' => $registro,
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

	public function imprimir($id){
		$idVenta = $this->input->post("id");
		$data = array(
			"venta" => $this->Ventas_model->getVenta($id),
			"detalles" => $this->Ventas_model->getDetalle($id),
		);
		$this->load->library('pdf');
		$paper_size = array(0,0,560,860);
		$this->pdf->set_paper($paper_size);
		$this->pdf->load_view('admin/ventas/factura',$data);
		$this->pdf->output();
		$this->pdf->stream("factura");
 }

 public function delete($idVenta){
 		$venta = $this->Ventas_model->getVenta($idVenta);
		$detalleProducto = $this->Ventas_model->getDetalle($idVenta);
		$detallesServicios = $this->Ventas_model->getDetalleServicio($idVenta);
		$idcaja = $this->Cajas_model->lastID();

		$tipoUpdateCaja = 2;
		$fecha = date("Y-m-d H:i:s");
		$total = $venta->total;
		$idusuario = 1; ///hay que modificar esto

		$dat2= array(
			'usuario' => $idusuario,
			'transaccion' => "2",
			'fecha' => $fecha,
			'monto' => $total,
			'saldo' => $total,
		);

		//guardamos el registro en caja
		if($this->Cajas_model->save($dat2)){
			$id_caja = $this->Cajas_model->lastID();
			$this->updateCaja($id_caja,$total,2);//se actualiza el saldo de la caja
		}

		for ($i=0; $i < count($detalleProducto); $i++) {
			$producto= $detalleProducto[$i]->producto_id;
			$cantidad= $detalleProducto[$i]->cantidad;

			$this->updateProducto($producto, $cantidad, 0); //actualizamos el stock del producto

		}

		$data  = array(
			'estado' => "0",
		);
		$this->Ventas_model->update($idVenta,$data);
		echo "movimientos/ventas";
	}
}
