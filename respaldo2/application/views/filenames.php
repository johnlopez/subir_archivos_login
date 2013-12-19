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
	