<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Files_model extends CI_Model {
 
    public function construct() {
        parent::__construct();
    }
    
    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    function subir($imagen)
    {
        $data = array(
            'ruta' => $imagen // ruta base de datos // imagen del controler
        );
        return $this->db->insert('imagenes', $data);
    }
}