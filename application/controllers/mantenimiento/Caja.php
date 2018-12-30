<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caja extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model("Cajas_model");
	}

	public function index(){
		$data = array(
			'cajas' => $this->Cajas_model->getCaja(),
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/cajas/list", $data);
		$this->load->view("layouts/footer");
	}

}