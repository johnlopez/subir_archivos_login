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

    //obtenemos el total de filas para hacer la paginación del buscador
    function peliculas($buscador) {
        $this->db->like('autor', $buscador);
        $consulta = $this->db->get('proyectotitulo');
        return $consulta->num_rows();
    }


    //obtenemos todos los posts a paginar con la función
    //total_posts_paginados pasando lo que buscamos, la cantidad por página y el segmento
    //como parámetros de la misma
    function total_posts_paginados($buscador, $por_pagina, $segmento) {
        $this->db->like('autor', $buscador);
        $consulta = $this->db->get('proyectotitulo', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
            $data[] = $fila;
            }
            return $data;
        }
    }

    function largototal() {
        $this->db->like('autor');
        $consulta = $this->db->get('proyectotitulo');
        return $consulta->num_rows();
    }

    function elementostotales($por_pagina, $segmento) {
        $this->db->like('autor');
        $consulta = $this->db->get('proyectotitulo', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
            $data[] = $fila;
            }
            return $data;
        }
    }







}