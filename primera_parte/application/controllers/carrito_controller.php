<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito_controller extends CI_Controller {

        public function index() {
        if (!$this->cart->contents()){
        $data['message'] = 'El carrito está vacío!';
        }else{
        $data['message'] = '';
        }
        $this->carga();
        $this->load->view('plantilla/carrito', $data);
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

        public function agregar_carrito(){
            $data = array(
            'id' => $this->input->post('id_producto'),
            'name' => $this->input->post('titulo'),
            'price'=> $this->input->post('precio'),
            'qty' => 1
            );
            $this->cart->insert($data);
            redirect('carrito');
        }

        function borrar ($id) {
            if ($id=="all"){
            $this->cart->destroy();
            }else{
            $data = array(
            'rowid' => $id,
            'qty' => 0
            );
            $this->cart->update($data);
            }
            redirect('carrito_controller');
        }
}