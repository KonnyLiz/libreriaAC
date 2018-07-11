<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedores extends CI_Controller {
private $permisos;      
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Vendedores_model");
		$this->load->model("Usuarios_model");
		$this->load->model("Grupos_model");
	}

	public function index()
	{
		$data  = array(
			"permisos" => $this->permisos, 
			'usuario' => $this->Vendedores_model->getUsuarios(),
			"grupo" => $this->Grupos_model->getGrupos(),
			//'oportunidad' => $this->Oportunidades_model->getOportunidades(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vendedores/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vendedores/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$grupo =explode(" ",$this->input->post("grupo3"));
		$nombres  =  $this->input->post("r1");
		$apellidos = $this->input->post("r2");
		$dui = $this->input->post("r3");
		$nit= $this->input->post("r4");
		$telefono = $this->input->post("r5");
		$email = $this->input->post("r6");
		$username = $this->input->post("r7");
		$password = $this->input->post("r8");
		$rol = $this->input->post("r9");
		$estado = $this->input->post("r10");


		$data  = array(
			'grupo' =>$grupo[1],
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'dui' => $dui,
			'nit' => $nit,
			'telefono' => $telefono,
			'email' => $email,
			'username' => $username,
			'password' => sha1($password),
			'rol_id' => $rol,
			'estado' => $estado
		);

		if ($this->Vendedores_model->save($data)) {
			redirect(base_url()."mantenimiento/Vendedores");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/Vendedores/add");
		}
	}

	public function edit($id){
		$data  = array(
			'usuario' => $this->Usuarios_model->getUsuario($id),
			"grupo" => $this->Grupos_model->getGrupos(),

		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vendedores/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idusuario = $this->input->post("id_usuario");
		$grupo =explode(" ",$this->input->post("grupo3"));
		$nombres  =  $this->input->post("r2");
		$apellidos = $this->input->post("r3");
		$dui = $this->input->post("r4");
		$nit= $this->input->post("r5");
		$telefono = $this->input->post("r6");
		$email = $this->input->post("r7");
		$username = $this->input->post("r8");
		$password = $this->input->post("r9");
		$rol = $this->input->post("r10");
		$estado = $this->input->post("r11");

 			echo idusuario;
		$data  = array(
			'grupo' =>$grupo[1],
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'dui' => $dui,
			'nit' => $nit,
			'telefono' => $telefono,
			'email' => $email,
			'username' => $username,
			'password' => $password,
			'rol_id' => $rol,
			'estado' => $estado
		);

		if ($this->Vendedores_model->update($idusuario,$data)) {
			redirect(base_url()."mantenimiento/vendedores");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/vendedores/edit/".$idusuario);
		}
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Vendedores_model->update($id,$data);
		echo "mantenimiento/usuarios";
	}
}