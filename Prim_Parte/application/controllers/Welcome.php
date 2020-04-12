<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function _construct(){
		parent::_construct();
	}

	public function index() 	
	{
		$data['titulo'] = 'principal';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/principal'); 
		$this->load->view('front/footer_view'); 
	}

		public function comercializacion() 	
	{
		$data['titulo'] = 'comercializacion';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/principal'); 
		$this->load->view('front/footer_view'); 
	}

		public function informacion() 	
	{
		$data['titulo'] = 'principal';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/principal'); 
		$this->load->view('front/footer_view'); 
	}

		public function catalogo() 	
	{
		$data['titulo'] = 'principal';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/principal'); 
		$this->load->view('front/footer_view'); 
	}

		public function quienesSomos() 	
	{
		$data['titulo'] = 'principal';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/principal'); 
		$this->load->view('front/footer_view'); 
	}

		public function consultas() 	
	{
		$data['titulo'] = 'principal';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/principal'); 
		$this->load->view('front/footer_view'); 
	}
	
}
