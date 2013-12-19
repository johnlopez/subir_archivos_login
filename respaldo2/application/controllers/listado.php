<?php

class Listado extends CI_Controller {

public function __construct() {
		parent::__construct();
		$this->load->helper(array('download', 'file', 'url', 'html', 'form'));
		$this->folder = 'uploads/';
		$this->load->model('files_model');

		}


	

//************ SE OBTIENEN LOS NOMBRES DE LOS ARCHIVOS ****************

//************ DESCARGA DE ARCHIVOS ***********************

public function downloads($name){
		 
	   $data = file_get_contents($this->folder.$name);  
       force_download($name,$data); 
	  
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
            redirect('../listado', 'refresh');
        } else {

            $this->load->view('listado_view'); //display search form
        }
    }


    public function index()
	{
		$files = get_filenames($this->folder, FALSE);
	
		if($files){
        $data['files']=$files;
             
        }else{
        	$data['files']=NULL;
        }

        $buscador = $this->session->userdata('buscando');
        $pages = 10; //Número de registros mostrados por páginas
        $this->load->library('pagination'); //Cargamos la librería de paginación
        $config['base_url'] = base_url() . 'listado/pagina'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
        $config['total_rows'] = $this->files_model->peliculas($buscador); //calcula el número de filas
        $config['total_rosas'] = $this->files_model->largototal(); //calcula el número de filas
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
        $data["peliculas"] = $this->files_model->total_posts_paginados($buscador, $config['per_page'], $this->uri->segment(3));
        //$data["largo"] = $this->files_model->largototal();
        $data["elementos"] = $this->files_model->elementostotales($config['per_page'], $this->uri->segment(3));
        //cargamos la vista y el array data


        $this->load->view('listado_view',$data);	
		
	}





}