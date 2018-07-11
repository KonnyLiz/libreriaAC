<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciativas extends CI_Controller {
private $permisos;                              

                
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Iniciativas_model");
		$this->load->model("Grupos_model");
	}

	public function index()
	{
		$data  = array(
			"permisos" => $this->permisos,  
			"iniciativa" => $this->Iniciativas_model->getIniciativas(),
			"grupo" => $this->Grupos_model->getGrupos()  
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/iniciativas/list",$data);
		$this->load->view("layouts/footer");

	}

	public function store(){
		$nombre = $this->input->post("nombre");
		$grupo = $this->input->post("grupo");
		$contacto = $this->input->post("contacto");
		
		$this->form_validation->set_rules("nombre", "Nombre", "integer|is_natural_no_zero|required|is_unique[productos.codigo]");

		$data  = array(
			'grupo' => $grupo,
			'nombre' => $nombre,
			'contacto' => $contacto,
			'estado' => "1",
			
		);

		if ($this->Iniciativas_model->save($data)) {
			redirect(base_url()."mantenimiento/iniciativas");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/productos/add");
		}
	}

	public function edit($id){
		$data =array( 
			"iniciativa" => $this->Iniciativas_model->getIniciativa($id),
			"grupo" => $this->Grupos_model->getGrupos()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/iniciativas/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idiniciativa = $this->input->post("id_iniciativa");
		$nombre = $this->input->post("nombre");
		$grupo = $this->input->post("grupo");
		$contacto = $this->input->post("contacto");
		$data  = array( 
			'nombre' => $nombre,
			'grupo' => $grupo,
			'contacto' => $contacto,
			
		);
		if ($this->Iniciativas_model->update($idiniciativa,$data)) {
			redirect(base_url()."mantenimiento/iniciativas");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/productos/edit/".$idproducto);
		}
	}
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Iniciativas_model->update($id,$data);
		echo "mantenimiento/iniciativas";
	}

}