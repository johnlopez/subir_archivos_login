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

		$this->load->library('bcrypt');//cargamos la librería
		
		$this->load->library(array('form_validation','session'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
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
			//++++++VALIDACIONES++++++++++++++//
			$this->form_validation->set_rules('titulo','titulo','trim|required|xss_clean|max_lenght[50]|min_length[2]');
	        $this->form_validation->set_rules('autor','autor','trim|required|xss_clean|max_lenght[50]|min_length[2]');
	        $this->form_validation->set_rules('descripcion','descripcion','trim|required|xss_clean|max_lenght[250]|min_length[2]');
	        $this->form_validation->set_rules('resumen','resumen','trim|required|xss_clean');


	        $this->form_validation->set_message('required', 'Campo %s es obligatorio');
	        //validamos el email con la función de ci valid_email
	        $this->form_validation->set_message('valid_email', 'El %s no es v&aacute;lido');
	        //comprobamos que se cumpla el mínimo de caracteres introducidos
	        $this->form_validation->set_message('min_length', 'Campo %s debe tener al menos %s car&aacute;cteres');
	        //comprobamos que se cumpla el máximo de caracteres introducidos
	        $this->form_validation->set_message('max_length', 'Campo %s debe tener menos %s car&aacute;cteres');
	        //++++++VALIDACIONES++++++++++++++//

			$config['upload_path'] = $this->folder;
			$config['allowed_types'] = 'pdf';
			$config['remove_spaces']=TRUE;
			$config['max_size']	= '1*1024';

			$this->form_validation->set_message('max_size', 'Archivo %s Demasiado Grande');

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
	            $this->load->view('admin_view', $error);
			}
			else
			{	
				//++++++Pasar VALORES DE la VISTA ++++//
				$titulo = $this->input->post('titulo');
				$autor = $this->input->post('autor');    
	            $descripcion = $this->input->post('descripcion');                            
	            $resumen = $this->input->post('resumen');
	           	

	            date_default_timezone_set("Chile/Continental");
	            $fecha = date('Y-m-d');
	            $hora= date("H:i:s");


	           	//++++++Pasar VALORES DE la VISTA ++++//
	        
		        $data = array('upload_data' => $this->upload->data());
		        $file_info = $this->upload->data();        
		        $imagen = $file_info['file_name'];
		        
		        //++++++Manda datos al Modelo++++++//
		        $subir = $this->files_model->subir($titulo,$imagen,$autor,$descripcion,$resumen,$fecha,$hora);      
		        //++++++Manda datos al Modelo++++++//

		        $data['imagen'] = $imagen;
		        

		        

		        $this->load->view('upload_success', $data);

			}
		}
	} 
//************ SE OBTIENEN LOS NOMBRES DE LOS ARCHIVOS ****************

	public function info(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
		{
			redirect(base_url().'login');
		}
		else
		{
		
		$files = get_filenames($this->folder, FALSE);
		
		if($files){
	        $data['files']=$files;
	             
	        }else{
	        	$data['files']=NULL;
	        }
			$this->load->view('filenames',$data);
		}	 
	}
//************ DESCARGA DE ARCHIVOS ***********************

	public function downloads($name){
			 
		   $data = file_get_contents($this->folder.$name);  
	       force_download($name,$data); 
		  
	}
//************** registrar nuevo usuario con ecriptacion password************

	public function nuevousuario()
	{	
		$data['titulo'] = 'Asegurar los passwords en codeigniter con Bcrypt';
		$data['token'] = $this->token();
		$this->load->view('secure_bcrypt_view',$data);	
	}

	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}


	public function register_bcrypt()
	{
		//si existe la clave token oculta en el formulario y es igual
		// que la generada con el método token dejamos pasar
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
			$this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
	       	$this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|max_length[150]|xss_clean');
	 
	        //lanzamos mensajes de error si es que los hay
	        $this->form_validation->set_message('required', 'El %s es requerido');
	        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
	        $this->form_validation->set_message('max_length', 'El %s debe tener al menos %s carácteres');
			
			//si el proceso falla mostramos errores
			if($this->form_validation->run() == FALSE)
			{
				$this->nuevousuario();
				
			//en otro caso procesamos los datos
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				$hash = $this->encrypt->sha1($password);
				
				//comprobamos si el password se ha encriptado
			
				    $insert_password = $this->files_model->save_pass($username,$hash);
					if($insert_password)
					{
						redirect(base_url().'admin');
					}
			
			}
		}
	}
}
