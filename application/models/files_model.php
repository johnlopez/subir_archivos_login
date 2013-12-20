<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Files_model extends CI_Model {
 
    public function construct() {
        parent::__construct();
    }
    
    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    function subir($titulo,$imagen,$autor,$descripcion,$resumen,$fecha,$hora)
    {
        $data = array(
            'titulo' => $titulo,
            'autor' => $autor,
            'descripcion' => $descripcion,
            'resumen' => $resumen,
            'fecha' => $fecha,
            'hora' => $hora,            
            'ruta' => $imagen // ruta base de datos // imagen del controler
        );
        return $this->db->insert('proyectotitulo', $data);
    }

    public function save_pass($username,$hash)
    {
        $data = array(
            'username'      =>      $username,
            'password'      =>      $hash,
            'perfil'        => 'administrador'
        );
        return $this->db->insert('users',$data);
    }
    
    public function login($username,$hash)
    {
        $this->db->where('username',$username);
        $query = $this->db->get('users');
        if($query->num_rows() == 1)
        {
            $user = $query->row();

            $pass = $user->password;

            if($this->bcrypt->check_password($hash, $pass))
            {
                return $query->row();
            }else{
            $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
            redirect(base_url().'secure_bcrypt/login','refresh');
            }
        }
    }

    public function very_user($username)
    {
        $consulta = $this->db->get_where('users', array('username' => $username));
        if ($consulta->num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}