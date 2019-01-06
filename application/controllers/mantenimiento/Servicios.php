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

	public function add(){
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/servicios/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$nombre = $this->input->post("r1");
		$desc = $this->input->post("r2");
		$pre = $this->input->post("r3");
		$pre2 = $this->input->post("r4");
		$pre3 = $this->input->post("r5");

		$data = array(
			'nombre' => $nombre,
			'id_presentacion' => 4,
			'descripción' => $desc,
			'precio' => $pre,
			'precio2' => $pre2,
			'precio3' => $pre3,
		 );

			if ($this->Servicios_model->save($data)) {
				redirect(base_url()."mantenimiento/servicios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/servicios/add");
			}

	}

	public function edit($id){
		$data  = array(
			'servicio' => $this->Servicios_model->getSer($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Servicios/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$id = $this->input->post("id");
		$nombre = $this->input->post("r1");
		$desc = $this->input->post("r2");
		$pre = $this->input->post("r3");
		$pre2 = $this->input->post("r4");
		$pre3 = $this->input->post("r5");

		$data = array(
			'nombre' => $nombre,
			'id_presentacion' => 4,
			'descripción' => $desc,
			'precio' => $pre,
			'precio2' => $pre2,
			'precio3' => $pre3,
		 );
		if ($this->Servicios_model->update($id,$data)) {
				redirect(base_url()."mantenimiento/servicios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/servicios/edit");
			}
	}
	
}