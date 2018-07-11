<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
private $permisos;                                                    
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();                                   
		$this->load->model("Clientes_model");  
		$this->load->model("Oportunidades_model");
		//$this->load->model("Grupos_model");
	}

	public function index()
	{
		$data  = array(
			"permisos" => $this->permisos,                          
			'cliente' => $this->Clientes_model->getClientes(),
			'oportunidad' => $this->Oportunidades_model->getOportunidades(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/list",$data);
		$this->load->view("layouts/footer");

	}

	public function store(){
		$nombres = $this->input->post("nombre2");
		$grupo  =  $this->input->post("grupo");
		$apellidos =  $this->input->post("r2");
		$telefono = $this->input->post("r3");
		$dui = $this->input->post("r4");
		$nit = $this->input->post("r5");
		$direccion = $this->input->post("r6");
		$registro = $this->input->post("r7");
		$empresa = $this->input->post("r8");
		$estado = 1;

		
		$this->form_validation->set_rules("r3", "Telefono", "alpha_dash|required");
		$this->form_validation->set_rules("r4", "DUI", "alpha_dash|required");
		$this->form_validation->set_rules("r5", "NIT", "alpha_dash|required");
		$this->form_validation->set_rules("r6", "Direccion", "required");
		$this->form_validation->set_rules("r7", "Registro", "required");
		$this->form_validation->set_rules("r8", "Empresa", "required");
		
		if ($this->form_validation->run()){
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

			if ($this->Clientes_model->save($data)) {
				redirect(base_url()."mantenimiento/clientes");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/clientes/add");
			}
		} else {
			$this->index();
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
		$nombres = $this->input->post("nom");
		$grupo  =  $this->input->post("r1");
		$apellidos = $this->input->post("r2");
		$telefono = $this->input->post("r3");
		$dui = $this->input->post("r4");
		$nit = $this->input->post("r5");
		$direccion = $this->input->post("r6");
		$registro = $this->input->post("r7");
		$empresa = $this->input->post("r8");
		$estado = 1;
		$this->form_validation->set_rules("nom", "Nombre", "required");

		$this->form_validation->set_rules("r2", "Apellido", "required");
		$this->form_validation->set_rules("r3", "Telefono", "alpha_dash|required");
		$this->form_validation->set_rules("r4", "DUI", "alpha_dash|required");
		$this->form_validation->set_rules("r5", "NIT", "alpha_dash|required");
		$this->form_validation->set_rules("r6", "Direccion", "required");
		$this->form_validation->set_rules("r7", "Registro", "required");
		$this->form_validation->set_rules("r8", "Empresa", "required");
		
		if ($this->form_validation->run()){
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

			if ($this->Clientes_model->update($idcliente,$data)) {
				redirect(base_url()."mantenimiento/clientes");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."mantenimiento/clientes/edit/".$idcliente);
			}
		} else {
			$this->edit($idcliente);
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