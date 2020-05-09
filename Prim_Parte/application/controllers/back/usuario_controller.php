<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_controller extends CI_Controller {

	public function _construct(){
		parent::_construct();
		$this ->load->model('usuario_model');
	}

	
	function index(){
		
	}
	
}
