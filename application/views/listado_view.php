
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= $titulo;?></title>
<!--The below script Makes IE understand the new html5 tags are there and applies our CSS to it -->
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]
<link rel="stylesheet" href="style.css" />
--> 

<style type="text/css">

body {
    background:#fbfdf6;
    font-family:"Myriad Pro", Myriad, Helvetica, Arial, sans-serif;
    font-size:90%;
    color:#968765;
    margin:20px auto;
    text-align:center;
    line-height:1.4em;
    width:960px;
}

h1, h2, h3, h4, h5, h6 {
    font-family:Helvetica, Arial, sans-serif;
    font-size:1.5em;
    letter-spacing:-0.06em;
    text-transform:uppercase;
    font-weight:normal;
}

a:link, a:visited {
    font-family:georgia, times, serif;
    font-weight:bold;
    color:#4169e1;
    text-decoration:none;
    border-bottom:1px solid #91476c;
    font-size:.8em;
}

a:hover {
    border-bottom:1px dotted #91476c;
}

a img {
    border:none;
}

header, section, article, footer {
    padding:10px 20px 20px;
    margin:10px;
    border:1px solid #e7e2d7;
    border-radius:8px;
    -webkit-border-radius:.8em;
    -moz-border-radius:.8em;
    background:#fff url(sprites.png) repeat-x 0px -120px;
}

header {
    display:block;
    position:relative;
    text-align:left;
}

header img {
    position:absolute;
    left:20px;
    top:18px;
}

header h1 {
    font-size:2.3em;
    text-transform:none;
    letter-spacing:0em;
    text-align:center;
}

header h2 {
    margin:-10px 0px 20px;
    font-size:1.3em;
    text-align:center
}

nav {
    text-align:center;
    display:block;
}

nav ul {
    padding:0px;
    list-style-type:none;
    display:inline;
}

nav li {
    margin:0px 10px;
    padding:0px;
    list-style-type:none;
    display:inline;
}

nav a:link, nav a:visited {
    font-size:1.4em;
    font-weight:normal;
}

section#left {
    float:left;
    width:178px;
    text-align:left;
}

section#right {
    float:right;
    width:178px;
    text-align:left;
}

section h1, section h2, section h3, section h4, section h5, section h6 {
    background:transparent url(sprites.png) no-repeat 0px -80px;
    color:#fff;
    padding:9px 10px 10px 10px;
    margin:13px -10px;  
    text-shadow:0 1px 0 #403232;
}

section ul {
    padding:0px;
    list-style:none;
    border-top:1px solid #e7e2d7;
    margin:14px 0px;
}

section li {
    margin:0px;
    padding:0px;
    list-style:none;
}

section li a:link, section li a:visited {
    float:left;
    width:96%;
    padding:3px 1%;
    border-bottom:1px solid #e7e2d7;
}

section li a:hover {
    background:#f2f1ec;
}

article {
    float:left;
    width:418px;
    text-align:left;
}

article h1 {
    background:transparent url(sprites.png) no-repeat 0px 0px;
    color:#fff;
    padding:7px 10px 12px 30px;
    margin-left:-30px;
    text-shadow:0 1px 0 #403232;
}

article h2, article h3, article h4, article h5, article h6  {
    background:transparent url(sprites.png) no-repeat 0px -40px;
    color:#fff;
    padding:7px 10px 12px 30px;
    margin-left:-30px;
    text-shadow:0 1px 0 #913951;
}

article p:first-of-type {
    font-family:Helvetica, Arial, serif;
    text-transform:uppercase;
    border-top:1px dotted #968765;
    border-bottom:1px dotted #968765;
    padding:10px 0px;
    color:#c17086;
}

label {
    display:block;
    font-weight:bold;
}

input, textarea {
    font-family:"Myriad Pro", Myriad, Helvetica, Arial, sans-serif;
    font-size:90%;
    color:#968765;
    border:1px solid #e7e2d7;
    border-radius:3px;
    -webkit-border-radius:.3em;
    -moz-border-radius:.3em;
    padding:2px 4px;
    width:168px;
    background:#fff url(sprites.png) repeat-x 0px -120px;
}

input:focus, textarea:focus {
    border:1px solid #c9c1af;
}

