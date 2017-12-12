<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oportunidades extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Grupos_model");
		$this->load->model("Oportunidades_model");
		$this->load->model("Iniciativas_model");
		
	}

	public function index()
	{
		$data  = array(
			"permisos" => $this->permisos,
			"iniciativa" => $this->Iniciativas_model->getIniciativas(),
			"oportunidad" => $this->Oportunidades_model->getOportunidades(),
			"grupo" => $this->Grupos_model->getGrupos(),
			 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Oportunidades/list",$data);
		$this->load->view("layouts/footer");

	}

	public function store(){
		$nombre = $this->input->post("nombre2");
		$grupo = $this->input->post("grupo");
		$llamada = $this->input->post("llamada");
		$r1 = $this->input->post("r1");
		$reunion = $this->input->post("reunion");
		$r2 = $this->input->post("r2");
		$num_grupo = explode(" ", $grupo);
		

		$data  = array(
			
			'nombre' => $nombre,
			'llamada' => $llamada,
			'respuesta1' => $r1,
			'reunion' => $reunion,
			'respuesta2' => $r2,
			'id_grupo' => $num_grupo[1],
			'estado' => "1",
			
		);
		$oportunidad = "Contacto con: ".$nombre;
		$data1  = array(
			'nombre' => $oportunidad,
			'fecha_i' => $llamada,
			'fecha_f' => $llamada,
		);

		if ($this->Oportunidades_model->save($data)) {
			$this->Oportunidades_model->save1($data1);
			redirect(base_url()."mantenimiento/Oportunidades");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/productos/add");
		}
	}

	public function edit($id){
		$data =array( 
			"iniciativa" => $this->Iniciativas_model->getIniciativas(),
			"oportunidad" => $this->Oportunidades_model->getOportunidad($id),
			"grupo" => $this->Grupos_model->getGrupos(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Oportunidades/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$id_oportunidad = $this->input->post("id_oportunidad");
		$nombre = $this->input->post("nombre");
		$grupo = $this->input->post("grupo");
		$llamada = $this->input->post("llamada");
		$r1 = $this->input->post("r1");
		$reunion = $this->input->post("reunion");
		$r2 = $this->input->post("r2");
		$data  = array( 
			'nombre' => $nombre,
			'llamada' => $llamada,
			'respuesta1' => $r1,
			'reunion' => $reunion,
			'respuesta2' => $r2,
			'id_grupo' => $grupo,
			
		);
		if ($this->Oportunidades_model->update($id_oportunidad,$data)) {
			redirect(base_url()."mantenimiento/Oportunidades");
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
		$this->Oportunidades_model->update($id,$data);
		echo "mantenimiento/Oportunidades";
	}

}