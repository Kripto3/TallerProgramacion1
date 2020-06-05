<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Pedido_controller extends CI_Controller {
        public function guardar_pedido(){
            if($this->session->userdata('login')){
                if($this->stock_disponible() == TRUE){
                $orden_pedido = array(
            'id_persona' => $this->session->userdata('id_usuario'),
            'Fecha' => date('Y-m-d'),
            'Total' => $this->cart->total()
            );
            $this->load->model('pedidos_model');
            $id_orden = $this->pedidos_model->guardar_orden_pedido($orden_pedido);
            if ($cart = $this->cart->contents()):
                
            foreach ($cart as $item):
            $detalle_pedido = array(
            'orden_id' => $id_orden,
            'id_producto' => $item['id'],
            'cantidad' => $item['qty'],
            'precio' => $item['price']
            );
            $this->pedidos_model->guardar_detalle_pedido($detalle_pedido);
            $this->load->model('producto_model');
            $stock = $this->producto_model->select_productos_stock($item['id']);
            $nuevoStock = ($stock - $item[qty]);
            $data = array(
                'stock' => $nuevoStock
            );
            $this->producto_model->actualizar_producto($data,$item['id']);
            endforeach;
            endif;
            
            $this->cart->destroy();
            
            redirect('carrito');
            }
            else{
                echo "<script type=\"text/javascript\">alert('No se puede realizar la compra por exceder el stock disponible'); </script>";
                redirect('carrito');
            }

        }
        else{

            redirect('carrito');
        }
        }

        public function pedidos(){
            $this->load->model('pedidos_model');
            $this->load->library('pagination');
		$config['base_url'] = base_url().'pedidos';
		$config['first_link'] = 'Primero';
		$config['prev_link'] = 'Anterior';
		$config['last_link'] = 'Ultimo';
		$config['next_link'] = 'Siguiente';

		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-link">';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active page-link"><span>';
		$config['cur_tag_close'] = '<span></span></span></li>';

		$config['prev_tag_open'] = '<li class="page-link">';
		$config['prev_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li class="page-link">';
		$config['next_tag_close'] = '</li>';

		$config['total_rows'] = count ($this->pedidos_model->contar_select_pedidos());

		$config['per_page'] = 2;
		$config['num_links'] = 2;
		$config['uri_segment'] = 2;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(2);
		$data['pedidos'] = $this->pedidos_model->select_pedidos(2,$page);
            $this->load->view('plantilla/inicio');
            $this->load->view('plantilla/navegacion_top');
            $this->load->view('plantilla/navegacion_admin');
            $this->load->view('plantilla/pedidos_view', $data);
            $this->load->view('plantilla/footer');
        }

        public function ver_pedido($id=NULL){
            $this->load->model('pedidos_model');
            $data['pedido'] = $this->pedidos_model->select_pedido_id($id);
            $this->load->view('plantilla/inicio');
            $this->load->view('plantilla/navegacion_top');
            $this->load->view('plantilla/navegacion_admin');
            $this->load->view('plantilla/ver_pedido_view', $data);
            $this->load->view('plantilla/footer');
        }

        public function filtrar_por_fecha(){
            $fechaIni = $this->input->post('fechaIni');
            $fechaFin = $this->input->post('fechaFin');
            $this->load->model('pedidos_model');
            $data['pedidos'] = $this->pedidos_model->filtrar_por_fecha($fechaIni, $fechaFin);
            $this->load->view('plantilla/inicio');
            $this->load->view('plantilla/navegacion_top');     
            $this->load->view('plantilla/navegacion_admin');
            $this->load->view('plantilla/pedidos_view', $data);
            $this->load->view('plantilla/footer');
        }

        public function stock_disponible(){
            $cart = $this->cart->contents();
            $this->load->model('producto_model');
            foreach ($cart as $item){
                $stock = $this->producto_model->select_productos_stock($item['id']);
                if($stock < $item['qty']){
                    return FALSE;
                }
            }
            return TRUE;
        }
}