<?php
	require_once('../../private/initialize.php');
	$page_title = 'Planeta Sano';
	include(SHARED_PATH . '/header.php');
?>
<main class="container">
	<div class="row justify-content-around">
		<section class="col-12 col-md-6 col-lg-7">
			<div class="container">  
				<article class="row p-2 entrada justify-content-around">
					<h2>Objetivo</h2>
					<p class = "justificado">Planixus tiene como objetivo crear concientización ambiental para aumentar el conocimiento público sobre la huella ecológica y fomentar prácticas sostenibles.</p>
					<h2>¿Qué queremos logara?</h2>
					<p class="justificado">Queremos lograr difundir la conciencia ambiental de manera efectiva y llegar a un público amplio con el objetivo de incrementar el conocimiento general sobre la huella ecológica y promover prácticas sostenibles. </p>
					<h2>Mapa Sitio</h2>
					<button type="button" class="botMapa" onclick="BotEstatus()">Mapa</button>
				</article>
				<div class="col-12 col-md-12 col-lg-12">
			        <img id="resulBut">
				</div>
			</div>
		</section>
		<aside class="p-4 col-12 col-md-6 col-lg-5">
			<div class="container">  
				<article class="row p-2 entrada justify-content-around">
					<h2>Contacto</h2>
					<p>Nos gustaría leer que opinas de la pagina y que mejoras propones.</p>
					<div class="input-group">
					  <span class="input-group-text">Comentario</span>
					  <textarea class="form-control" id="coment" aria-label="Escribe aqui tu comentario"></textarea>
					</div>
			        <div class="input-group">
			            <div class="d-grid gap-2 col-12">
			            	<button type="button" id="btn" class="btn btn-outline-danger">Enviar</button>
			            </div>
			           <div class="col-12" id="resultado"></div>
			        </div>

				</article>
			</div>
		</aside>
	</div>	
</main>
<?php include(SHARED_PATH . '/footer.php');?>