<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();
		//$this->permisos = $this->backend_lib->control();
		$this->load->model("Marcas_model");
	}

	
	public function index()
	{
		$data  = array(
			'marca' => $this->Marcas_model->getMarcas(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/marcas/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add()
	{

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/marcas/add");
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

			if ($this->Marcas_model->save($data)) {
				redirect(base_url()."mantenimiento/marcas");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/marcas");
			}
		}else {
			$this->index();
		}
	}

	public function edit($id){
		$data  = array(
			'marca' => $this->Marcas_model->getMarca($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/marcas/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idmarca = $this->input->post("idmarca");
		$nombre = $this->input->post("nombre");

		$marcaActual = $this->Marcas_model->getMarca($idmarca);
		if ($nombre == $marcaActual->nombre){
			$unique = "";
		} else {
			$unique = "|is_unique[categorias.nombre]";
		}

		$this->form_validation->set_rules("nombre", "Nombre", "required".$unique);

		if ($this->form_validation->run()) {
				$data = array(
				'nombre' => $nombre,
			);

			if ($this->Marcas_model->update($idmarca,$data)) {
				redirect(base_url()."mantenimiento/marcas");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."mantenimiento/marcas/edit/".$idmarca);
			}
		} else {
			$this->edit($idmarca);
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
		$this->Marcas_model->update($id,$data);
		redirect(base_url()."mantenimiento/marcas");
	}
}