button {
    float:right;
    font-family:Georgia, times, serif;
    font-size:1.2em;
    color:#fff;
    font-style:italic;
    border:1px solid #c17086;
    border-radius:3px;
    -webkit-border-radius:.3em;
    -moz-border-radius:.3em;
    padding:3px 12px;
    background:#bd1341 url(sprites.png) repeat-x -250px -82px;
    cursor:pointer;
}

button:hover {
    background-position:-350px -82px
}

footer {
    display:block;
    clear:both !important;
    width:898px;
}

footer a {
    margin:0px 5px;
}


/////////////////////// TABLA CSS //////////////////////////////////////
.CSSTableGenerator {
    margin:0px;padding:0px;
    width:100%;
    box-shadow: 10px 10px 5px #888888;
    border:1px solid #3f7f00;
    
    -moz-border-radius-bottomleft:8px;
    -webkit-border-bottom-left-radius:8px;
    border-bottom-left-radius:8px;
    
    -moz-border-radius-bottomright:8px;
    -webkit-border-bottom-right-radius:8px;
    border-bottom-right-radius:8px;
    
    -moz-border-radius-topright:8px;
    -webkit-border-top-right-radius:8px;
    border-top-right-radius:8px;
    
    -moz-border-radius-topleft:8px;
    -webkit-border-top-left-radius:8px;
    border-top-left-radius:8px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
    width:100%;
    height:100%;
    margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
    -moz-border-radius-bottomright:8px;
    -webkit-border-bottom-right-radius:8px;
    border-bottom-right-radius:8px;
}
.CSSTableGenerator table tr:first-child td:first-child {
    -moz-border-radius-topleft:8px;
    -webkit-border-top-left-radius:8px;
    border-top-left-radius:8px;
}
.CSSTableGenerator table tr:first-child td:last-child {
    -moz-border-radius-topright:8px;
    -webkit-border-top-right-radius:8px;
    border-top-right-radius:8px;
}.CSSTableGenerator tr:last-child td:first-child{
    -moz-border-radius-bottomleft:8px;
    -webkit-border-bottom-left-radius:8px;
    border-bottom-left-radius:8px;
}.CSSTableGenerator tr:hover td{
    
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#d4ffaa; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
    vertical-align:middle;
    
    
    border:1px solid #3f7f00;
    border-width:0px 1px 1px 0px;
    text-align:left;
    padding:7px;
    font-size:10px;
    font-family:Arial;
    font-weight:normal;
    color:#000000;
}.CSSTableGenerator tr:last-child td{
    border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
    border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
    border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
        background:-o-linear-gradient(bottom, #4d9307 5%, #336005 100%);    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4d9307), color-stop(1, #336005) );
    background:-moz-linear-gradient( center top, #4d9307 5%, #336005 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#4d9307", endColorstr="#336005");  background: -o-linear-gradient(top,#4d9307,336005);

    background-color:#4d9307;
    border:0px solid #3f7f00;
    text-align:center;
    border-width:0px 0px 1px 1px;
    font-size:14px;
    font-family:Arial;
    font-weight:bold;
    color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
    background:-o-linear-gradient(bottom, #4d9307 5%, #336005 100%);    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4d9307), color-stop(1, #336005) );
    background:-moz-linear-gradient( center top, #4d9307 5%, #336005 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#4d9307", endColorstr="#336005");  background: -o-linear-gradient(top,#4d9307,336005);

    background-color:#4d9307;
}
.CSSTableGenerator tr:first-child td:first-child{
    border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
    border-width:0px 0px 1px 1px;
}

</style>



</head>

<body>

<header>
    <hgroup>
        <h1>Portal Tesis Utem </h1>
        <h2>Bienvenidos</h2>
    </hgroup>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Tab 1</a></li>
            <li><a href="#">Tab 2</a></li>
            <li><a href="#">Tab 3</a></li>
        </ul>
    </nav>
    
    
    <a href="#" title="Ampersand Solutions homepage"><img src="logo.gif" alt="Ampersand Solutions" /></a>
    
</header>

<section id="left">
    <h1>Menu Principal</h1>
    <ul>
        <li><a href="#">opcion 1 </a></li>
        <li><a href="#">opcion 2 </a></li>
        <li><a href="#">opcion 3 </a></li>
        <li><a href="#">opcion 4 </a></li>
        <li><a href="#">opcion 5 </a></li>
        <li><a href="#">opcion 6 </a></li>
        <li><a href="#">opcion 7 </a></li>
        <li><a href="#">opcion 8 </a></li>
    </ul>
</section>

<article>
    <h1>Titulo 1</h1>
    <p> 

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
    

























    </p> 

<div class="container_12">
    <div class="grid_12" id="buscador_multipe">
        <h2>Buscador múltiples criterios</h2>
        <?php $atributos = array('class' => 'formulario') ?>
        <?php echo form_open('listado',$atributos) ?>

            <?php echo form_label('buscar en el resumen') ?>
            <input type="text" name="resumen" class="resumen" id="resumen" placeholder="Tus palabras clave" />
            
            <?php echo form_label('buscar segun titulo') ?>
            <input type="text" name="titulo" class="titulo" id="titulo" placeholder="clave titulo" />
            

            <?php echo form_label('Sector') ?>  
            <select name="sector" class="sector" id="select">
                <option value="" selected="selected">Sector</option>
                <option value="Programación">Programación</option>
                <option value="Medicina">Medicina</option>
                <option value="Comerciales">Comerciales</option>
                <option value="Almacén">Almacén</option>
            </select>
            
            <!--este es nuestro autocompletado-->
            <input type="text" autocomplete="off" onpaste="return false" name="poblacion" 
            id="poblacion" class="poblacion" placeholder="Busca tu población" />
            
            <div class="muestra_poblaciones"></div>
                
            <?php echo form_submit('buscar','Buscar') ?>
            
        <?php echo form_close() ?>
        
    </div>  
            
    <?php //si hay resultados los mostramos

    if(is_array($resultados) && !is_null($resultados))
    {
    ?>
    <div class="CSSTableGenerator" >
        <table >
        <div class="grid_12 resultados">
            <h2>Resultados</h2>

            <div class="grid_12" id="head_resultados">
                <tr>
                <td><div class="grid_1">Titulo</div></td>
                <td><div class="grid_2">Autor</div></td>
                <td><div class="grid_3">Fecha</div></td>
                <td><div class="grid_4">Descripcion</div></td>      
                <td><div class="grid_5">Resumen</div></td>
                <td><div class="grid_6">Ruta</div></td>
                </tr>
            </div>
                
            <div class="grid_12" id="body_rñesultados">
            <?php
            foreach($resultados as $fila)
            {
            ?>
                <tr>
                <td><div class="grid_1"><?php echo $fila->titulo ?></div></td>
                <td><div class="grid_2"><?php echo $fila->autor ?></div></td>
                <td><div class="grid_3"><?php echo $fila->fecha ?></div></td>
                <td><div class="grid_4"><?php echo $fila->descripcion ?></div></td>
                <td><div class="grid_5"><?php echo $fila->resumen ?></div></td>
                <td><div class="grid_6"><?php echo $fila->ruta ?></div></td>
                </tr>
            <?php
            }
            ?>
            </div>
        </div>
        <?php
        }
        ?>
        </table>
    </div>
</div>
    </p>
    <h2>Titulo 2</h2>
    <p>--------------------

    </p>
    <p>---------------------------------</p>
    <h3>Titulo 3</h3>
    <p>---------------------------------
    </p>
</article>

<section id="right">
    <h1>Contact</h1>
    
    <form action="#">
        <p>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="What should we call you?" />
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Where should we reply?" />
        </p>
        <p>
            <label for="message">Message</label>
            <textarea id="message" name="message" cols="10" rows="5"></textarea>
        </p>
        <button type="submit">Send</button>
    </form>
</section>

<footer>
    <p>&copy; 2010 Ampersand Solutions - <a href="#">Sitemap</a> | <a href="#">Privacy policy</a> almost <a href="http://validator.w3.org/check?uri=http://www.webdezign.co.uk/blog/html5-examples/3col/">valid HTML5</a> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=www.webdezign.co.uk/blog/html5-examples/3col/">valid <abbr title="Cascading Style Sheet">CSS</abbr>3</a> design by <a href="http://www.webdezign.co.uk" title="web design london">Webdezign</a></p>
</footer>

</body>
</html>
