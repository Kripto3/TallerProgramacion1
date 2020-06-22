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
       // $query = $this->db->get_where('productos', array('eliminado' => 'NO'));
        $this->db->select('*');
        $this->db->from('productos');
        $this->db->join('categorias','categorias.id = productos.categoria_id');
        $this->db->where('eliminado','NO');
        $query = $this->db->get();
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
        $this->db->select('*');
        $this->db->from('productos');
        $this->db->join('categorias','categorias.id = productos.categoria_id');
        $this->db->where('eliminado','SI');
        $query = $this->db->get();
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
    function get_ventas_cabecera()
    {  
        $this->db->select('*');
        $this->db->from('ventas_cabecera');
        $this->db->join('usuarios','usuarios.id_usuario = ventas_cabecera.usuario_id');
        $this->db->join('ventas_detalles','ventas_detalles.venta_id = ventas_cabecera.id_venta');
        $this->db->join('productos','productos.id = ventas_detalles.producto_id');
        $this->db->join('categorias','categorias.id = productos.categoria_id');
        $this->db->order_by('fecha', 'desc');
        $queryList = $this->db->get();
        // print_r($queryList->result());
        if($queryList->num_rows()>0) {
            return $queryList;
        } else {
            return FALSE;
        }
    }
    //optiene elk detalle de la venta poara el ADMIN
    function get_ventas_detalle($id)
    {
        $this->db->select('*');
        $this->db->from('ventas_cabecera');
        $this->db->join('usuarios','usuarios.id_usuario = ventas_cabecera.usuario_id');
        $this->db->join('ventas_detalles','ventas_detalles.venta_id = ventas_cabecera.id_venta');
        $this->db->join('productos','productos.id = ventas_detalles.producto_id');
        $this->db->join('categorias','categorias.id = productos.categoria_id');
        $this->db->where('usuario_id', $id);
        $this->db->order_by('fecha', 'desc');
  
        $queryList = $this->db->get();
       
        if($queryList->num_rows()>0) {
            return $queryList;
        } else {
            return FALSE;
        }
    }
    //obtiene el detalle de la venta resumida
    function get_detalles_venta($id)
    {

        $this->db->select('*');
        $this->db->from('ventas_cabecera');
        $this->db->join('usuarios','usuarios.id_usuario = ventas_cabecera.usuario_id');
        $this->db->join('ventas_detalles','ventas_detalles.venta_id = ventas_cabecera.id_venta');
        $this->db->join('productos','productos.id = ventas_detalles.producto_id');
        
        $this->db->where('id_venta', $id);
 
        $queryList = $this->db->get();
        
        if($queryList->num_rows()>0) {
            return $queryList;
        } else {
            return FALSE;
        }
    }
    //Retorna el stock del producto buscado por id
    public function get_stock($id=NULL)
    {
        $this->db->select('stock');
        $this->db->from('productos');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query->stock;
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