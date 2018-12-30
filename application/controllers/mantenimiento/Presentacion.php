<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presentacion extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();
		//$this->permisos = $this->backend_lib->control();
		$this->load->model("Presentacion_model");
	}

	
	public function index()
	{
		$data  = array(
			'presen' => $this->Presentacion_model->getPresentacion(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/presentacion/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add()
	{

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/presentacion/add");
		$this->load->view("layouts/footer");

	}

	public function store(){
		$nombre = $this->input->post("nombre");
		$this->form_validation->set_rules("nombre", "Nombre", "required|is_unique[categorias.nombre]");

		if ($this->form_validation->run()) {
				$data  = array(
				'nombre' => $nombre, 
				'estado' => "1"
			);

			if ($this->Presentacion_model->save($data)) {
				redirect(base_url()."mantenimiento/Presentacion");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/Presentacion");
			}
		}else {
			$this->index();
		}
	}

	public function edit($id){
		$data  = array(
			'presen' => $this->Presentacion_model->getPresent($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/presentacion/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idpresen = $this->input->post("idpresen");
		$nombre = $this->input->post("nombre");

		$presenActual = $this->Presentacion_model->getPresent($idpresen);
		if ($nombre == $presenActual->nombre){
			$unique = "";
		} else {
			$unique = "|is_unique[categorias.nombre]";
		}

		$this->form_validation->set_rules("nombre", "Nombre", "required".$unique);

		if ($this->form_validation->run()) {
				$data = array(
				'nombre' => $nombre,
			);

			if ($this->Presentacion_model->update($idpresen,$data)) {
				redirect(base_url()."mantenimiento/presentacion");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."mantenimiento/presentacion/edit/".$idpresen);
			}
		} else {
			$this->edit($idpresen);
		}
		
	}

	public function view($id){
		$data  = array(
			'categoria' => $this->Categorias_model->getCategoria($id), 
		);
		$this->load->view("admin/categorias/view",$data);
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Presentacion_model->update($id,$data);
		redirect(base_url()."mantenimiento/presentacion");
	}
}
