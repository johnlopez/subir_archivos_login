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

    //hacemos la consulta a la base de datos para
    //mostrar los datos de nuestro buscador
    public function buscador_poblacion($abuscar)
    {
        //usamos after para decir que empiece a buscar por
        //el principio de la cadena
        //ej SELECT poblacion from poblacion
        //WHERE poblacion LIKE '%$abuscar' limit 12
        $this->db->select('poblacion');
 
        $this->db->like('poblacion',$abuscar,'after');
 
        $resultados = $this->db->get('poblacion', 12);
 
        //si existe algún resultado lo devolvemos
        if($resultados->num_rows() > 0)
        {
 
            return $resultados->result();
 
        //en otro caso devolvemos false
        }else{
 
            return FALSE;
 
        }
 
    }
    
    //hacemos la consulta a la base de datos para
    //mostrar los datos de nuestro buscador
    public function nueva_busqueda($campos)
    {
        
        //definimos si descripción viene vacio o no para utilizar el operador and or
        $and_or = $this->input->post('resumen') != '' ? ' AND ' : ' OR ';
        $and_or = $this->input->post('titulo') != '' ? ' AND ' : ' OR ';
        $and_or = $this->input->post('autor') != '' ? ' AND ' : ' OR ';
        $and_or = $this->input->post('descripción') != '' ? ' AND ' : ' OR ';
        $and_or = $this->input->post('fecha') != '' ? ' AND ' : ' OR ';
            
        $condiciones = array();
        
        //recorremos los campos del formulario
        foreach($campos as $campo){
            
            //si llegan las variables y no están vacias
            if($this->input->post($campo) && $this->input->post($campo) != '') 
            {
                
                //definimos la condición para hacer la búsqueda de los campos y de 
                //esta forma podemos hacer uso del array condiciones fuera del loop
                $condiciones[] = "$campo LIKE '%" . $this->input->post($campo) . "%'";
                
            }
            
        }
            
        //la consulta base a la que concatenaremos la búsqueda
        $sql = "SELECT * FROM proyectotitulo ";
        
        //si existen condiciones entramos
        if(count($condiciones) > 0) 
        {
            
            //aquí creamos la condición y la concatenamos a $query
            $sql .= "WHERE " . implode ($and_or, $condiciones);
            
        }

        //asignamos a $query la consulta final
        $query = $this->db->query($sql);
        
        //con la siguiente línea podéis ver lo que arroja la 
        //consulta escogiendo varios campos, es bueno entenderlo
        //var_dump($sql); exit;
        
        //si se ha encontrado algo 
        if($query->num_rows() > 0)
        {
                
            return $query->result();
                
        }else{
            
            return FALSE;
            
        }
        
    }


    function filas()
    {
        $consulta = $this->db->get('proyectotitulo');
        return  $consulta->num_rows() ;
    }
        
    //obtenemos todas las provincias a paginar con la función
    //total_posts_paginados pasando la cantidad por página y el segmento
    //como parámetros de la misma
    function total_paginados($por_pagina,$segmento) 
        {
            $consulta = $this->db->get('proyectotitulo',$por_pagina,$segmento);
            if($consulta->num_rows()>0)
            {
                foreach($consulta->result() as $fila)
        {
            $data[] = $fila;
        }
                    return $data;
            }
    }

    //obtenemos el total de filas para hacer la paginación del buscador
    function peliculas($buscador) {
        $this->db->like('autor', $buscador);
        $consulta = $this->db->get('posts');
        return $consulta->num_rows();
    }

    //obtenemos todos los posts a paginar con la función
    //total_posts_paginados pasando lo que buscamos, la cantidad por página y el segmento
    //como parámetros de la misma
    function total_posts_paginados($buscador, $por_pagina, $segmento) {
        $this->db->like('autor', $buscador);
        $consulta = $this->db->get('posts', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
            $data[] = $fila;
        }
            return $data;
        }
    }
    

}