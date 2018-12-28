<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
private $permisos;      
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control(); 
		$this->load->model("Usuarios_model");
		//$this->load->model("Oportunidades_model");
	}

	public function index()
	{
		$data  = array(
			"permisos" => $this->permisos, 
			'usuario' => $this->Usuarios_model->getUsuarios(),
			//'oportunidad' => $this->Oportunidades_model->getOportunidades(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$data = array(
			"roles" => $this->Usuarios_model->getRoles()
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/add", $data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$nombres  =  $this->input->post("r1");
		$apellidos = $this->input->post("r2");
		$dui = $this->input->post("r3");
		$nit= $this->input->post("r4");
		$telefono = $this->input->post("r5");
		$email = $this->input->post("r6");
		$username = $this->input->post("r7");
		$password = $this->input->post("r8");
		$rol = $this->input->post("idRol");
		$estado = 1;

		$this->form_validation->set_rules("r3", "DUI", "required|is_unique[usuarios.dui]");
		$this->form_validation->set_rules("r4", "NIT", "required|is_unique[usuarios.nit]");
		$this->form_validation->set_rules("r7", "Nombre de Usuario", "required|is_unique[usuarios.username]");
		$this->form_validation->set_rules("r8", "Contraseña", "required");

		if ($this->form_validation->run()){
				$data  = array(
				'nombres' => $nombres, 
				'apellidos' => $apellidos,
				'dui' => $dui,
				'nit' => $nit,
				'telefono' => $telefono,
				'email' => $email,
				'username' => $username,
				'password' =>sha1($password),
				'rol_id' => $rol,
				'estado' => $estado
			);

			if ($this->Usuarios_model->save($data)) {
				redirect(base_url()."mantenimiento/usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/Usuarios/add");
			}
		} else {
			$this->add();
		}
		
	}

	public function edit($id){
		$data  = array(
			'usuario' => $this->Usuarios_model->getUsuario($id), 
			"roles" => $this->Usuarios_model->getRoles()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idusuario = $this->input->post("id_usuario");
		$nombres  =  $this->input->post("r1");
		$apellidos = $this->input->post("r2");
		$dui = $this->input->post("r3");
		$nit= $this->input->post("r4");
		$telefono = $this->input->post("r5");
		$email = $this->input->post("r6");
		$username = $this->input->post("r7");
		$password = $this->input->post("r8");
		$rol = $this->input->post("idRol");
		$estado = 1;

		$usuarioActual = $this->Usuarios_model->getUsuario($idusuario);
		if ($dui == $usuarioActual->dui){
			$unique = "";
		} else {
			$unique = "|is_unique[usuarios.dui]";
		}

		if ($nit == $usuarioActual->nit){
			$unique2 = "";
		} else {
			$unique2 = "|is_unique[usuarios.nit]";
		}

		if ($username == $usuarioActual->username){
			$unique3 = "";
		} else {
			$unique3 = "|is_unique[usuarios.username]";
		}

		$this->form_validation->set_rules("r3", "DUI", "required".$unique);
		$this->form_validation->set_rules("r4", "NIT", "required".$unique2);
		$this->form_validation->set_rules("r7", "Nombre de Usuario", "required".$unique3);
		$this->form_validation->set_rules("r8", "Contraseña", "required");

		if ($this->form_validation->run()){
				$data  = array(
				'nombres' => $nombres, 
				'apellidos' => $apellidos,
				'dui' => $dui,
				'nit' => $nit,
				'telefono' => $telefono,
				'email' => $email,
				'username' => $username,
				'rol_id' => $rol,
				'estado' => $estado
			);

			if ($this->Usuarios_model->update($idusuario,$data)) {
				redirect(base_url()."mantenimiento/usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."mantenimiento/Usuarios/edit/".$idusuario);
			}
		} else {
			$this->edit($idusuario);
		}
		

	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Usuarios_model->update($id,$data);
		echo "mantenimiento/usuarios";
	}
}