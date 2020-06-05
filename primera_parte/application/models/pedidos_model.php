<?php

class Pedidos_model extends CI_Model {

    public function guardar_orden_pedido($data){
        $this->db->insert('orden_pedido', $data);
        // Retorna el último id_orden_pedido ingresado
        return $this->db->insert_id();
    }

    public function guardar_detalle_pedido($data){
    $this->db->insert('detalle_pedido', $data);
    }

    public function select_pedido_id($id){
        $this->db->select('*');
        $this->db->from('detalle_pedido');
        $this->db->where('orden_id', $id);
        $this->db->join('orden_pedido','orden_pedido.id_orden = detalle_pedido.orden_id');
        $this->db->join('producto', 'producto.id_producto = detalle_pedido.id_producto');
        $this->db->join('persona', 'persona.id_persona = orden_pedido.id_persona');
        $query = $this->db->get();
        return $query->result();
    }

    public function contar_select_pedidos(){
        $this->db->select('*');
        $this->db->from('orden_pedido');
        $this->db->order_by('id_orden', 'desc');
        $this->db->join('persona', 'persona.id_persona = orden_pedido.id_persona');
        $query = $this->db->get();
        return $query->result();
    }

    public function select_pedidos($limit,$row){
        $this->db->select('*');
        $this->db->from('orden_pedido');
        $this->db->order_by('id_orden', 'desc');
        $this->db->join('persona', 'persona.id_persona = orden_pedido.id_persona');
        $this->db->limit($limit,$row);
        $query = $this->db->get();
        return $query->result();
    }

    public function filtrar_por_fecha($fechaIni, $fechaFin){
        $this->db->select('*');
        $this->db->from('orden_pedido');
        $this->db->where('Fecha BETWEEN "'. date('Y-m-d', strtotime($fechaIni)). '" and "'. date('Y-m-d', strtotime($fechaFin)).'"');
        $this->db->order_by('id_orden', 'desc');
        $this->db->join('persona', 'persona.id_persona = orden_pedido.id_persona');
        
        $query = $this->db->get();
        return $query->result();
    }

}