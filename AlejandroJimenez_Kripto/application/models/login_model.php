<?php 

class Login_model extends CI_Model{

	public function __construct() 
    {
        parent::__construct();
    }
	
	function valid_user($username, $password)
	{
		//Busco entre los usuarios el que cumpla la condicion de Username y password enviados desde el formulario
		$query = $this->db->get_where('usuarios', array('username'=>$username,'password'=>$password, 'baja'=> 'NO'), 1);
		//si es igual a 1 quiere decir que encontro el usuario
        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
	}
}
