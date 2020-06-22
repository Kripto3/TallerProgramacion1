<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Consultas_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('consultas_model');
			
		}

		private function _veri_log()
    	{
	    	if ($this->session->userdata('logged_in')) 
	    	{
	    		return TRUE;
	    	} else {
	    		return FALSE;
	    	}
    	}
		
		function index()
		{
			if($this->_veri_log()){

			$data = array('titulo' => 'Ver Consultas');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];
			$data['id_usuario'] = $session_data['id_usuario'];
			$dat = array('consultas' => $this->consultas_model->get_consultas() );

			$this->load->view('front/header_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('consultas/muestraconsultas_view',$dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('sesion', 'refresh');

			}
		}
	    function muestra_eliminados()
	    {    	
	    	if($this->_veri_log()){
	    	$data = array('titulo' => 'Productos eliminados');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];
			$data['id_usuario'] = $session_data['id_usuario'];
			$dat = array('consultas' => $this->consultas_model->ver_archivados());

			$this->load->view('front/header_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('consultas/muestraeliminados_view',$dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('sesion', 'refresh');

			}
		}
				
		function consultas()
		{
			$data = array('titulo' => 'Enviar Consulta');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];
			$data['id_usuario'] = $session_data['id_usuario'];
			$dat = array('consultas' => $this->consultas_model->get_consultas());

			$this->load->view('front/header_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('partes/consultas',$dat);
			$this->load->view('front/footer_view');

		}

		function alta_consultas()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('telefono', 'Telefono', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('asunto', 'Asunto', 'required');
			$this->form_validation->set_rules('mensaje', 'Mensaje', 'required');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('numeric',
							'<div class="alert alert-danger">El campo %s debe contener un valor numérico</div>');


			/*Si no pasa la validacion */
			if (!$this->form_validation->run())
			{
				$data = array('titulo' => 'Error al enviar');
		
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];
				$data['apellido'] = $session_data['apellido'];

				$this->load->view('front/header_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('partes/consultas');
				$this->load->view('front/footer_view');
				
			}
			else
			{
			// Array de datos para insertar en consultas
                    $data = array(
						'nombre'=>$this->input->post('nombre',true),
						'apellido'=>$this->input->post('apellido',true),
						'telefono'=>$this->input->post('telefono',true),
						'email'=>$this->input->post('email',true),
						'asunto'=>$this->input->post('asunto',true),
						'mensaje'=>$this->input->post('mensaje',true),
						'archivado'=>'NO',
					);

					$consulta = $this->consultas_model->add_consultas($data);
					redirect('consultas', 'refresh');

					return TRUE;		
			}
		}
	    function archivar_consulta(){
	    	$id = $this->uri->segment(2); 
	    	$data = array(
	    		'archivado'=>'SI'
	    	);

	    	$this->consultas_model->estado_consulta($id, $data);
	    	redirect('ver_consultas', 'refresh');
	    }

	    function restaurar_consulta(){
	    	$id = $this->uri->segment(2);
	    	$data = array(
	    		'archivado'=>'NO'
	    	);

	    	$this->consultas_model->estado_consulta($id, $data);
	    	redirect('ver_consultas', 'refresh');
	    }
          	
	}