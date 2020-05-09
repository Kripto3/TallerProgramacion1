<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function _construct(){
		parent::_construct();
	}

	public function index() 	
	{
		$data['titulo'] = 'Principal';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/principal'); 
		$this->load->view('front/footer_view'); 
	}

	public function comercializacion() 	
	{
		$data['titulo'] = 'Info Comercial';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/comercializacion'); 
		$this->load->view('front/footer_view'); 
	}

	public function informacion() 	
	{
		$data['titulo'] = 'Contactos';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/informacion_de_contactos'); 
		$this->load->view('front/footer_view'); 
	}

	public function catalogo() 	
	{
		$data['titulo'] = 'principal';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/catalogo_de_productos'); 
		$this->load->view('front/footer_view'); 
	}

	public function quienesSomos() 	
	{
		$data['titulo'] = 'Quienes Somos';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/quienes_somos'); 
		$this->load->view('front/footer_view'); 
	}

	public function consultas() 	
	{
		$data['titulo'] = 'Consultas';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/consultas'); 
		$this->load->view('front/footer_view'); 
	}

	public function terminos() 	
	{
		$data['titulo'] = 'Terminos y Condiciones';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/terminos_y_usos'); 
		$this->load->view('front/footer_view'); 
	}

	//funcion para reistrarse 
	public function registrarse(){
		$data['titulo'] = 'Registro';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('formularios/registrarusuario_view'); 
		$this->load->view('front/footer_view'); 
	}
	
}
