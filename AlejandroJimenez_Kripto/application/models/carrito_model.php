<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carrito_model extends CI_Model {

	/*
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }
       
	public function insert_venta($data)
	{
		$this->db->insert('ventas_cabecera', $data);
		$id = $this->db->insert_id();
		//isset — Determina si una variable está definida y no es NULL
		return (isset($id)) ? $id : FALSE;
	}
	
	public function insert_venta_detalle($data)
	{
		$this->db->insert('ventas_detalle', $data);
	}
       
}