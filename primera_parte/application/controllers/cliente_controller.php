<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_controller extends CI_Controller {

        public function registro()
	{
		$this->carga();
		$this->load->view('plantilla/registro');
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

        public function registrar_cliente(){
                $this->form_validation->set_rules('nombre', 'Nombre del Usuario', 'required|alpha');
                $this->form_validation->set_rules('apellido', 'Apellido', 'required|alpha');
                $this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[8]');
                $this->form_validation->set_rules('confirm_password', 'Contraseña', 'required|min_length[8]|matches[password]');
                $this->form_validation->set_rules('correo', 'Correo Electronico', 'required|valid_email|is_unique[persona.email]');
                $this->form_validation->set_rules('direccion', 'Direccion', 'required');
                $this->form_validation->set_rules('dni', 'DNI', 'required|integer');

                $this->form_validation->set_message('alpha', "El campo no debe contener caracteres especiales");
                $this->form_validation->set_message('required', "Debe ingresar su %s");
                $this->form_validation->set_message('min_length', "Formato de %s incorrecta");
                $this->form_validation->set_message('integer', "Debe ser un numero entero");
                $this->form_validation->set_message('valid_email', "Ingrese un %s valido");
                $this->form_validation->set_message('is_unique', "Ya exite una cuenta resgistrada con este email");
                
                if ($this->form_validation->run() == FALSE){
                        $this->registro();
                }
                else{
                        echo "<script type=\"text/javascript\">alert('Se a resgistrado con exito'); </script>";
                        $this->insertar_cliente();
                }
                
        }

        public function insertar_cliente(){
                $apellido = $this->input->post('apellido');
                $nombre = $this->input->post('nombre');
                $email = $this->input->post('correo');
                $direccion = $this->input->post('direccion');
                $dni = $this->input->post('dni');
                $pass = $this->input->post('password');
                $password = base64_encode($pass);
                $this->load->model('cliente_model');
                $this->cliente_model->guardar_cliente($apellido,$nombre,$password,$direccion,$dni,$email);
                redirect('inicio');
        }

}