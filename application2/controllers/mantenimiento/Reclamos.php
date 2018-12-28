<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reclamos extends CI_Controller {
private $permisos;                              

                 
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Reclamos_model");
		$this->load->model("Productos_model");
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		$data  = array(
			"permisos" => $this->permisos, 
			'reclamo' => $this->Reclamos_model->getReclamos(),
			'producto' => $this->Productos_model->getProductos(),
			'usuario' => $this->Usuarios_model->getUsuarios(),
	
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reclamos/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reclamos/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$vendedor = $this->input->post("vendedor");
		$producto  =  $this->input->post("producto");
		$reclamo = $this->input->post("reclamo");


		$data  = array(
			'vendedor' => $vendedor, 
			'producto' => $producto, 
			'reclamo' => $reclamo,
			'estado' => 1
		);

		if ($this->Reclamos_model->save($data)) {
			redirect(base_url()."mantenimiento/reclamos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/clientes/add");
		}
	}

	public function edit($id){
		$data  = array(
			'reclamo' => $this->Reclamos_model->getReclamo($id),
			'producto' => $this->Productos_model->getProductos(),
			'usuario' => $this->Usuarios_model->getUsuarios(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/reclamos/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idreclamo = $this->input->post("idreclamo");
		$vendedor = $this->input->post("vendedor");
		$producto  =  $this->input->post("producto");
		$reclamo = $this->input->post("reclamo");


		$data  = array(
			'vendedor' => $vendedor, 
			'producto' => $producto, 
			'reclamo' => $reclamo,
			'estado' => 1
		);

		if ($this->Reclamos_model->update($idreclamo,$data)) {
			redirect(base_url()."mantenimiento/reclamos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/reclamos/edit/".$idreclamo);
		}
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Reclamos_model->update($id,$data);
		echo "mantenimiento/reclamos";
	}
}