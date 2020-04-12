<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//constructor
	public function _construct(){
		parent::_construct();
	}

	
	public function index()
	{
		$this->load->view('plantilla.html'); 
	}
	
}
