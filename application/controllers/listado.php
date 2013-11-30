<?php

class Listado extends CI_Controller {

public function __construct() {
		parent::__construct();
		$this->load->helper(array('download', 'file', 'url', 'html', 'form'));
		$this->folder = 'uploads/';
		$this->load->model('files_model');

		}


	
public function index()
	{
		$files = get_filenames($this->folder, FALSE);
	
	if($files){
        $data['files']=$files;
             
        }else{
        	$data['files']=NULL;
        }
        $this->load->view('listado_view',$data);	
		
	}

//************ SE OBTIENEN LOS NOMBRES DE LOS ARCHIVOS ****************

//************ DESCARGA DE ARCHIVOS ***********************

public function downloads($name){
		 
	   $data = file_get_contents($this->folder.$name);  
       force_download($name,$data); 
	  
}
}