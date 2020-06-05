<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Consultas_controller extends CI_Controller {


    public function guardar_consulta(){
        $this->form_validation->set_rules('nombre', 'Nombre del Usuario', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('email', 'Correo Electronico', 'required|valid_email');
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required');

        $this->form_validation->set_message('alpha', "El campo no debe contener caracteres especiales");
        $this->form_validation->set_message('required', "Debe ingresar su %s");
        $this->form_validation->set_message('valid_email', "Ingrese un %s valido");
        
        if ($this->form_validation->run() == FALSE){
                redirect('contacto');
        }
        else{
                $this->insertar_consulta();
        }
        
}


    public function insertar_consulta(){
        $this->load->model('consultas_model');
        $data = array(
            'nombre_emisor' => $this->input->post('nombre'),
            'apellido_emisor' => $this->input->post('apellido'),
            'email' =>$this->input->post('email'),
            'consulta' =>$this->input->post('mensaje'),
            'fecha_consulta' => date('Y-m-d'),
            'estado' => '0',
        );
        $this->consultas_model->guardar_consulta($data);
        redirect('inicio');
    }

        public function consultas(){
            $this->load->model('consultas_model');
            $data['consultas'] = $this->consultas_model->select_consultas();
            $this->load->view('plantilla/inicio');
            $this->load->view('plantilla/navegacion_top');
            $this->load->view('plantilla/navegacion_admin');
            $this->load->view('plantilla/contacto_admin', $data);
            $this->load->view('plantilla/footer');
        }
        
        public function mensaje_leido($id=NULL){
            $this->load->model('consultas_model');
            $data = array(
                'estado' => 1
            );
            $this->consultas_model->actualizar_estado($data,$id);
            $this->consultas();
        }

}