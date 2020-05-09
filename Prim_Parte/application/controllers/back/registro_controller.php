<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this ->load->model('usuario_model');
	}

	function index(){
		//reglas de validacion para el formulario de registro 
										//set_rules('name(nombre de nuestro campo)', 'label(nombre del label)','validaciones',mensaje de error);
		$this->form_validation->set_rules('nombre', 'Nombre','required');
		$this->form_validation->set_rules('apellido', 'Apellido','required');
		$this->form_validation->set_rules('email', 'Email','required|trim|valid_email|is_unique[usuarios.email]');
		$this->form_validation->set_rules('username', 'Usuario','required|trim|is_unique[usuarios.username]');
		$this->form_validation->set_rules('password', 'Contraseña', 'required');
		$this->form_validation->set_rules('re_password', 'Repetir Constraseña','required|matches[password]');

		//mensaje de error que se vera cuando no pase la validacion
		//el signo %s se reemplasa por el nombre del campo  // mensaje de validacion para regla de required
											//set mensaje (validacion, mensaje a mostrar por error)
		$this->form_validation->set_message('required', '<div class="alert alert-danger" role="alert"> El campo %s es obligatorio.</div>');
		//mensaje para validacion con regla de matches
		$this->form_validation->set_message('matches', '<div class="alert alert-danger" role="alert"> Las contraseñas no coinciden.</div>');
		//mensaje para validacion con regla de is_unique
		$this->form_validation->set_message('is_unique', '<div class="alert alert-danger" role="alert"> El campo %s ya existe.</div>');

		$pass = $this->input->post('re_password',true);


		//array con datos que seran enviados a la db 
		$data = array(
			'nombre'=>$this->input->post('nombre',true),
			'apellido'=>$this->input->post('apellido',true),
			'email'=>$this->input->post('email',true),
			'perfil_id'=>'2', // 1- Admin | 2- cliente --- POR DEFECTO ES CLIENTE
			'username'=>$this->input->post('username',true),
			'password'=>($pass)
		);

		//validacion de los datos obtenidos
		if ($this->form_validation->run() == FALSE) {
			//Enviamos el modelos mostrando los errores  en la view dde registro
			$data = array('titulo' => 'Formulario | Error');
			$this->load->view('front/header_view', $data); 
			$this->load->view('front/navbar_view'); 
			$this->load->view('formularios/registrarusuario_view'); 
			$this->load->view('front/footer_view'); 
		}
		else{ // Paso la validacion

			//envio el array con los datos a la funcion de agregar usuario 
			$usuario = $this->usuario_model->add_user($data);

			//redirecciono a la pagina de inicio (Crear pagina de perfil)
		$data['titulo'] = 'Principal';

		$this->load->view('front/header_view', $data); 
		$this->load->view('front/navbar_view'); 
		$this->load->view('partes/principal'); 
		$this->load->view('front/footer_view'); 
		}
	}
	
}
