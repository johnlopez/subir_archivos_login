<?php

class Listado extends CI_Controller {

public function __construct() {
		parent::__construct();
		$this->load->helper(array('download', 'file', 'url', 'html', 'form'));
		$this->folder = 'uploads/';
		$this->load->library('form_validation');
		$this->load->model('files_model');


		}


	
public function index()
	{
		$files = get_filenames($this->folder, FALSE);
	
		if($files){
		$data = array('titulo' => 'Buscador', 
					  'resultados' => $this->busqueda(),
					  'files'=>$files
					  );
             
        }else{
    		$data = array('titulo' => 'Buscador', 
				  'resultados' => $this->busqueda(),
				  'files'=>NULL
				  );
        	
        }

               
		$buscador = $this->session->userdata('buscando');
        $pages = 2; //Número de registros mostrados por páginas
        $this->load->library('pagination'); //Cargamos la librería de paginación
        $config['base_url'] = base_url() . 'peliculas/pagina'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
        $config['total_rows'] = $this->peliculas_model->peliculas($buscador); //calcula el número de filas
        $config['per_page'] = $pages; //Número de registros mostrados por páginas
        $config['num_links'] = 20; //Número de links mostrados en la paginación
        $config['first_link'] = 'Primera'; //primer link
        $config['last_link'] = 'Última'; //último link
        $config['next_link'] = 'Siguiente'; //siguiente link
        $config['prev_link'] = 'Anterior'; //anterior link
        $config['full_tag_open'] = '<div id="paginacion">'; //el div que debemos maquetar si queremos
        $config['full_tag_close'] = '</div>'; //el cierre del div de la paginación
        $this->pagination->initialize($config); //inicializamos la paginación
        //el array con los datos a paginar ya preparados
        $data["peliculas"] = $this->peliculas_model->total_posts_paginados($buscador, $config['per_page'], $this->uri->segment(3));

        //cargamos la vista y el array data


        $this->load->view('listado_view',$data);	
		
	}

//************ SE OBTIENEN LOS NOMBRES DE LOS ARCHIVOS ****************

//************ DESCARGA DE ARCHIVOS ***********************

public function downloads($name){
		 
	   $data = file_get_contents($this->folder.$name);  
       force_download($name,$data); 
	  
}



	
	//aquí es donde hacemos toda la búsqueda del buscador
	public function busqueda()
	{
		
		if($this->input->post('buscar'))
		{
			
			//limpiamos los campos del formulario, no necesitamos validar
			$this->form_validation->set_rules('titulo', 'titulo', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('resumen', 'resumen', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('autor', 'autor', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('descripcion', 'descripcion', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('fecha', 'fecha', 'trim|max_length[40]|xss_clean');		 

	        $this->form_validation->set_rules('sector', 'sector', 'trim|xss_clean');
	 		$this->form_validation->set_rules('poblacion', 'poblacion', 'trim|xss_clean');
				
			//los campos del formulario deben tener el mismo nombre
			//que los de la base de datos a buscar, esto luego lo 
			//recorremos para comprobar como vienen				
			$campos = array('sector', 'poblacion', 'resumen','titulo','autor','descripcion','fecha');
			
			//envíamos los datos al modelo para hacer la búsqueda
			$resultados = $this->files_model->nueva_busqueda($campos);
			
			if($resultados !== FALSE)
			{
				
				return $resultados;
				
			}
			
		}
		else
		{
			
			//limpiamos los campos del formulario, no necesitamos validar
			$this->form_validation->set_rules('titulo', 'titulo', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('resumen', 'resumen', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('autor', 'autor', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('descripcion', 'descripcion', 'trim|max_length[40]|xss_clean');		 
			$this->form_validation->set_rules('fecha', 'fecha', 'trim|max_length[40]|xss_clean');		 

	        $this->form_validation->set_rules('sector', 'sector', 'trim|xss_clean');
	 		$this->form_validation->set_rules('poblacion', 'poblacion', 'trim|xss_clean');
				
			//los campos del formulario deben tener el mismo nombre
			//que los de la base de datos a buscar, esto luego lo 
			//recorremos para comprobar como vienen				
			$campos = array('sector', 'poblacion', 'resumen','titulo','autor','descripcion','fecha');
			
			//envíamos los datos al modelo para hacer la búsqueda
			$resultados = $this->files_model->nueva_busqueda($campos);
			
			if($resultados !== FALSE)
			{
				
				return $resultados;
				
			}
			
		}

		
	}

	//a través de jquery llenamos el autocompletado
	public function poblaciones()
    {
        //si es una petición ajax y existe una variable post
        //llamada info dejamos pasar
        if($this->input->is_ajax_request() && $this->input->post('info'))
        {
 
            $abuscar = $this->security->xss_clean($this->input->post('info'));
 
            $search = $this->files_model->buscador_poblacion($abuscar);
 
            //si search es distinto de false significa que hay resultados
            //y los mostramos con un loop foreach
            if($search !== FALSE)
            {
 
                foreach($search as $fila)
                {
                ?>
 
                    <p><a title="<?php echo $fila->poblacion ?>" href="" 
                    	onclick="$('.poblacion').val($(this).attr('title')); ">
                    	<?php echo $fila->poblacion ?>
                    </a></p>
 
                <?php
                }
 
            //en otro caso decimos que no hay resultados
            }else{
            ?>
 
                <p><?php echo 'No hay resultados' ?></p>
 
            <?php
            }
 
        }
 
    }

    //*********** Ver Detalles de un archivos*************
public function detalles(){	

   $files = get_filenames($this->folder, FALSE);
	
		if($files){
		$data = array('titulo' => 'Buscador', 
					  'resultados' => $this->busqueda(),
					  'files'=>$files
					  );
             
        }else{
    		$data = array('titulo' => 'Buscador', 
				  'resultados' => $this->busqueda(),
				  'files'=>NULL
				  );
        	
        }

        
        
   $this->load->view('detalles_view',$data);	
 
}

	//con esta función validamos y protegemos el buscador
    public function validar() {
        $this->form_validation->set_rules('buscando', 'buscador', 'required|min_length[2]|max_length[20]|trim|xss_clean');
        $this->form_validation->set_message('required', 'El %s no puede ir vacío!');
        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
        $this->form_validation->set_message('max_length', 'El %s no puede tener más de %s carácteres');
        if ($this->form_validation->run() == TRUE) {

            $buscador = $this->input->post('buscando');
            $this->session->set_userdata('buscando', $buscador);
            redirect('../peliculas', 'refresh');
        } else {

            $this->load->view('buscador_view'); //display search form
        }
    }



}