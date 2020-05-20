
<?php 

if (! defined('BASEPATH')) exit('No direct script access allowed');

	class Usuario_model extends CI_Model{
		public function __contruct(){
		parent::__contruct();
	}


	//Funcion para obtener usuarios
	function get_usuarios(){

		$query = $this->db->get('usuarios');

		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return FALSE;
		}
	}
	
	//Funcion para agregar usuarios
	function add_user($data){
		//inserto dentro de la db en la tabla usuarios los datos obtenidos
		$this->db->insert('usuarios', $data);
		//respuesta obtenida al insertar el usuario
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	//Funcion para editar usuarios
	function edit_usuario($id){
		//creo una variable query  que tendra el resultado obtenido en la condicion en la db 
		$query = $this->db->get_where('usuarios', array('id' => $id),1);

		if ($query->num_rows() == 1) {
			return $query;
		}else{
			return FALSE;
		}
	}

	//Funcion para borrar (baja logica) usuarios
	function delte_usuario($id){
		//indico la condicion del where con la base
		$this->db->where('id', $id);
		$query = $this->db->delete('usuarios');
		return true;
	}

	//function para actualizar ususarios
	function update_usuario($id, $data){
		//indico la condicion del where con la base
		$this->db->where('id', $id);
		//creo una variable que tendra el resultado obtenido de actualizar en la db 
		$query = $this->db->update('usuarios', $data);
		if ($query) {
			return TRUE;
		}else{
			return FALSE;
		}
	}


}

