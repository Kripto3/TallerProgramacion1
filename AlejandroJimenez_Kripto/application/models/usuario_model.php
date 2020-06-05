<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Usuario_model extends CI_Model {
	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

	//retornar usuarios	
	function get_usuarios()
	{
		//$this->db->select('id, nombre, apellido, username');
		$query = $this->db->get('usuarios');

		if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
	}

	/**
    * Retorna todos los admins
    */
    function get_admin()
    {
        $query = $this->db->get_where('usuarios', array('baja' => 'NO', 'perfil_id' => '1'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna todos los clientes
    */
    function get_clientes()
    {
        $query = $this->db->get_where('usuarios', array('baja' => 'NO', 'perfil_id' => '2'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }    
	
	//agregar usuarios
	function add_user($data)
	{
		$this->db->insert('usuarios', $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	
	//editar usuario
	function edit_usuario($id)
	{
		$query = $this->db->get_where('usuarios', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
	}
	
	//actualizar usuario
	function update_usuario($id, $data)
	{
		$this->db->where('id', $id);
        $query = $this->db->update('usuarios', $data);
        if($query) { 
            return TRUE;
        } else {
            return FALSE;
        }
	}

	//borrar usuario
	function delete_usuario($id)
	{			
		$this->db->where('id', $id);
		$query = $this->db->delete('usuarios'); 
		return true;	
	}

	/*
    * Retorna todos los usuarios inactivos o eliminados */
    function not_active_usuarios()
    {
        $query = $this->db->get_where('usuarios', array('baja' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Eliminación y activación logica de un producto
    */
    function estado_usuario($id, $data){
        $this->db->where('id_usuario', $id);
        $query = $this->db->update('usuarios', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

	//funcion para obtener el usuario por su email
	function get_id_usuario($email){
		$this->db->select('id_usuario');
        $this->db->from('usuarios');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->result();
		

	}

}

