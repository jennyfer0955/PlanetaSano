<?php
	if(!isset($page_title)){
		$page_title = 'Planeta Sano';
	}
?>
<!doctype html>
<html> 
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<!--Meta-tag para establecer el "Viewport"-->
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1, maximum-scale=1">
	<!--FIN DE VIEWPORT -->
	<title>Planeta Sano</title>
	<!--Enlace de bootstrap-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<!--FIN ENLACE BOOTSTRAP -->
	<!--Se enlazan de forma remota los scripts de JavaScript para el diseño con bootstrap: jquery, popper y bootstrap-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<!--FIN DE SCRIPTS-->
	<!--Iconos desde fontawesome-->
		<script src="https://kit.fontawesome.com/69ce99452c.js" crossorigin="anonymous"></script>
	<!-- VÍNCULO DE HOJAS DE ESTILO -->
		<link rel="stylesheet" type="text/css" href="<?php echo url_for('css/stylePlanixus.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo url_for('css/stylePaletaColores.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo url_for('css/stylePaletaTipografica.css');?>">
	<!--FIN DE ENLACE HOJAS DE ESTILOS -->
	<!-- Enlace de animaciones-->
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  	<!--FIN DE ENLACE -->
  	<script src="<?php echo url_for('js/scriptSobreNosotros.js');?>" defer></script>
  	<script src="<?php echo url_for('js/scriptValidacion.js');?>" defer></script>
</head>
<body class="container-fluid">
	<header class="p-4 fs-sm-3 fs-md-2 fs-lg-1"> 
    	<h1 id="titulo" class="animate_animated animate__heartBeat"><?php echo $page_title;?></h1>
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo url_for('index.php');?>"><img class="animate__animated animate__flipInX"src="<?php echo url_for('imagenes/Planetita.png');?>" alt="Logo de planeta" width="80" height="80"></a>
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      				<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url_for('paginas/sobreNosotros.php');?>">
								Sobre nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url_for('paginas/huellaEcologica.php');?>">
								Huella ecológica</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Acciones para cuidar el planeta</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?php echo url_for('paginas/medidasParaCuidarlo.php');?>">Medidas para cuidar el planeta</a></li>
								<li><a class="dropdown-item" href="<?php echo url_for('paginas/inventos.php');?>">Inventos para cuidar el medio ambiente</a></li>
								<li><a class="dropdown-item" href="<?php echo url_for('paginas/productosAmigables.php');?>">Productos amigables con el ambiente</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Contaminación ambiental</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?php echo url_for('paginas/contaminacionSuelo.php');?>">Contaminación del Suelo</a></li>
								<li><a class="dropdown-item" href="<?php echo url_for('paginas/contaminacionAire.php');?>">Contaminación del Aire</a></li>
								<li><a class="dropdown-item" href="<?php echo url_for('paginas/contaminacionAgua.php');?>">Contaminación del Agua</a></li>
								<li><a class="dropdown-item" href="<?php echo url_for('paginas/contaminacionTermica.php');?>">Contaminación Termica</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url_for('paginas/organizaciones.php');?>">Organizaciones</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
