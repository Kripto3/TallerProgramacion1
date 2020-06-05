<?php
    class Cliente_model extends CI_Model{
        public function guardar_cliente($apellido,$nombre,$password,$direccion,$dni,$email){
            $data = array(
                'apellido'=>$apellido,
                'nombre'=>$nombre,
                'password'=>$password,
                'direccion'=>$direccion,
                'dni'=>$dni,
                'email'=>$email,
                'perfil'=> '2'
            );
                $this->db->insert('persona', $data);
        }
    }