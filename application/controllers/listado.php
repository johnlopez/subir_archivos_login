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

	        $this->form_validation->set_rules('sector', 'sector', 'trim|xss_clean');
	 		$this->form_validation->set_rules('poblacion', 'poblacion', 'trim|xss_clean');
				
			//los campos del formulario deben tener el mismo nombre
			//que los de la base de datos a buscar, esto luego lo 
			//recorremos para comprobar como vienen				
			$campos = array('sector', 'poblacion', 'resumen','titulo');
			
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

	        $this->form_validation->set_rules('sector', 'sector', 'trim|xss_clean');
	 		$this->form_validation->set_rules('poblacion', 'poblacion', 'trim|xss_clean');
				
			//los campos del formulario deben tener el mismo nombre
			//que los de la base de datos a buscar, esto luego lo 
			//recorremos para comprobar como vienen				
			$campos = array('sector', 'poblacion', 'resumen','titulo');
			
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

}