<?php
    class Usuario_model extends CI_Model{
    
        public function buscar_usuario($usuario, $contrasenia)
        {
        $this->db->select('*');
        $this->db->from('persona');
        $this->db->where('email', $usuario);
        $this->db->where('password', $contrasenia);
        $query = $this->db->get();
        $resultado = $query->row();
        return $resultado;
        }
    
    }