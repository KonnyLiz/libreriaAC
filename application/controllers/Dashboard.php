<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Usuarios_model");
		$this->load->model("Ventas_model");
		$this->load->model("Productos_model");
		$this->load->model("Campana_model");
		$this->load->model("Iniciativas_model");
			$this->load->model("Oportunidades_model");
			$this->load->model("Clientes_model"); 
	}
	public function index()
	{
		$data  = array(
			'usuario' => $this->Usuarios_model->getUsuarios(),
			'productos' => $this->Productos_model->getProductos(),
			'ventas' => $this->Ventas_model->getVentas(),
			'campanas' => $this->Campana_model->getCampanas(),
			"iniciativas" => $this->Iniciativas_model->getIniciativas(),
			"oportunidades" => $this->Oportunidades_model->getOportunidades(),
			'cliente' => $this->Clientes_model->getClientes(),
	
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/dashboard",$data);
		$this->load->view("layouts/footer");

	}
}
