<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
private $permisos;                                                    
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();                                   
		$this->load->model("Clientes_model");  
		//$this->load->model("Grupos_model");
	}

	public function index()
	{
		$data  = array(
			"permisos" => $this->permisos,                          
			'cliente' => $this->Clientes_model->getClientes(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add()
	{
		$data  = array(
			"permisos" => $this->permisos
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/add",$data);
		$this->load->view("layouts/footer");

	}

	public function store(){
		$nombres =  $this->input->post("r2");
		$apellidos = $this->input->post("apellido");
		$telefono = $this->input->post("telefono");
		$nit = $this->input->post("r5");
		$registro = $this->input->post("r6");
		$direccion = $this->input->post("r7");
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

			if ($this->Clientes_model->save($data)) {
				redirect(base_url()."mantenimiento/clientes");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/clientes/add");
			}
	}

	public function edit($id){
		$data  = array(
			'cliente' => $this->Clientes_model->getCliente($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idcliente = $this->input->post("id_cliente");
		$nombres =  $this->input->post("r2");
		$nit = $this->input->post("r5");
		$registro = $this->input->post("r6");
		$direccion = $this->input->post("r7");
		$estado = 1;
		
			$data  = array(
				'nombres' => $nombres, 
				'nit' => $nit,
				'direccion' => $direccion,
				'registro' => $registro,
				'estado' => $estado
			); 

			if ($this->Clientes_model->update($idcliente,$data)) {
				redirect(base_url()."mantenimiento/clientes");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."mantenimiento/clientes/edit/".$idcliente);
			}
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Clientes_model->update($id,$data);
		echo "mantenimiento/clientes";
	}
}