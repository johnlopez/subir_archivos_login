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
			<?=@$error?>
<span><?php echo validation_errors(); ?></span>
<?=form_open_multipart(base_url().'admin/do_upload');
//aqui se procesará nuestro formulario, controlador comentarios, función insertar_comentarios
//creamos los arrays que compondran nuestro formulario
//primer array con el input que se llamará nombre y será donde introduciremos el mismo
    $titulo = array(
        'name' => 'titulo',
        'id' => 'titulo',
        'size' => '50',
        'style' => 'width:50%',
        'value' => set_value('titulo') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
    );
    $autor = array(
        'name' => 'autor',
        'id' => 'autor',
        'size' => '50',
        'style' => 'width:50%',
        'value' => set_value('autor') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
    );
    $descripcion = array(
        'name' => 'descripcion',
        'id' => 'descripcion',
        'size' => '50',
        'style' => 'width:50%',
        'value' => set_value('descripcion')
    );
 
//el cuarto...(campo mensaje)
    $resumen = array(
        'name' => 'resumen',
        'id' => 'resumen',
        'rows' => 10,
        'cols' => 40,
        'value' => set_value('resumen')
    );
//el segundo array(campo email)
 
   
    $userfile = array(
        'name' => 'userfile',
        'id' => 'userfile',
        'rows' => 10,
        'cols' => 40,
        'value' => set_value('userfile')
    );
 
//el botón submit de nuestro formulario
    $submit = array(
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Subir Tesis',
        'title' => 'Subir Tesis'
    );
    ?>
<?php
echo form_fieldset('Ingreso Tesis');
?>
            <table>
                <tr>
                    <td>
                        <?php echo form_label('Titulo: '); ?>
                    </td>
                    <td>
                        <?php echo form_input($titulo); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo form_label('Autor: '); ?>
                    </td>
                    <td>
                        <?php echo form_input($autor); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo form_label('Descripcion: '); ?>
                    </td>
                    <td>
                        <?php echo form_input($descripcion); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo form_label('Resumen: '); ?>
                    </td>
                    <td>
                        <?php echo form_textarea($resumen); ?>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <?php echo form_label('Archivo: '); ?>
                    </td>
                    <td>
                        <?php echo form_upload($userfile); ?>
                    </td>
                </tr>
                
                <tr>
                    <td>
 
                    </td>
                    <td>
<!--con la funcion validation_errors ci nos muestra los errores al pulsar el botón submit, la podemos colocar donde queramos-->
                  <font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"><?php echo validation_errors(); ?></font>
                    </td>
                </tr>
                <tr>
                    <td>
 
                    </td>
                    <td>
                        <?php echo form_submit($submit);
                        //nuestro boton submit
                        ?>
                    </td>
                </tr>
                <?php
                echo form_close();
                ?>
        </table>
        <?php
               echo form_fieldset_close();
       ?>


			
	
			<h5><?=br(1).anchor('admin/info', 'Listado de archivos para descargar'); ?></h5>
            <h5><?=br(1).anchor('admin/nuevousuario', 'crear nuevo ususario'); ?></h5>

			
		</div>


	</body>
</html>