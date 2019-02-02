<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfcontroller extends CI_Controller 
{
 	//Controlador del reporte de productos
 	function productos()
	{
			 $this->load->model('Pdf_model');
 			 $this->load->library('pdf');
			$data['resulProducto'] = $this->Pdf_model->getProductos();
 			$html= $this->load->view('pdf/productos', $data, true);
 			$this->pdf->load_html($html);
 			$this->pdf->render();
 			$this->pdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
 			$this->pdf->stream("productos.pdf", array("Attachment" => false));
 	}
 	
}
