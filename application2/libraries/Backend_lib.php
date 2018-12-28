<?php
	/**
	* 
	*/
	class Backend_lib
	{
		
		private $CI;
		public function __construct(){
			$this->CI = & get_instance();
		}

		public function control(){
			if (!$this->CI->session->userdata("login")) {
				# code...
				redirect(base_url());
			}
			$url = $this->CI->uri->segment(1);
			if ($this->CI->uri->segment(2)) {
				# code...
				$url = $this->CI->uri->segment(1)."/".$url = $this->CI->uri->segment(2);
			} 

			$infomenu = $this->CI->Backend_model->getID($url);
			//print_r($infomenu->id);
			$permisos = $this->CI->Backend_model->getPermisos($infomenu->id,$this->CI->session->userdata("rol"));
			//echo ($url);
			//
			//print_r($permisos);
			if($permisos->read == 0 ){
				//echo "aqui si esta entrando verdad";
				redirect(base_url()."dashboard"); 
			}else {
				# code...
				//redirect(base_url()."dashboard");
				return $permisos;
			}


		}
	}


?>