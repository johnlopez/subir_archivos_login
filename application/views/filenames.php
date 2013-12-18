<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/960.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/text.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/reset.css" media="screen" />
		<title>Subir Archivos</title>
	</head>
	<body>
		<div class="container_12">
			<div class="grid_12">
				<h1 style="text-align: center">Bienvenido de nuevo <?=$this->session->userdata('perfil')?></h1>
				<?=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?>
			</div>
		</div>

		<div>


<?php
 if($files){
 	echo heading('Archivo(s) disponible(s) para descargar', 3);

	  foreach($files as $file){
         
		  echo anchor('admin/downloads/'.$file, $file).br(1); 
                   
	  }
echo br(1).anchor('admin', 'Subir otro archivo'); 	
 }else{

echo heading('No hay archivos para descargar', 3).anchor('admin', 'Subir un Archivo');

 } 

 ?>
	
	</div>


	</body>
</html>