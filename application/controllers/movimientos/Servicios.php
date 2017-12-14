<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {
                                                   
	public function __construct(){
		parent::__construct();
		//$this->permisos = $this->backend_lib->control();                                   
		$this->load->model("Clientes_model");
		$this->load->model("Usuarios_model");
		$this->load->model("Servicios_model"); 

		//$this->load->model("Grupos_model");
	}
	public function index(){
		$data = array(
			"usuarios" => $this->Usuarios_model->getUsuarios(), 
			'clientes' => $this->Clientes_model->getClientes(),
			'servicios' => $this->Servicios_model->getServicios(),
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/servicios/add", $data);
		$this->load->view("layouts/footer");
	}
	public function getServicos(){
		$valor = $this->input->post("valor");
		$clientes = $this->Servicios_model->getServicios($valor);
		echo json_encode($clientes);
	}


}