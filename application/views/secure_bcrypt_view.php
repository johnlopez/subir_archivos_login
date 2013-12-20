<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<title><?=$titulo?></title>
  </head>
	  <body>
	  	<h1>Crear un nuevo usuario seguro</h1>

	  		<?php if(isset($mensaje)):?>
			<h2><?= $mensaje ;?></h2>
			<?php endif;?>
	  		
	  		<?=form_open(base_url().'admin/register_bcrypt')?>
	  		<label>Username</label><input type="text" name="username" /><p><?=form_error('username')?></p>
	  		<label>Password</label><input type="password" name="password" /><p><?=form_error('password')?></p>

	  		<input type="hidden" name="token" value="<?=$token?>" />
	  		<input type="submit" name="submit" value="Guardar" />
	  		<?=form_close()?>

	  		<h2>Links</h2>
	  		<h4><?=br(1).anchor('admin/info', 'Listado Archivos Disponibles'); ?></h4>
	  		<h4><?=br(1).anchor('admin', 'Subir Proyecto de Titulo');	?></h4>
	  		<h4><?=br(1).anchor('admin/nuevousuario', 'Crear Nuevo Ususario'); ?></h4>
	  </body>
</html>