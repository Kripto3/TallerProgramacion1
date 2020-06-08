<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Producto_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('producto_model');
			
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
		
		/**
		* Muestra todos los productos en tabla */
		function index()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Productos');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];

			$dat = array('productos' => $this->producto_model->get_productos() );

			$this->load->view('front/header_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('tablas/muestraproductos_view',$dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

		/**
		* Muestra todos los escritorios en tabla
		*/
		function mostrar_auriculares()
		{
			$dat = array('productos' => $this->producto_model->get_auriculares());

			$data = array('titulo' => 'Auriculares');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];
			
			$this->load->view('front/header_view', $data);
			$this->load->view('front/navbar_view');
			if ($session_data) 
			{
				$this->load->view('partes/carritoparte_view' );
			}
			$this->load->view('productos/mostrarauriculares_view', $dat);
			$this->load->view('front/footer_view');

		}

		/**
		* Muestra todos los notebooks en tabla
		*/
		function mostrar_notebooks()
		{
			$data = array('titulo' => 'Notebooks');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];

			$dat = array('productos' => $this->producto_model->get_notebooks() );

			$this->load->view('front/header_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('productos/mostrarnotebooks_view', $dat);
			$this->load->view('front/footer_view');

		}
		/**
		* Muestra todos los auriculares en tabla
		*/
		function mostrar_escritorios()
		{
			$data = array('titulo' => 'Escritorios');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];

			$dat = array('productos' => $this->producto_model->get_notebooks() );

			$this->load->view('front/header_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('productos/mostrarescritorios_view', $dat);
			$this->load->view('front/footer_view');

		}
		/**
		* Muestra todos los mouse en tabla
		*/
		function mostrar_mouses()
		{
			$data = array('titulo' => 'Mouses');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];

			$dat = array('productos' => $this->producto_model->get_notebooks() );

			$this->load->view('front/header_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('productos/mostrarmouses_view', $dat);
			$this->load->view('front/footer_view');

		}

		/**
		* Muestra todos los teclados en tabla
		*/
		function mostrar_teclados()
		{
			$data = array('titulo' => 'Teclados');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];

			$dat = array('productos' => $this->producto_model->get_notebooks() );

			$this->load->view('front/header_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('productos/mostrarteclados_view', $dat);
			$this->load->view('front/footer_view');

		}
		
		/**
		* Muestra todos los monitor en tabla
		*/
		function mostrar_monitores()
		{
			$data = array('titulo' => 'Monitores');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];

			$dat = array('productos' => $this->producto_model->get_notebooks() );

			$this->load->view('front/header_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('productos/mostrarmonitores_view', $dat);
			$this->load->view('front/footer_view');

		}
		


		/**
		* Muestra formulario para agregar producto
		*/
		function form_agrega_producto()  	//Si se modifica, modificar (agrega_producto) tambien
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Agregar Producto');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];
			

			$dat = array('productos' => $this->producto_model->get_productos()) ;
			$dat['categoria'] = $this->producto_model->llamar_categorias();

			$this->load->view('front/header_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('tablas/agregaproducto_view',$dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

		/**
		* Verifica datos ingresados en el formulario para agregar producto
		*/
		function agrega_producto()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('descripcion', 'Descripcion', 'required|is_unique[productos.descripcion]');
			$this->form_validation->set_rules('categoria_id', 'Categoria', 'required');
			$this->form_validation->set_rules('precio_costo', 'Precio Costo', 'required|numeric');
			$this->form_validation->set_rules('precio_venta', 'Precio Venta', 'required|numeric');
			$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
			$this->form_validation->set_rules('stock_min', 'Stock Minimo', 'required|numeric');			
			$this->form_validation->set_rules('filename', 'Imagen', 'required|callback__image_upload');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El campo %s ya existe</div>');

			$this->form_validation->set_message('numeric',
							'<div class="alert alert-danger">El campo %s debe contener un valor numérico</div>');


			if (!$this->form_validation->run())
			{
				$data = array('titulo' => 'Error de formulario');
		
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];
				$data['apellido'] = $session_data['apellido'];

				$dat['categoria'] = $this->producto_model->llamar_categorias();


				$this->load->view('front/header_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('tablas/agregaproducto_view',$dat);
				$this->load->view('front/footer_view');
			}
			else
			{
				$this->_image_upload();			
			}
		}
		
		/**
		* Obtiene los datos del archivo imagen.
		* Permite archivos gif, jpg, png
		* Verifica si los datos son correcto en conjunto con la imagen y lo inserta en la tabla correspondiente
		* En la tabla guarda la URL de donde se encuentra la imagen.
		*/
		function _image_upload()
		{
			$this->load->library('upload');
	 
			//Comprueba si hay un archivo cargado
			if (!empty($_FILES['filename']['name']))
			{
				// Especifica la configuración para el archivo
				$config['upload_path'] = 'assets/img/productos/';
				$config['allowed_types'] = 'gif|jpg|JPEG|png';

				$config['max_size'] = '2048';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';       
 
				// Inicializa la configuración para el archivo 
				$this->upload->initialize($config);
 
				if ($this->upload->do_upload('filename'))
				{
					// Mueve archivo a la carpeta indicada en la variable $data
					$data = $this->upload->data();

					// Path donde guarda el archivo..
					$url ="assets/img/productos/".$_FILES['filename']['name'];

					// Array de datos para insertar en productos
					$data = array(
						'descripcion'=>$this->input->post('descripcion',true),
						'categoria_id'=> $_POST['Categoria'], // Obtener el valor del select por su nombre 
						'imagen'=>$url,
						'precio_costo'=>$this->input->post('precio_costo',true),
						'precio_venta'=>$this->input->post('precio_venta',true),
						'stock'=>$this->input->post('stock',true),
						'stock_min'=>$this->input->post('stock_min',true),
						'info' =>$this->input->post('info',true),
						'eliminado'=>'NO',
					);

					$productos = $this->producto_model->add_producto($data);

					redirect('productos', 'refresh');

					return TRUE;
				}
				else
				{
					//Mensaje de error si no existe imagen correcta
					$imageerrors = '<div class="alert alert-danger">El campo %s es incorrecta, extención incorrecto o excede el tamaño permitido que es de: 2MB </div>';//$this->upload->display_errors();
					$this->form_validation->set_message('_image_upload',$imageerrors );
					
					return false;
				}
 
			}
		}

		/**
		* Muestra para modificar un producto
		*/
		function muestra_modificar()
		{
			$id = $this->uri->segment(2);
			$datos_producto = $this->producto_model->edit_producto($id);

			if ($datos_producto != FALSE) {
				foreach ($datos_producto->result() as $row) 
				{
					$descripcion = $row->descripcion;
					$categoria_id = $row->categoria_id;
					$imagen = $row->imagen;
					$precio_costo = $row->precio_costo;
					$precio_venta = $row->precio_venta;
					$stock = $row->stock;
					$info = $row->info;
					$stock_min = $row->stock_min;	
				}

				$dat = array('producto' =>$datos_producto,
					'id'=>$id,
					'descripcion'=>$descripcion,
					'categoria_id'=>$categoria_id,
					'imagen'=>$imagen,
					'precio_costo'=>$precio_costo,
					'precio_venta'=>$precio_venta,
					'stock'=>$stock,
					'info'=>$info,
					'stock_min'=>$stock_min
				);
			} 
			else 
			{
				return FALSE;
			}
			if($this->_veri_log()){
			$data = array('titulo' => 'Modificar Producto');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];
			$dat['categoria'] = $this->producto_model->llamar_categorias();
			
			
			$this->load->view('front/header_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('tablas/modificaproducto_view', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh');}
		}

		/**
		* Verifica datos para modificar un producto
		*/
		function modificar_producto()
		{
			//Validación del formulario
			$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
			$this->form_validation->set_rules('categoria_id', 'Categoria', 'required');
			$this->form_validation->set_rules('precio_costo', 'Precio Costo', 'required|numeric');
			$this->form_validation->set_rules('precio_venta', 'Precio Venta', 'required|numeric');
			$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
			$this->form_validation->set_rules('stock_min', 'Stock Minimo', 'required|numeric');
			

			//Mensaje del form_validation
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

			$this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>'); 

			$id = $this->uri->segment(2);
			$datos_producto = $this->producto_model->edit_producto($id);

			foreach ($datos_producto->result() as $row) 
			{
				$imagen = $row->imagen;
			}

			$dat = array(
				'id'=>$id,
				'descripcion'=>$this->input->post('descripcion',true),
				'categoria_id'=> $_POST['Categoria'],
				'imagen'=>$imagen,
				'precio_costo'=>$this->input->post('precio_costo',true),
				'precio_venta'=>$this->input->post('precio_venta',true),
				'stock'=>$this->input->post('stock',true),
				'info'=>$this->input->post('info',true),
				'stock_min'=>$this->input->post('stock_min',true)
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];
				$data['apellido'] = $session_data['apellido'];
				$dat['categoria'] = $this->producto_model->llamar_categorias();

				$this->load->view('front/header_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('tablas/modificaproducto_view', $dat);
				$this->load->view('front/footer_view');
			}
			else
			{
				$this->_image_modif();		
			}
			
		}

		/**
		* Obtiene los datos del archivo imagen.
		* Permite archivos gif, jpg, png
		* Verifica si los datos son correcto en conjunto con la imagen y lo inserta en la tabla correspondiente
		* Si el campo imagen se encuentra vacio asume que la imagen no fue moficado.
		* En la tabla guarda la URL de donde se encuentra la imagen.
		*/
		
		function _image_modif()
		{
			//Cargo la libreria para subir archivos
			$this->load->library('upload');

			// Obtengo el id del libro
			$id = $this->uri->segment(2);

			// Array de datos para obtener datos de libros sin la imagen 
			$dat = array(
				'id'=>$id,
				'descripcion'=>$this->input->post('descripcion',true),
				'categoria_id'=> $_POST['Categoria'],
				'precio_costo'=>$this->input->post('precio_costo',true),
				'precio_venta'=>$this->input->post('precio_venta',true),
				'stock'=>$this->input->post('stock',true),
				'info'=>$this->input->post('info',true),
				'stock_min'=>$this->input->post('stock_min',true)
			);

			// Si la iamgen esta vacia se asume que no se modifica
			if (!empty($_FILES['filename']['name']))
			{            
				// Especifica la configuración para el archivo
				$config['upload_path'] = 'assets/img/productos/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';

				$config['max_size'] = '2048';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';       

				// Inicializa la configuración para el archivo 
				$this->upload->initialize($config);

				if ($this->upload->do_upload('filename'))
				{
						// Mueve archivo a la carpeta indicada en la variable $data
					$data = $this->upload->data();

						// Path donde guarda el archivo..
					$url ="assets/img/productos/".$_FILES['filename']['name'];

						// Agrego la imagen si se modifico.  
					$dat['imagen']=$url;

						// Actualiza datos del libro
					$this->producto_model->update_producto($id, $dat);
					redirect('productos', 'refresh');
				}
				else
				{
						//Mensaje de error si no existe imagen correcta
					$imageerrors = '<div class="alert alert-danger">El campo %s es incorrecta, extención incorrecto o excede el tamaño permitido que es de: 2MB </div>';
					$this->form_validation->set_message('_image_modif',$imageerrors );
					return false;
				} 
			}
			else
			{
				$this->producto_model->update_producto($id, $dat);
				redirect('productos', 'refresh');
			}
		}


		/**
		* Permite recuperar un segmento específico. Donde n es el número de segmento que desea recuperar. Los segmentos están numerados de izquierda a derecha. 
		*/
		function eliminar_producto(){
			$id = $this->uri->segment(2); 
			$data = array(
				'eliminado'=>'SI'
			);

			$this->producto_model->estado_producto($id, $data);
			redirect('productos', 'refresh');
		}

		/**
		* Obtiene los datos del producto a activar
		*/
		function activar_producto(){
			$id = $this->uri->segment(2);
			$data = array(
				'eliminado'=>'NO'
			);

			$this->producto_model->estado_producto($id, $data);
			redirect('productos', 'refresh');
		}

		/**
		* Productos eliminados logicamente
		*/
		function muestra_eliminados()
		{    	
			if($this->_veri_log()){
			$data = array('titulo' => 'Productos eliminados');
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			$data['apellido'] = $session_data['apellido'];

			$dat = array(
				'productos' => $this->producto_model->not_active_productos()
			);

			$this->load->view('front/header_view', $data);
			$this->load->view('front/navbar_view');
			$this->load->view('tablas/muestraeliminados_view', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh');}
		}

		
	}
/* End of file
*/