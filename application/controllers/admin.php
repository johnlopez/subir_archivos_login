<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('download', 'file', 'url', 'html', 'form'));
		$this->folder = 'uploads/';
		$this->load->model('files_model');
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
		{
			redirect(base_url().'login');
		}
		$data['titulo'] = 'Bienvenido Administrador';
		
		$this->load->view('admin_view', array('error' => ' ' ),$data);
	}

	public function do_upload() 
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
		{
			redirect(base_url().'login');
		}
		else
		{	

		$config['upload_path'] = $this->folder;
		$config['allowed_types'] = 'zip|rar|pdf|docx|txt';
		$config['remove_spaces']=TRUE;
		$config['max_size']	= '2048';

		$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
            $this->load->view('admin_view', $error);
		}
		else
		{
			
	        $data = array('upload_data' => $this->upload->data());
	        $file_info = $this->upload->data();        
	        $imagen = $file_info['file_name'];
	        $subir = $this->files_model->subir($imagen);      
	       
	        $data['imagen'] = $imagen;
	        

	        

	        $this->load->view('upload_success', $data);

		}

	}

   } 
//************ SE OBTIENEN LOS NOMBRES DE LOS ARCHIVOS ****************

public function info(){
	
	$files = get_filenames($this->folder, FALSE);
	
	if($files){
        $data['files']=$files;
             
        }else{
        	$data['files']=NULL;
        }
   $this->load->view('filenames',$data);	
 
}
//************ DESCARGA DE ARCHIVOS ***********************

public function downloads($name){
		 
	   $data = file_get_contents($this->folder.$name);  
       force_download($name,$data); 
	  
}


}
