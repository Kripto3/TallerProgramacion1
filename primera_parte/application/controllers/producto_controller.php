<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_controller extends CI_Controller {

        public function index(){
            $this->load->model('producto_model');
            $data['consolas'] = $this->producto_model->select_consola();
            $data['tipos'] = $this->producto_model->select_tipo();
            $this->load->view('plantilla/inicio');
            $this->load->view('plantilla/navegacion_top');
            //$this->load->view('plantilla/header');
            $this->load->view('plantilla/navegacion_admin');
            $this->load->view('plantilla/agregar_producto_view', $data);
            $this->load->view('plantilla/footer');
        }

        //Reglas y mensajes para el formulario de agregar producto

        public function registrar_producto(){
            $this->form_validation->set_rules('titulo','Titulo','required');
            $this->form_validation->set_rules('descripcion','Descripcion','required');
            $this->form_validation->set_rules('precio','Precio','required');
            $this->form_validation->set_rules('consola','Seleccionar una consola','required|callback_select_validate_consolas');
            $this->form_validation->set_rules('tipo','Seleccione un tipo de producto','required|callback_select_validate_tipos');
            $this->form_validation->set_rules('imagen', 'Seleccionar una imagen','callback_validar_imagen');
            $this->form_validation->set_rules('stock', 'Ingrese el stock', 'required|integer');

            $this->form_validation->set_message('required','El campo %s es obligatorio');
            $this->form_validation->set_message('integer','El campo %s debe tener valores enteros');

            if ($this->form_validation->run() == FALSE){
                $this->index();
            } else{
                $this->guardar_producto();
            }
        }
            //Funcion para verificar que se ingreso una imagen
        function validar_imagen($imagen){
            
            $nombre_imagen = $_FILES['imagen'] ['name']; //obtiene el nombre de la imagen
            
            if(empty($nombre_imagen)){
                $this->form_validation->set_message('validar_imagen', 'Seleccionar una imagen');
                return false;
            }
            else{
                return true;
            }
        }
        //funcion que verifica que se selecciono una consola
        function select_validate_consolas($consola){
            if($consola=="0"){
                $this->form_validation->set_message('select_validate_consolas', 'Seleccione una consola');
                return false;
            }
            else{
                return true;
            }
        }


        function select_validate_tipos($tipo){
            if($tipo=="0"){
                $this->form_validation->set_message('select_validate_tipos', 'Seleccione un tipo de producto');
                return false;
            }
            else{
                return true;
            }
        }

        function guardar_producto(){
            $config['upload_path'] = './uploads/imagenes_producto';
            $config['allowed_types'] = 'jpg|JPG|JPEG|png|PNG';
            $config['remove_spaces'] = TRUE;
            $config['max_size'] = '900';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('imagen')){
                echo "<script type=\"text/javascript\">alert('No se pudo cargar el archivo'); </script>";
                $this->index();
            }else{

                $data = array(
                    'titulo' => $this->input->post('titulo'),
                    'descripcion' => $this->input->post('descripcion'),
                    'precio' =>$this->input->post('precio'),
                    'consola' =>$this->input->post('consola'),
                    'tipo' =>$this->input->post('tipo'),
                    'imagen' =>$_FILES['imagen']['name'],
                    'estado' => 1,
                    'stock' =>$this->input->post('stock')
                );

                $this->load->model('producto_model');
                $this->producto_model->guardar_producto($data);
                redirect('producto_controller');
                $this->index();
            }
        }


        public function eliminar_producto($id=NULL){
            $data = array(
                'estado'=> '0'
            );

            $this->load->model('producto_model');
            $this->producto_model->actualizar_producto($data,$id);
            redirect('producto_controller/gestionar_productos');
        }

        public function activar_producto($id=NULL){
            $data = array(
                'estado'=> '1'
            );

            $this->load->model('producto_model');
            $this->producto_model->actualizar_producto($data,$id);
            redirect('producto_controller/gestionar_productos');
        }

        public function gestionar_productos(){

            $this->load->model('producto_model');
            $data['producto'] = $this->producto_model->select_productos();
            $this->load->view('plantilla/inicio');
            $this->load->view('plantilla/navegacion_top');
            //$this->load->view('plantilla/header');
            $this->load->view('plantilla/navegacion_admin');
            $this->load->view('plantilla/gestionar_producto', $data);
            $this->load->view('plantilla/footer');
            //aca se debe cargar las vistas para administrar los productos
        }

        

        public function editar_producto($id=NULL) {
            $this->load->model('producto_model');
            $producto = $this->producto_model->select_productos_id($id);
            foreach ($producto as $row) {
            $data['id_producto'] = $row->id_producto;
            $data['titulo'] = $row->titulo;
            $data['descripcion'] = $row->descripcion;
            $data['precio'] = $row->precio;
            $data['estado']= $row->estado;
            $data['stock']= $row->stock;
            $data['tipo'] = $row->tipo;
            $data['consola'] = $row->consola;
            $data['imagen'] = $row->imagen;
            $data['consolas'] = $this->producto_model->select_consola();
            $data['tipos'] = $this->producto_model->select_tipo();
            }
            $this->load->view('plantilla/inicio');
            $this->load->view('plantilla/navegacion_top');
            //$this->load->view('plantilla/header');
            $this->load->view('plantilla/navegacion_admin');
            $this->load->view('plantilla/editar_productos', $data);
            $this->load->view('plantilla/footer');
            }

        public function actualizar_producto($id=NULL){
            $this->form_validation->set_rules('titulo','Titulo','required');
            $this->form_validation->set_rules('descripcion','Descripcion','required');
            $this->form_validation->set_rules('precio','Precio','required');
            $this->form_validation->set_rules('consola','Seleccionar una consola','required|callback_select_validate_consolas');
            $this->form_validation->set_rules('tipo','Seleccione un tipo de producto','required|callback_select_validate_tipos');
            $this->form_validation->set_rules('stock','Debe ser positivo', 'is_natural');

            $this->form_validation->set_message('required','El campo %s es obligatorio');
            $this->form_validation->set_message('is_natural', '%s');
        // VALIDAR LOS DATOS INGRESADOS
        if ($this->form_validation->run() == FALSE){
            $this->editar_producto($id);
        } else{
            $nombre_imagen = $_FILES['imagen'] ['name']; //obtiene el nombre de la imagen
            
            if(!(empty($nombre_imagen))){
                $config['upload_path'] = './uploads/imagenes_producto';
                $config['allowed_types'] = 'jpg|JPG|JPEG|png|PNG';
                $config['remove_spaces'] = TRUE;
                $config['max_size'] = '900';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('imagen')){
                    echo "<script type=\"text/javascript\">alert('No se pudo cargar el archivo'); </script>";
                    $this->editar_producto($id);
                }else{
                $data = array(
                    'titulo' => $this->input->post('titulo'),
                    'descripcion' => $this->input->post('descripcion'),
                    'precio' =>$this->input->post('precio'),
                    'consola' =>$this->input->post('consola'),
                    'tipo' =>$this->input->post('tipo'),
                    'imagen' =>$_FILES['imagen']['name'],
                    'estado' => 1,
                    'stock' =>$this->input->post('stock')
                );
                
            }

            }
            else{
                $data = array(
                    'titulo' => $this->input->post('titulo'),
                    'descripcion' => $this->input->post('descripcion'),
                    'precio' =>$this->input->post('precio'),
                    'consola' =>$this->input->post('consola'),
                    'tipo' =>$this->input->post('tipo'),
                    'stock' =>$this->input->post('stock')
                );
            }
            $this->load->model('producto_model');
                $this->producto_model->actualizar_producto($data, $id);
                redirect('producto_controller/gestionar_productos');
                
        }
    }



}