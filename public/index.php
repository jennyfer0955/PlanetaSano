<?php
	require_once('../private/initialize.php');
	$page_title = 'Planeta Sano';
	include(SHARED_PATH . '/header.php');
?>
<main>
		<div class="row justify-content-arroun">
			<section class="p-4 col-12 col-md-12 col-lg-12">
				<div class="container">  
					<article class="row justify-content-around">
						<p>Actualmente hemos estado viviendo las consecuencias de no cuidar nuestro planeta es por eso por lo que esta página brindara información para concientizar a las personas sobre la huella ecológica y la contaminación ambiental, porque queremos un mundo donde nuestros animales estén a salvo, el aire que respiremos sea limpio, las temperaturas sean frescas y nuestros suelos se vean bien.</p>
						<a class="boton" href="<?php echo url_for('paginas/sobreNosotros.php')?>" role="button"><span class="align-middle">Sobre nosotros</span></a>
					</article>
				</div>
			</section>
		</div>
		<div class="row justify-content-around">
			<section class="p-4 col-12 col-md-6 col-lg-6">
				<div class="container">  
					<article class="row p-2 entrada justify-content-around">
						<figure class="col-12 col-md-12 col-lg-8"><img src="imagenes/Huella Ecologica.png" alt="Huella Ecologica"></figure>
						<h2>Huella Ecológica</h2>
						<p class="justificado">¿Conoces la huella ecológica?, Sabias que la huella ecológica es el doctor del planeta porque un doctor te indica como estas de salud, pues la huella ecológica hace lo mismo, pero con el planeta, nosotros somos los que provocamos una buena o mala salud en el planeta, ¿Sabes que salud le estas provocando al planeta?, te invitamos a conocer más sobre el tema y calcular tu huella ecológica.</p>
						<button type="submit" onclick="location.href='<?php echo url_for("/paginas/huellaEcologica.php")?>'" class="boton">Mas información</button>
					</article>
				</div>
			</section>
			<aside class="p-4 col-12 col-md-6 col-lg-6">
				<div class="container">  
					<article class="row p-2 entrada justify-content-around">
						<figure class="col-12 col-md-12 col-lg-8"><img src="imagenes/Contaminacion Ambiental 2.jpg" alt="Contaminacion ambiental"></figure>
						<h2>Contaminacion ambiental</h2>
						<p class="justificado">¿Conoces al Colobo rojo de Miss Waldron? Sabias que se extinguió debido a la deforestación ya que su hábitat era vivir en lo alto de los árboles, esto fue provocado porque la humanidad explota demasiado los recursos naturales hay animales que no pudimos conocer y animales que existen ahorita, pero nuestros hijos no conocerán, por eso te invito a conocer las consecuencias de las diferentes contaminaciones que le causamos al planeta.</p>
						<button type="submit" onclick="location.href='<?php echo url_for("/paginas/contaminacionAmbiental.php")?>'" class="boton">Mas información</button>
					</article>
				</div>
			</aside>
		</div>	
</main>
<?php include(SHARED_PATH . '/footer.php');?>