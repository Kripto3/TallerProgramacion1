<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Primera_parte_controller extends CI_Controller {

	
	public function index()
	{
		$this->carga();
		$data['productos'] = $this->producto_model->inicio_articulos();
		$this->load->view('plantilla/slider');
		$this->load->view('plantilla/inicio_articulos', $data);
		$this->load->view('plantilla/footer');
	}

	public function consolas()
	{
		$this->carga();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'consolas';
		$config['first_link'] = 'Primero';
		$config['prev_link'] = 'Anterior';
		$config['last_link'] = 'Ultimo';
		$config['next_link'] = 'Siguiente';

		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-link">';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active page-link"><span>';
		$config['cur_tag_close'] = '<span></span></span></li>';

		$config['prev_tag_open'] = '<li class="page-link">';
		$config['prev_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li class="page-link">';
		$config['next_tag_close'] = '</li>';

		$config['total_rows'] = count ($this->producto_model->contar_productos_consola());

		$config['per_page'] = 4;
		$config['num_links'] = 2;
		$config['uri_segment'] = 2;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(2);
		$data['productos'] = $this->producto_model->select_productos_consola(4,$page);
		$this->load->view('plantilla/productos', $data);
		$this->load->view('plantilla/footer');
	}

	public function contacto()
	{
		$this->carga();
		$this->load->view('plantilla/contacto');
		$this->load->view('plantilla/footer');
	}

	public function carga()
	{
		$this->load->view('plantilla/inicio');
		$this->load->view('plantilla/navegacion_top');
		$this->load->view('plantilla/header');
		$this->load->model('producto_model');
		$data['consolas'] = $this->producto_model->select_consola();
		if($this->session->userdata('login')){
			$perfil_usuario = $this->session->userdata('perfil');

			//verifica el tipo de usuario para redireccionar al menu de navegacion correspondiente

				switch($perfil_usuario){
					case '1':
							$this->load->view('plantilla/navegacion_admin',$data);
							break;
					case '2':
					$this->load->view('plantilla/navegacion',$data);
					break;
				}
		}
		else{
			$this->load->view('plantilla/navegacion',$data);
		}
		
	}

	public function juegos($id=NULL)
	{
		$this->carga();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'juegos/'.$id;
		$config['first_link'] = 'Primero';
		$config['prev_link'] = 'Anterior';
		$config['last_link'] = 'Ultimo';
		$config['next_link'] = 'Siguiente';
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-link">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active page-link"><span>';
		$config['cur_tag_close'] = '<span></span></span></li>';
		$config['prev_tag_open'] = '<li class="page-link">';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-link">';
		$config['next_tag_close'] = '</li>';

		$config['total_rows'] = count ($this->producto_model->contar_productos_juegos($id));

		$config['per_page'] = 4;
		$config['num_links'] = 2;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$data['productos'] = $this->producto_model->select_productos_juegos(4,$page,$id);
		
		$this->load->view('plantilla/productos', $data);
		$this->load->view('plantilla/footer');
	}

	

	public function accesorios()
	{	
		$this->carga();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'accesorios';
		$config['first_link'] = 'Primero';
		$config['prev_link'] = 'Anterior';
		$config['last_link'] = 'Ultimo';
		$config['next_link'] = 'Siguiente';

		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-link">';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active page-link"><span>';
		$config['cur_tag_close'] = '<span></span></span></li>';

		$config['prev_tag_open'] = '<li class="page-link">';
		$config['prev_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li class="page-link">';
		$config['next_tag_close'] = '</li>';

		$config['total_rows'] = count ($this->producto_model->contar_productos_accesorios());

		$config['per_page'] = 4;
		$config['num_links'] = 2;
		$config['uri_segment'] = 2;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(2);
		$data['productos'] = $this->producto_model->select_productos_accesorios(4,$page);
		$this->load->view('plantilla/productos', $data);
		$this->load->view('plantilla/footer');
	}

	public function terminos()
	{
		$this->carga();
		$this->load->view('plantilla/terminosYcondiciones');
		$this->load->view('plantilla/footer');
	}

	public function registro()
	{
		$this->carga();
		$this->load->view('plantilla/registro');
		$this->load->view('plantilla/footer');
	}

	public function quienesSomos()
	{
		$this->carga();
		$this->load->view('plantilla/quienesSomos');
		$this->load->view('plantilla/footer');
	}

	//Verificaciones y controles de usuario logueado

	public function iniciar_sesion(){

		$this->form_validation->set_rules('id', 'ID DE USUARIO', 'required');
		$this->form_validation->set_rules('password', 'CONTRASEÑA', 'required|callback_verificar_password');
		
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$this->usuario_logueado();
		}
	}

	//Funcion que verifica el usuario y contrasenia
	public function verificar_password(){
		$usuario = $this->input->post('id');
		$pass = $this->input->post('password');
		
		$contrasenia = base64_encode($pass);
		$this->load->model('usuario_model');
		$usuario = $this->usuario_model->buscar_usuario($usuario, $contrasenia);
		if($usuario){
			$datos_usuario = array(
				'id_usuario' => $usuario->id_persona,
				'nombre' => $usuario->nombre,
				'apellido' => $usuario->apellido,
				'perfil' =>$usuario->perfil,
				'login' => TRUE
			);

			$this->session->set_userdata($datos_usuario);

			return true;
		}
		else{
			$this->form_validation->set_message('verificar_password', 'Usuario o contraseña
			invalidos');

			return false;
		}

	}

	public function usuario_logueado(){
		if($this->session->userdata('login')){
			$data = array();
			$perfil_usuario = $this->session->userdata('perfil');

			//verifica el tipo de usuario para redireccionar a la pagina correspondiente

				switch($perfil_usuario){
					case '1':
							redirect('agregar');
							break;
					
					case '2':
							redirect('inicio');
							break;
				}
		}
		else{
			$this->login_session();
		}
	}

	public function cerrar_sesion(){
		$this->session->unset_userdata('login');
		$this->session->sess_destroy();
		$this->index();
	}

}
