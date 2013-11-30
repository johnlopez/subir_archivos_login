<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<div >
	<?php
 		if($files){
 		echo heading('Archivo(s) disponible(s) para descargar', 3);

		  	foreach($files as $file){         
				echo anchor('admin/downloads/'.$file, $file).br(1);            
		  	}
		}
		else{
			echo heading('No hay archivos para descargar ', 3).anchor('admin', 'Subir un Archivo');
		}

	?>
	</div>

	<div >
	<?=anchor('login/', 'Registrarse'); ?>
	</div>

</body>
</html>



