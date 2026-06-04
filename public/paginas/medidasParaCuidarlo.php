<?php
	require_once('../../private/initialize.php');
	$page_title = 'Planeta Sano';
	include(SHARED_PATH . '/header.php');

	$items = [
		['titulo' => 'Cultivar tus propios alimentos', 'parrafo' => 'Puedes realizar un huerto en tu casa de esta forma tienes productos ecológicos y tus alimentos serán más frescos y llenos de nutrientes.', 'imagen' => '/imagenes/Plantas.jpg', 'alt_medidas' => 'Cultivar tus propios alimentos'],
		['titulo' => 'Planta arboles', 'parrafo' => 'Existen lugares donde cortas un árbol y plantas como 5 de esta forma ayudamos al planeta ya que los árboles producen oxígeno, reducen el dióxido de carbono y regulan la temperatura, tu igual puedes plantar un árbol y disfrutar de una rica sombra y además ayudar al planeta.', 'imagen' => '/imagenes/Arboles.jpg', 'alt_medidas' => 'Planta arboles'],
		['titulo' => 'Cuidar el agua', 'parrafo' => 'Ahorrar agua es otra forma de cuidar el planeta, como bien lo sabemos este es un recurso imprescindible y escaso por eso debemos cuidar la pero como podemos cuidar la bueno puedes mantener cerrado el grifo mientras lavas los dientes, no tardarte bañándote más de 5 minutos, reciclar el agua cuando te bañas y regar tu jardín con esta. Incluso puedes recolectar agua de la lluvia y usarla.', 'imagen' => '/imagenes/Agua.jpg', 'alt_medidas' => 'Cuidar el agua'],
		['titulo' => 'Separa la basura', 'parrafo' => 'Es algo que siempre hemos escuchado muy seguido separar la basura, muchas escuelas y lugares ya aplican esto dividiendo en vidrio, papel, plásticos, desechos tóxicos y orgánica algunos lo hacen solo con orgánica e inorgánica, pero al final la separan tu en tu casa podrías hacer lo mismo y ayudar al planeta.', 'imagen' => '/imagenes/Separar.png', 'alt_medidas' => 'Separa la basura'],
		['titulo' => 'Reutilizar', 'parrafo' => 'Hay objetos que le podemos dar segunda vida antes de tirarlos con el fin de ahorrar y comprar todo de nuevo, podemos donarlos o vender los. Incluso puedes mejorar lo y usar lo de nuevo o usar lo de otra forma como ropa vieja usar la como trapo limpiador etc.', 'imagen' => '/imagenes/Reutilizar.jpg', 'alt_medidas' => 'Reutilizar'],
		['titulo' => 'Uso de energía', 'parrafo' => 'Aunque no lo crean igual la energía contamina el planeta por eso te invito a tomar medidas como desenchufar tus aparatos electrónicos si no los estas usando, revisa que no haya fugas, usa paneles solares, focos ahorradores, regula las temperaturas de la ducha o el calefactor.', 'imagen' => '/imagenes/UsoEnergia.jpg', 'alt_medidas' => 'Uso de energía'],
		['titulo' => 'Compras ecológicas', 'parrafo' => 'Has escuchado sobre los diseñadores locales que usan tejidos sostenibles bueno esta es una forma de ayudar al medio ambiente compra productos locales y que sean fabricados con materias sostenible, ve a lugares donde vendan cosas de segunda mano y compra.', 'imagen' => '/imagenes/Compras.jpg', 'alt_medidas' => 'Compras ecológicas'],
		['titulo' => 'No contamines el Aire', 'parrafo' => 'Se que ir en un coche personal sin nadie más es muy cómodo pero que en una familia tengan un coche por persona provoca emisiones de gases, mejor usa el transporte público, la bicicleta hasta te sirve a ti como ejercicio y te ayuda a tu salud o comparte tu coche en vez de tener uno por persona en tu familia compartan y ya solo será un choche emitiendo gases.', 'imagen' => '/imagenes/NoContamines.jpg', 'alt_medidas' => 'No contamines el Aire'],
		['titulo' => 'Voluntariado ambiental', 'parrafo' => 'Únete a la causa de algunas organizaciones para cuidar el planeta aparte de poner tu granito de arena puedes aprender mas sobre como proteger nuestro planeta incluso en algunos lugares viajas como voluntariado puedes realizar muchas actividades depende del lugar.', 'imagen' => '/imagenes/Voluntariadoambiental.jpg', 'alt_medidas' => 'Voluntariado ambiental'],
		['titulo' => 'No quemes basura', 'parrafo' => 'Esto ayuda de dos formas no contaminas el aire y reduces el calentamiento global varios estudios realizados por diversas fuentes dicen que el quemar basura genera compuestos que pueden causar que nos de cáncer de pulmón.', 'imagen' => '/imagenes/Basura.jpg', 'alt_medidas' => 'No quemes basura'],
		['titulo' => 'Energías', 'parrafo' => 'Utiliza energías ecológicas como la energía eólica, hidroeléctrica, solar, geotérmica, biomasa y energía del mar que ayudan reduciendo la emisión de gases de efecto invernadero y las enfermedades que provoca la contaminación ambiental además disminuye el calentamiento global aumentando la calidad de vida.', 'imagen' => '/imagenes/Energias.jpg', 'alt_medidas' => 'Energias'],
		['titulo' => 'Productos biodegradables', 'parrafo' => 'Estos productos son amigables con el medio ambiente porque se descomponen más rápido de forma que no contaminan mares, playas, bosques entre otros, algunos pueden ser reutilizados, no producen residuos tóxicos.', 'imagen' => '/imagenes/Biodegradable.jpg', 'alt_medidas' => 'Productos biodegradables']
	];

	$total_medidas = 12;
?>
<main class="container">
		<h2 class="subtitulo">Medidas para cuidar el medio ambiente</h2>
		<p>Todos podemos contribuir a cuidar el medio ambiente con pequeñas acciones, por eso a continuación te mencionamos algunas cosas que puedes hacer para reducir la contaminación y así poner tu granito de arena: </p>
		<div class="row p-4 justify-content-around">
			<?php
				for ($j = 0; $j < $total_medidas; $j++) { 
					$medidas = $items[$j];?>
					<section class="p-4 col-12 col-md-4 col-lg-4">
						<div class="container">  
							<article class="row p-2 entrada justify-content-around">
								<div class="card" style="width: 18rem;">
								  <img class="animate__animated animate__rubberBand" src="<?php echo url_for($medidas['imagen']) ?>" class="card-img-top" alt="<?php echo $pelicula['alt_medidas'] ?>">
								  	<div class="card-body">
								  		<h2><?php echo $medidas['titulo'] ?></h2>
										<p class="justificado"><?php echo $medidas['parrafo'] ?></p>
								  	</div>
								</div>
							</article>
						</div>
					</section>
				<?php } ?>
					<p>Poner nuestro granito de arena no es dificl, quiza no todos hagan ese cambio de cuidar nuestro planeta, pero tus acciones van a hacer un cambio, el planeta te lo va agradecer seamos concientes sigamos estas medidas, te invito a visitar nuestras paginas <a href="<?php echo url_for('paginas/inventos.php');?>">inventos</a> y <a href="<?php echo url_for('paginas/productosAmigables.php');?>">productos amigables con el ambiente</a> donde encontraras diversos productos que puedes usar para no dañar nuestro planeta, a continuación te dejo un video para que veas que tus acciones si hacen un cambio.</p>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/M19FMHOD8yY?si=KDzdundMu2gQ_gKm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
</main>
<?php include(SHARED_PATH . '/footer.php');?>