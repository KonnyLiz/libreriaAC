<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	private $permisos;
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Productos_model");
		$this->load->model("Categorias_model");
		$this->load->model("Marcas_model");
		$this->load->model("Proveedores_model");
	}

	public function index()
	{
		$data  = array(
			"permisos" => $this->permisos,
			'productos' => $this->Productos_model->getProductos(),
			"categorias" => $this->Categorias_model->getCategorias(),
			"marca" => $this->Marcas_model->getMarcas() ,
			"proveedor" => $this->Proveedores_model->getProveedores()  
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/productos/list",$data);
		$this->load->view("layouts/footer");

	}

	public function store(){
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$marca = $this->input->post("marca");
		$proveedor = $this->input->post("proveedor");
		$precio_e = $this->input->post("precio_e");
		$precio = $this->input->post("precio");
		$precio_m = $this->input->post("precio_m");
		$precio_m1 = $this->input->post("precio_m1");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");

		$this->form_validation->set_rules("codigo", "Codigo", "integer|is_natural_no_zero|required|is_unique[productos.codigo]");
		$this->form_validation->set_rules("nombre", "Nombre", "alpha|required|is_unique[productos.nombre]");
		$this->form_validation->set_rules("precio_e", "Entrada", "decimal|required");
		$this->form_validation->set_rules("precio", "Precio", "decimal|required");
		$this->form_validation->set_rules("precio_m", "Mayoreo", "decimal|required");
		$this->form_validation->set_rules("stock", "Stock", "is_natural_no_zero|integer|required");

		if ($this->form_validation->run()){
			$data  = array(
				'codigo' => $codigo, 
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'id_marca' => $marca,
				'id_proveedor' => $proveedor,
				'precio_entrada' => $precio_e,
				'precio' => $precio,
				'precio_mayoreo1' => $precio_m,
				'precio_mayoreo2' => $precio_m1,
				'stock' => $stock,
				'categoria_id' => $categoria,
				'estado' => "1"
			);

			if ($this->Productos_model->save($data)) {
				redirect(base_url()."mantenimiento/productos");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/productos/add");
			}
		}else {
			$this->index();
		}

		
	}

	public function edit($id){
		$data =array( 
			"producto" => $this->Productos_model->getProducto($id),
			"categorias" => $this->Categorias_model->getCategorias(),
			"marca" => $this->Marcas_model->getMarcas() ,
			"proveedor" => $this->Proveedores_model->getProveedores(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/productos/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idproducto = $this->input->post("idproducto");
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$marca = $this->input->post("marca");
		$prov = $this->input->post("proveedor");
		$descripcion = $this->input->post("descripcion");
		$precio_e = $this->input->post("precio_e");
		$precio = $this->input->post("precio");
		$precio_m = $this->input->post("precio_m");
		$precio_m1 = $this->input->post("precio_m1");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");

		$productoActual = $this->Productos_model->getProducto($idproducto);
		if ($codigo == $productoActual->nombre){
			$unique = '';
		} else {
			$unique = "|is_unique[productos.nombre]";
		}

		$this->form_validation->set_rules("codigo", "Codigo", "integer|is_natural_no_zero|required|is_unique[productos.codigo]");
		$this->form_validation->set_rules("nombre", "Nombre", "alpha|required".$unique);
		$this->form_validation->set_rules("precio_e", "Entrada", "decimal|required");
		$this->form_validation->set_rules("precio", "Precio", "decimal|required");
		$this->form_validation->set_rules("precio_m", "Mayoreo", "decimal|required");
		$this->form_validation->set_rules("stock", "Stock", "is_natural_no_zero|integer|required");

		if ($this->form_validation->run()){
			$data  = array(
				'codigo' => $codigo, 
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'id_proveedor' => $prov,
				'id_marca' => $marca,
				'precio_entrada' => $precio_e,
				'precio' => $precio,
				'precio_mayoreo1' => $precio_m,
				'precio_mayoreo2' => $precio_m1,
				'stock' => $stock,
				'categoria_id' => $categoria,
			);
			if ($this->Productos_model->update($idproducto,$data)) {
				redirect(base_url()."mantenimiento/productos");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/productos/edit/".$idproducto);
			}
		} else {
			$this->edit($idproducto);
		}		
	}
	
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Productos_model->update($id,$data);
		echo "mantenimiento/productos";
	}

	public function save_Marca(){
		$nombre = $this->input->post("nombre");
		$this->form_validation->set_rules("nombre", "Nombre", "alpha|required|is_unique[categorias.nombre]");

		if ($this->form_validation->run()) {
				$data  = array(
				'nombre' => $nombre, 
				'estado' => "1"
			);

			if ($this->Marcas_model->save($data)) {
				redirect(base_url()."mantenimiento/productos");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/productos");
			}
		}else {
			$this->index();
		}
	}


}