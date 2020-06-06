<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Consultas_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    function get_consultas()
    {
        $query = $this->db->get_where('consultas', array('archivado' => 'NO'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
    public function add_consultas($data){
        $this->db->insert('consultas', $data);
    }


    function estado_consulta($id, $data){
        $this->db->where('id_mensaje', $id);
        $query = $this->db->update('consultas', $data);
        if($query) { return TRUE;
        } else { return FALSE;
        }
    }

    function ver_archivados()
    {
        $query = $this->db->get_where('consultas', array('archivado' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }       
    }

} 