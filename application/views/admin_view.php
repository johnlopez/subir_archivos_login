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
			
			<?=heading('Suba un archivo zip, rar, pdf, docx o txt', 3);?>
			<?=$error;?>
			<?=form_open_multipart('admin/do_upload');?>
			<input type="file" name="userfile" size="20" />
			<br />
			<input type="submit" value="Subir Archivo" />
			<?=form_close()?>
			<h5><?=br(1).anchor('admin/info', 'Listado de archivos para descargar'); ?></h5>

			
		</div>


	</body>
</html>