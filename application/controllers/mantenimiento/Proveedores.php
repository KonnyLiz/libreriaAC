<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {
private $permisos;      
	public function __construct(){
		parent::__construct();
		//$this->permisos = $this->backend_lib->control();
		$this->load->model("Proveedores_model");

	}

	public function index()
	{
		$data  = array(
			//"permisos" => $this->permisos, 
			'proveedor' => $this->Proveedores_model->getProveedores(),
			
			//'oportunidad' => $this->Oportunidades_model->getOportunidades(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/proveedores/list",$data);
		$this->load->view("layouts/footer");

	}


	public function store(){

		$nom  =  $this->input->post("nombre");
		$tel = $this->input->post("telefono");
		$direcc = $this->input->post("direccion");


		$data  = array(
			'nombre' => $nom, 
			'telefono' => $tel,
			'direccion' => $direcc,
			'estado' => "1",
		);

		if ($this->Proveedores_model->save($data)) {
			redirect(base_url()."mantenimiento/Proveedores");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/Vendedores/add");
		}
	}

	public function edit($id){
		$data  = array(
			'proveedor' => $this->Proveedores_model->getProveedor($id),
			

		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/proveedores/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idproveedor = $this->input->post("id_proveedor");
		$nom  =  $this->input->post("nombre");
		$tel = $this->input->post("telefono");
		$direcc = $this->input->post("direccion");
		$data  = array(
			'nombre' => $nom, 
			'telefono' => $tel,
			'direccion' => $direcc,
		);

		if ($this->Proveedores_model->update($idproveedor,$data)) {
			redirect(base_url()."mantenimiento/proveedores");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/vendedores/edit/".$idproveedor);
		}
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Proveedores_model->update($id,$data);
		redirect(base_url()."mantenimiento/proveedores");
	}
}