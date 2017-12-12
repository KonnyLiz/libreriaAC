<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfcontroller extends CI_Controller 
{
	//Controlador del reporte de Categorias
	function categorias()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');
			$data['resulCategoria'] = $this->Pdf_model->getPdfcategoria();
 			$html= $this->load->view('pdf/categorias', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	//Controlador del reporte de capanas
 	function campanas()
	{
			$this->load->model('Pdf_model');
 			$this->load->library('mydompdf');
			$data['resulCampana'] = $this->Pdf_model->getPdfcampana();
 			$html= $this->load->view('pdf/campana', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	function usuarios()
	{
			$this->load->model('Pdf_model');
 			$this->load->library('mydompdf');
			$data['resulUsuarios'] = $this->Pdf_model->getPdfusuario();
 			$html= $this->load->view('pdf/usuarios', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	//Controlador del reporte de productos
 	function productos()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');
			$data['resulProducto'] = $this->Pdf_model->getPdfproductos();
 			$html= $this->load->view('pdf/productos', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	//Controlador del reporte de productos
 	function clientes()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');
			$data['resulClientes'] = $this->Pdf_model->getPdfclientes();
 			$html= $this->load->view('pdf/clientes', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	function clientes1()
	{
			$this->load->model('Pdf_model');
 			$this->load->library('mydompdf');
			$data['resulClientes'] = $this->Pdf_model->getPdfclientes1(1);
 			$html= $this->load->view('pdf/clientes', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	function clientes2()
	{
			$this->load->model('Pdf_model');
 			$this->load->library('mydompdf');
			$data['resulClientes'] = $this->Pdf_model->getPdfclientes1(2);
 			$html= $this->load->view('pdf/clientes', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	function clientes3()
	{
			$this->load->model('Pdf_model');
 			$this->load->library('mydompdf');
			$data['resulClientes'] = $this->Pdf_model->getPdfclientes1(3);
 			$html= $this->load->view('pdf/clientes', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}

 	//Controlador del reporte de ventas
 	function ventas()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');
			$data['resulVentas'] = $this->Pdf_model->getPdfventas();
 			$html= $this->load->view('pdf/ventas', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->set_paper('A4','landscape');
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	function vendedores()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');
			$data['resulVentas'] = $this->Pdf_model->getPdfventas();
 			$html= $this->load->view('pdf/vendedores', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->set_paper('A4','landscape');
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	//Controlador del reporte de iniciativas
 	function iniciativa()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');

			$data['resulIniciativas'] = $this->Pdf_model->getPdfiniciativa();
 			$html= $this->load->view('pdf/iniciativas', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	function iniciativa1()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');

			$data['resulIniciativas'] = $this->Pdf_model->getPdfiniciativa1(1);
 			$html= $this->load->view('pdf/iniciativas1', $data, true);

 			$Oportdata['resulOportunidades1'] = $this->Pdf_model->getPdfoportunidades1(1);
 			$Oporthtml= $this->load->view('pdf/iniciativas1', $Oportdata, true);

 			$this->mydompdf->load_html($html);
 			$this->mydompdf->load_html($Oporthtml);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	function iniciativa2()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');

			$data['resulIniciativas'] = $this->Pdf_model->getPdfiniciativa1(2);
 			$html= $this->load->view('pdf/iniciativas1', $data, true);

 			$Oportdata['resulOportunidades1'] = $this->Pdf_model->getPdfoportunidades1(2);
 			$Oporthtml= $this->load->view('pdf/iniciativas1', $Oportdata, true);

 			$this->mydompdf->load_html($html);
 			$this->mydompdf->load_html($Oporthtml);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	function iniciativa3()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');

			$data['resulIniciativas'] = $this->Pdf_model->getPdfiniciativa1(3);
 			$html= $this->load->view('pdf/iniciativas1', $data, true);

 			$Oportdata['resulOportunidades1'] = $this->Pdf_model->getPdfoportunidades1(3);
 			$Oporthtml= $this->load->view('pdf/iniciativas1', $Oportdata, true);

 			$this->mydompdf->load_html($html);
 			$this->mydompdf->load_html($Oporthtml);
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	
 	//Controlador del reporte de oportunidades
 	function oportunidades_1()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');

			$data['resulOportunidades1'] = $this->Pdf_model->getPdfoportunidades1(1);
 			$html= $this->load->view('pdf/oportunidades1', $data, true);

 			$Clientdata['resulClientes1'] = $this->Pdf_model->getPdfclientes1(1);
 			$Clienthtml= $this->load->view('pdf/oportunidades1', $Clientdata, true);

 			$this->mydompdf->load_html($html);
 			$this->mydompdf->load_html($Clienthtml);
 			$this->mydompdf->set_paper('A4','landscape');
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	function oportunidades_2()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');

			$data['resulOportunidades1'] = $this->Pdf_model->getPdfoportunidades1(2);
 			$html= $this->load->view('pdf/oportunidades1', $data, true);

 			$Clientdata['resulClientes1'] = $this->Pdf_model->getPdfclientes1(2);
 			$Clienthtml= $this->load->view('pdf/oportunidades1', $Clientdata, true);

 			$this->mydompdf->load_html($html);
 			$this->mydompdf->load_html($Clienthtml);
 			$this->mydompdf->set_paper('A4','landscape');
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	function oportunidades_3()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('mydompdf');

			$data['resulOportunidades1'] = $this->Pdf_model->getPdfoportunidades1(3);
 			$html= $this->load->view('pdf/oportunidades1', $data, true);

 			$Clientdata['resulClientes1'] = $this->Pdf_model->getPdfclientes1(3);
 			$Clienthtml= $this->load->view('pdf/oportunidades1', $Clientdata, true);

 			$this->mydompdf->load_html($html);
 			$this->mydompdf->load_html($Clienthtml);
 			$this->mydompdf->set_paper('A4','landscape');
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
 	//Controlador del reporte de iniciativas
 	function oportunidades()
	{
			$this->load->model('Pdf_model');
 			$this->load->library('mydompdf');
			$data['resulOportunidades'] = $this->Pdf_model->getPdfoportunidades();
 			$html= $this->load->view('pdf/oportunidades', $data, true);
 			$this->mydompdf->load_html($html);
 			$this->mydompdf->set_paper('A4','landscape');
 			$this->mydompdf->render();
 			$this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 	}
}
