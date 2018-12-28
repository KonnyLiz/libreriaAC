<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {
private $permisos;


	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Permisos_model");
		$this->load->model("Usuarios_model");
	}

	public function index(){
		$data  = array(
			'permisos' => $this->Permisos_model->getPermisos(),
			'menus' => $this->Permisos_model->getMenus(),
			'roles' => $this->Usuarios_model->getRoles(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/list",$data);
		$this->load->view("layouts/footer");
	}

	public function add(){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(),
			'menus' => $this->Permisos_model->getMenus(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/add");
		$this->load->view("layouts/footer");
	}
	public function store(){
		$menu = $this->input->post("menu");
		$rol = $this->input->post("rol");
		$insert = $this->input->post("insert");
		$read = $this->input->post("read");
		$update = $this->input->post("update");
		$delete = $this->input->post("delete");

		$data = array(
			"menu_id" =>$menu,
			"rol_id" =>$rol,
			"read" =>$read,
			"insert" =>$insert,
			"update" =>$update,
			"delete" =>$delete,
			"estado" =>"1",
		);
		if($this->Permisos_model->save($data)) {
			# code...
			redirect(base_url()."mantenimiento/permisos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/permisos/list");
		}
	}

	public function edit($id){
		$data = array(
			'permiso' => $this->Permisos_model->getPermiso($id),
			'menus' => $this->Permisos_model->getMenus(),
			'roles' => $this->Usuarios_model->getRoles(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/edit",$data);
		$this->load->view("layouts/footer");

	}
	public function update(){
		$idpermiso = $this->input->post("id_permiso");
		$menu = $this->input->post("menu");
		$rol = $this->input->post("rol");
		$insert = $this->input->post("insert");
		$read = $this->input->post("read");
		$update = $this->input->post("update");
		$delete = $this->input->post("delete");

		$data = array( 
			"read" =>$read,
			"insert" =>$insert,
			"update" =>$update,
			"delete" =>$delete,
		);
		if($this->Permisos_model->update($idpermiso,$data)) {
			# code...
			redirect(base_url()."mantenimiento/permisos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/permisos/edit/".$idpermiso);
		}
	}
	public function delete($id){
		/*$data  = array(
			'estado' => "0", 
		);
		$this->Permisos_model->update($id,$data);
		echo "mantenimiento/permisos";*/
		$this->Permisos_model->delete($id);
		redirect(base_url()."mantenimiento/permisos");
	}
}	