<?php

class Consultas_model extends CI_Model {

    public function guardar_consulta($data){
        $this->db->insert('mensaje', $data);
        // Retorna el último id_orden_pedido ingresado
        return $this->db->insert_id();
    }

    public function actualizar_estado($data, $id){
        $this->db->where('id_mensaje',$id);
        $this->db->update('mensaje', $data);
}

    public function select_consulta_id($id){
        $this->db->select('*');
        $this->db->from('mensaje');
        $this->db->where('id_mensaje', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function select_consultas(){
        $this->db->select('*');
        $this->db->from('mensaje');
        $this->db->order_by('id_mensaje', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

}