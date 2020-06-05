<?php

class Producto_model extends CI_Model
{
    //Agrega un registro a la tabla producto
    public function guardar_producto($data){
        $this->db->insert('producto', $data);
    }

    //Actualiza los datos del producto buscado por id
    public function actualizar_producto($data, $id){
            $this->db->where('id_producto',$id);
            $this->db->update('producto', $data);
    }

    //Retorna el stock del producto buscado por id
    public function select_productos_stock($id=NULL){
        $this->db->select('stock');
        $this->db->from('producto');
        $this->db->where('id_producto', $id);
        $query = $this->db->get()->row();
        return $query->stock;
    }
    
    //Retorna las consolas existentes
    public function select_consola(){
        $query = $this->db->get('consola');
        return $query->result();
    }

    //Retorna los tipos de productos existentes
    public function select_tipo(){
        $query = $this->db->get('tipo');
        return $query->result();
    }


    public function inicio_articulos(){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('tipo', 2);
        $this->db->where('estado', 1);
        $query = $this->db->get();
        return $query->result();
    }
    //Trae todos los productos de la base de datos
    public function select_productos(){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->join('consola', 'consola.id_consola = producto.consola');
        $this->db->join('tipo', 'tipo.id_tipo = producto.tipo');
        $query = $this->db->get();
        return $query->result();
    }

    //Cuenta la cantidad de productos del tipo Consola
    public function contar_productos_consola(){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('tipo', 2);
        $this->db->where('estado', 1);
        $query = $this->db->get();

        return $query->result();
    }
    //Cuenta la cantidad de productos del tipo Accesorios
    public function contar_productos_accesorios(){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('tipo', 3);
        $this->db->where('estado', 1);
        $query = $this->db->get();
        return $query->result();
    }

    //Cuenta la cantidad de productos del tipo Juegos de la consola correspondiente
    public function contar_productos_juegos($consola){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('tipo', 1) ;
        $this->db->where('consola', $consola);
        $this->db->where('estado', 1);
        $query = $this->db->get();

        return $query->result();
    }

    //Retorna el producto al que corresponde el id
    public function select_productos_id($id){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('id_producto', $id);
        $query = $this->db->get();
        return $query->result();
    }

    //Metodo para la paginacion de productos de tipo Juegos
    public function select_productos_juegos($limit,$row,$consola){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('tipo', 1) ;
        $this->db->where('consola', $consola) ;
        $this->db->where('estado', 1);
        $this->db->limit($limit,$row);
        $query = $this->db->get();

        return $query->result();
    }

    //Metodo para la paginacion de productos de tipo Consola
    public function select_productos_consola($limit,$row){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('tipo', 2);
        $this->db->where('estado', 1);
        $this->db->limit($limit,$row);
        $query = $this->db->get();
        return $query->result();
    }

    //Metodo para la paginacion de productos de tipo Accesorios
    public function select_productos_accesorios($limit,$row){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('tipo', 3);
        $this->db->where('estado', 1);
        $this->db->limit($limit,$row);
        $query = $this->db->get();
        return $query->result();
    }
}