<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_model extends CI_Model
{

   function getPdfcategoria()
   {
         $this->db->from('categorias');
         //$this->db->order_by("id");
         $query = $this->db->get();
         return $query->result();
   }
   function getPdfusuario()
 	{
   		$this->db->from('usuarios');
   		//$this->db->order_by("id");
   		$query = $this->db->get();
   		return $query->result();
 	}
 	function getPdfcampana()
 	{
   		$this->db->from('campanas');
   		//$this->db->order_by("id");
   		$query = $this->db->get();
   		return $query->result();
 	}
 	function getPdfproductos()
 	{
   		$this->db->from('productos');
   		//$this->db->order_by("id");
   		$query = $this->db->get();
   		return $query->result();
 	}
 	function getPdfclientes()
 	{
   		$this->db->from('clientes');
   		//$this->db->order_by("id");
   		$query = $this->db->get();
   		return $query->result();
 	}
 	function getPdfventas()
 	{
   		$this->db->from('ventas');
   		//$this->db->order_by("id");
   		$query = $this->db->get();
   		return $query->result();
 	}
   

   function getPdfoportunidades()
   {
         $this->db->from('oportunidad');
         //$this->db->order_by("id");
         $query = $this->db->get();
         return $query->result();
   }
   function getPdfiniciativa()
   {
        $this->db->from('iniciativa');
         //$this->db->order_by("id");
         $query = $this->db->get();
         return $query->result();
   }
   function getPdfiniciativa1($id)
   {
         $query = $this->db->get_where('iniciativa', array('grupo' => $id ));
         if($query->num_rows() > 0 )
         {
            return $query->result();
         }
   }
      //Obteniendo un registro espesifico
   function getPdfoportunidades1($id)
   {
         $query = $this->db->get_where('oportunidad' , array('id_grupo' => $id ));
         if($query->num_rows() > 0 )
         {
            return $query->result();
         } 
   }
   function getPdfclientes1($id)
   {
      $query = $this->db->get_where('clientes' , array('grupo' => $id ));
      if($query->num_rows() > 0 )
         {
            return $query->result();
         }
   }
   function getPdfusu1($id)
   {
         $query = $this->db->get_where('usuarios', array('id' => $id ));
         if($query->num_rows() > 0 )
         {
            return $query->result();
         }
   }
    function getPdfclient($id)
   {
         $query = $this->db->get_where('clientes', array('id' => $id ));
         if($query->num_rows() > 0 )
         {
            return $query->result();
         }
   }

}
