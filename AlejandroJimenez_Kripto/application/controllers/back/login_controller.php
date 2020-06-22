<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_controller extends CI_Controller{

	function __construct() 
	{
		parent::__construct();
		$this->load->model('login_model');	
	}

	function index()
	{   //condiciones de validacion
		$this->form_validation->set_rules('username', 'Usuario', 'trim|required');
		$this->form_validation->set_rules('password', 'Contraseña','trim|required|callback__valid_login');
		//mensajes que se mostraran si no se cumple las condiciones
		$this->form_validation->set_message('required', 'el campo %s es requerido');
		$this->form_validation->set_message('_valid_login', '<div class="alert alert-danger" role="alert"> El usuario o contraseña son incorrectos</div>');
		$this->form_validation->set_message('is_unique', 'El campo %s ya existe');
		

		
		if ($this->form_validation->run() == FALSE)
		{
			$data = array('titulo' => 'Error al inciar sesion');
			$this->load->view('front/header_view',$data);
			$this->load->view('formularios/login_view');
			$this->load->view('front/footer_view');
		}
		else
		{	
			redirect('panel');
		}
	}
	

	function _valid_login($password)
	{ 
		//tomamos el valor del username del formulario de login
		$username = $this->input->post('username');

        //consultamos a la base e con el username y password 
		$result = $this->login_model->valid_user($username, $password);
		
		if($result)
		{	// si pasa la validacion guardamos los datos obtenidos en la variable seccion
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array('id_usuario' => $row->id_usuario,
									'username' => $row->username,
									'nombre' => $row->nombre,
									'apellido' => $row->apellido,
									'email' => $row->email,
									'perfil_id' => $row->perfil_id);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else 	//Mensaje de error si no pasa la validacion
		{	
			$this->form_validation->set_message('check_database', '<div class="alert alert-danger">Usuario o Contraseña invalido</div>');
			return false;
		}
	}	
}
	

