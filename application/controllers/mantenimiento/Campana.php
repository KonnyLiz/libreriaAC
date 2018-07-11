<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campana extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Campana_model");
		$this->load->model("Productos_model");
		
	}

	public function index()
	{
		$data  = array(
			"permisos" => $this->permisos,
			'campanas' => $this->Campana_model->getCampanas(), 
			'productos' => $this->Productos_model->getProductos(),
			
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/campana/list",$data);
		$this->load->view("layouts/footer");

	}

	public function store(){
		$nombre = $this->input->post("nombre");
		$producto = $this->input->post("producto");
		$cantidad = $this->input->post("cantidad_a_vender");
		$fechai = $this->input->post("fecha_i");
		$fechaf = $this->input->post("fecha_f");

		$this->form_validation->set_rules("nombre", "Nombre", "alpha_numeric|required");
		$this->form_validation->set_rules("cantidad_a_vender", "Cantidad", "integer|is_natural_no_zero|required");
		$this->form_validation->set_rules("fecha_i", "Fecha inicio", "required");
		$this->form_validation->set_rules("fecha_f", "Fecha fin", "required");

		if ($this->form_validation->run()){
			$data  = array(
				'nombre' => $nombre,
				'producto' => $producto,
				'cantidad_a_vender' => $cantidad,
				'fecha_i' => $fechai,
				'fecha_f' => $fechaf,
				'estado' => "1"
				);
			$campaña = "Campaña ".$nombre." de ventas en curso";

			$data1  = array(
				'nombre' => $campaña,
				'fecha_i' => $fechai,
				'fecha_f' => $fechaf,
			);

			if ($this->Campana_model->save($data)) {
				$this->Campana_model->save1($data1);
				redirect(base_url()."mantenimiento/campana");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/campana #profile1");
			}
		} else {
			$this->index();
		}
		
	}

	public function edit($id){
		$data =array( 
			'campanas' => $this->Campana_model->getCampana($id),
			'productos' => $this->Productos_model->getProductos(),
			
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/campana/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$id = $this->input->post("idCampana");
		$nombre = $this->input->post("nombre");
		$producto = $this->input->post("producto");
		$cantidad = $this->input->post("cantidad_a_vender");
		$fechai = $this->input->post("fecha_i");
		$fechaf = $this->input->post("fecha_f");

		$this->form_validation->set_rules("nombre", "Nombre", "alpha_numeric|required");
		$this->form_validation->set_rules("cantidad_a_vender", "Cantidad", "integer|is_natural_no_zero|required");
		$this->form_validation->set_rules("fecha_i", "Fecha inicio", "required");
		$this->form_validation->set_rules("fecha_f", "Fecha fin", "required");

		if ($this->form_validation->run()){
			$data  = array(
				'nombre' => $nombre,
				'producto' => $producto,
				'cantidad_a_vender' => $cantidad,
				'fecha_i' => $fechai,
				'fecha_f' => $fechaf,
				'estado' => "1"
			);
			if ($this->Campana_model->update($id,$data)) {
				redirect(base_url()."mantenimiento/campana");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/campana/edit/".$id);
			}
		} else {
			$this->edit($id);
		}
	}
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Productos_model->update($id,$data);
		echo "mantenimiento/productos";
	}

}