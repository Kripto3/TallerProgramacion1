<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Producto_model extends CI_Model{
		
    public function __construct() {
        parent::__construct();
    }

    /**
    * Retorna todos los productos
    */
    function get_productos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna los productos segun su categoria 
    */
    function get_escritorios()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '100'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    function get_notebooks()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '101'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
    function get_Mouse()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '102'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
    function get_auriculares()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '103'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
    function get_teclados()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '104'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }    
    function get_monitores()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'categoria_id' => '105'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Inserta un producto
    */
    public function add_producto($data){
        $this->db->insert('productos', $data);
    }

    /**
    * Retorna todos los datos de un producto
    */
    function edit_producto($id){

        $query = $this->db->get_where('productos', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
    }

    /**
    * Actualiza los datos de un producto
    */
    function update_producto($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('productos', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Eliminación y activación logica de un producto
    */
    function estado_producto($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('productos', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Retorna todos los productos inactivos o eliminados
        */
    function not_active_productos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
    function get_ventas_cabecera()
    {
        $this->db->join('usuarios','usuarios.id = ventas_cabecera.usuario_id') ;   
        //select * from ventas_cabecera;
        $query = $this->db->get('ventas_cabecera', 'usuarios.nombre','usuarios.apellido');
       
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }
    
        function get_ventas_detalle($id)
    {
        $this->db->join('productos','productos.id = ventas_detalle.producto_id');   

        //select * from ventas_detalle;
        $query = $this->db->get_where('ventas_detalle', array('venta_id' => $id));
       
          
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }

    	/**
		 * Llamar categorias
		 */

		 function llamar_categorias()
		 {
			$this->db->select('*');
			$this->db->from('categorias');
            
            $query = $this->db->get();
            return $query->result();
		 }	
} 