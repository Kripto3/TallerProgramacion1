<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_controller extends CI_Controller
{
    
  public function __construct() 
  {
    parent::__construct();
    $this->load->model('usuario_model');
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
      * Muestra todos los usuarios en tabla */
    function index()
    {
      if($this->_veri_log()){
      $data = array('titulo' => 'Usuarios');
    
      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['username'] = $session_data['username'];
      $data['nombre'] = $session_data['nombre'];
      $data['apellido'] = $session_data['apellido'];
      $data['id_usuario'] = $session_data['id_usuario'];

      
      $dat = array('usuarios' => $this->usuario_model->get_usuarios());

      $this->load->view('front/header_view',$data);
      $this->load->view('front/navbar_view');
      $this->load->view('usuarios/muestrausuarios_view',$dat);
      $this->load->view('front/footer_view');
      }else{
      redirect('sesion', 'refresh');

      }
    }

    /**
      * Muestra todas los admins en tabla*/
      
    function muestra_admin()
    {
      if($this->_veri_log()){
      $data = array('titulo' => 'Ver Administradores');
    
      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['username'] = $session_data['username'];
      $data['nombre'] = $session_data['nombre'];
      $data['apellido'] = $session_data['apellido'];

      $dat = array('usuarios' => $this->usuario_model->get_admin() );

      $this->load->view('front/header_view', $data);
      $this->load->view('front/navbar_view');
      $this->load->view('usuarios/muestrausuarios_view', $dat);
      $this->load->view('front/footer_view');
      }else{
      redirect('sesion', 'refresh'); }
    }

    /**
      * Muestra todas los clientes en tabla*/
      
    function muestra_clientes()
    {
      if($this->_veri_log()){
      $data = array('titulo' => 'Ver Clientes');
    
      $session_data = $this->session->userdata('logged_in');
      $data['perfil_id'] = $session_data['perfil_id'];
      $data['username'] = $session_data['username'];
      $data['nombre'] = $session_data['nombre'];
      $data['apellido'] = $session_data['apellido'];

      $dat = array('usuarios' => $this->usuario_model->get_clientes() );

      $this->load->view('front/header_view', $data);
      $this->load->view('front/navbar_view');
      $this->load->view('usuarios/muestrausuarios_view', $dat);
      $this->load->view('front/footer_view');
      }else{
      redirect('sesion', 'refresh'); }
    }

      function eliminar_usuario(){
        $id = $this->uri->segment(2); 
        $data = array(
          'baja'=>'SI'
        );

        $this->usuario_model->estado_usuario($id, $data);
        redirect('ver_usuarios', 'refresh');
      }

      /**
    * Obtiene los datos del usuario a activar
    */
      function activar_usuario(){
        $id = $this->uri->segment(2);
        $data = array(
          'baja'=>'NO'
        );

        $this->usuario_model->estado_usuario($id, $data);
        redirect('ver_usuarios', 'refresh');
      }
      function agregar_nuevo_usuario()
      {
        if($this->_veri_log()){
        $data = array('titulo' => 'Agregar usuario');
      
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];
        $data['apellido'] = $session_data['apellido'];
  
  
        $this->load->view('front/header_view',$data);
        $this->load->view('front/navbar_view');
        $this->load->view('usuarios/agregausuario_view');
        $this->load->view('front/footer_view');
        }else{
        redirect('sesion', 'refresh');
  
        }
      }
      /**
    * Productos eliminados logicamente
    */
      function muestra_eliminados()
      {     
          if($this->_veri_log()){
          $data = array('titulo' => 'Usuarios eliminados');
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['username'] = $session_data['username'];
        $data['nombre'] = $session_data['nombre'];
        $data['apellido'] = $session_data['apellido'];
        
        $dat = array(
              'usuarios' => $this->usuario_model->not_active_usuarios()
        );

        $this->load->view('front/header_view',$data);
        $this->load->view('front/navbar_view');
        $this->load->view('usuarios/muestraeliminados_view',$dat);
        $this->load->view('front/footer_view');
        }else{
        redirect('sesion', 'refresh');
        }
      }    
      
      //registrar usuarios
      function verificar_usuario(){
        $this->form_validation->set_rules('nombre', 'Nombre','required');
        $this->form_validation->set_rules('apellido', 'Apellido','required');
        $this->form_validation->set_rules('email', 'Email','required|trim|valid_email|is_unique[usuarios.email]');
        $this->form_validation->set_rules('username', 'Usuario','required|trim|is_unique[usuarios.username]');
        $this->form_validation->set_rules('perfil_id', 'Perfil','required');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');
        $this->form_validation->set_rules('re_password', 'Repetir Constraseña','required|matches[password]');

        $this->form_validation->set_message('required', '<div class="alert alert-danger" role="alert"> El campo %s es obligatorio.</div>');
        $this->form_validation->set_message('matches', '<div class="alert alert-danger" role="alert"> Las contraseñas no coinciden.</div>');
        $this->form_validation->set_message('is_unique', '<div class="alert alert-danger" role="alert"> El campo %s ya existe.</div>');
    
        $pass = $this->input->post('re_password',true);
    
    
        //array con datos que seran enviados a la db 
        $data = array(
          'nombre'=>$this->input->post('nombre',true),
          'apellido'=>$this->input->post('apellido',true),
          'email'=>$this->input->post('email',true),
          'perfil_id'=>$this->input->post('perfil_id',true),
          'username'=>$this->input->post('username',true),
          'password'=>($pass)
        );
    
        //validacion de los datos obtenidos
        if ($this->form_validation->run() == FALSE) {
          $data = array('titulo' => 'Formulario | Error');
          $this->load->view('front/header_view', $data); 
          $this->load->view('front/navbar_view'); 
          $this->load->view('usuarios/agregausuario_view'); 
          $this->load->view('front/footer_view'); 
        }
        else{ 
          $usuario = $this->usuario_model->add_user($data);
          $this->index();
        }
      }

    /**
		* Muestra para modificar un producto
		*/
    function modificar_usuario()
		{
			$id = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id);

		  if ($datos_usuario != FALSE) {
				foreach ($datos_usuario->result() as $row) 
				{
					$nombre = $row->nombre;
					$apellido = $row->apellido;
					$email = $row->email;
					$perfil_id = $row->perfil_id;
          $username = $row->username;
          $id_usuario = $row->id_usuario;

				}

				$dat = array('id_usuario' => $id_usuario,
					'nombre' => $nombre,
					'apellido' =>$apellido,
					'email' => $email,
					'perfil_id' => $perfil_id,
					'username' => $username
				);
			} 
			else 
			{
				return FALSE;
			} 
		if($this->_veri_log()){
        $data = array('titulo' => 'Modificar Usuario');
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];
        $data['apellido'] = $session_data['apellido'];
        
        $this->load->view('front/header_view', $data);
        $this->load->view('front/navbar_view');
        $this->load->view('usuarios/modificausuario_view', $dat);
        $this->load->view('front/footer_view');
			}else{
      redirect('login', 'refresh');
      } 
    } 
    
    function verificar_modificar_usuario()
		{
			//Validación del formulario
      $this->form_validation->set_rules('nombre', 'Nombre','required');
      $this->form_validation->set_rules('apellido', 'Apellido','required');
      $this->form_validation->set_rules('email', 'Email','required|trim|valid_email');
      $this->form_validation->set_rules('username', 'Usuario','required');
      $this->form_validation->set_rules('perfil_id', 'Perfil','required');

      $this->form_validation->set_message('required', '<div class="alert alert-danger" role="alert"> El campo %s es obligatorio.</div>');
      $this->form_validation->set_message('is_unique', '<div class="alert alert-danger" role="alert"> El campo %s ya existe.</div>');
  
			$id_usuario = $this->uri->segment(2);

			$dat = array(
        'id_usuario'=>$id_usuario,
        'nombre'=>$this->input->post('nombre',true),
        'apellido'=>$this->input->post('apellido',true),
        'email'=>$this->input->post('email',true),
        'perfil_id'=>$this->input->post('perfil_id',true),
        'username'=>$this->input->post('username',true)
			);


			if ($this->form_validation->run()==FALSE)
			{

				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];
				$data['apellido'] = $session_data['apellido'];

				$this->load->view('front/header_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('usuarios/modificausuario_view', $dat);
				$this->load->view('front/footer_view');
			}
			else
			{
			  $datos_usuario = $this->usuario_model->update_usuario($id_usuario, $dat);
        redirect('ver_usuarios', 'refresh');
			}
			
		}
}