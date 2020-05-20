<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_controller extends CI_Controller{
		
	function __construct() 
	{
		parent::__construct();
	}
	
	/**
    * Si existe sesión activa muestra la vista del panel general.
    * Si no hay sesión, redirige a la ruta panel
    */
	function index()
	{
		if($this->session->userdata('logged_in'))
    	{
            $session_data = $this->session->userdata('logged_in');
            $data['titulo'] = 'Panel';
            $data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];

            $this->load->view('front/header_view', $data);
            $this->load->view('front/navbar_view', $data);
            $this->load->view('front/panel_view', $data);
            $this->load->view('front/footer_view');
    	}
    	else
    	{
        	redirect('panel', 'refresh');
    	}
	}
	
	/*
    * Función para cerrar la sesión activa.
    * Muestra la vista de login al cerrar sesión
    */
	function logout()
	{
		$this->session->unset_userdata('logged_in');
    	session_destroy();
		//Pagina que carga despues del logout
		redirect('login');
	}
	
}