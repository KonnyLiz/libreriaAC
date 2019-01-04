<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();
		$this->load->model("Servicios_model");
	}

	public function index()
	{
		$data  = array(
			"servicios" => $this->Servicios_model->getServicios(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/servicios/list",$data);
		$this->load->view("layouts/footer");

	}

}