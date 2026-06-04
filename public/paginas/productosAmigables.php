<?php
	require_once('../../private/initialize.php');
	$page_title = 'Planeta Sano';
	include(SHARED_PATH . '/header.php');
?>
<main class="container">
	<h2 class="subtitulo">Productos amigables con el ambiente</h2>
	<p>A veces es difícil identificar un producto amigable con el ambiente por eso a continuación te mencionare algunos productos:</p>
		<div class="row p-4 justify-content-around">
			<section class="p-4 col-12 col-md-4 col-lg-4">
				<div class="container">  
					<article class="row p-2 entrada justify-content-around">
						<div class="card" style="width: 18rem;">
						  <img class="animate__animated animate__rubberBand" src="<?php echo url_for('imagenes/CubiertosEcologicos.jpg');?>" class="card-img-top" alt="Cubiertos ecológicos.">
						  <div class="card-body">
						  	<h2>Cubiertos ecológicos.</h2>
							<p class="justificado">Están hechos de base de semillas hay cubiertos de bambú, compostables, madera y comestibles.</p>
						  </div>
						</div>
						<div class="card" style="width: 18rem;">
						  <img src="<?php echo url_for('imagenes/EnvasesEcologicos.jpg');?>" class="card-img-top" alt="Envases ecológicos.">
							<div class="card-body">
								<h2>Envases ecológicos.</h2>
								<p class="justificado">Una idea mas para combatir el plástico, estos envases están hechos de biopolímeros que se degradan más rápido.</p>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
						  <img src="<?php echo url_for('imagenes/ProductosLimpieza.jpg');?>" class="card-img-top" alt="Productos de limpieza.">
						  	<div class="card-body">
								<h2>Productos de limpieza.</h2>
								<p class="justificado">Tenemos productos biodegradables de limpieza que están hechos de aceites de origen vegetal, silicatos, sulfatos de alcoholes de grasa de coco, aromatizantes de origen vegetal y no son ensayados con animales.</p>
							</div>
						</div>
					</article>
				</div>
			</section>
			<aside class="p-4 col-12 col-md-4 col-lg-4">
				<div class="container">  
					<article class="row p-2 entrada justify-content-around">
						<div class="card" style="width: 18rem;">
						  <img class="animate__animated animate__rubberBand" src="<?php echo url_for('imagenes/PanelesSolares.jpg');?>" class="card-img-top" alt="Paneles solares.">
						  	<div class="card-body">
						  		<h2>Paneles solares.</h2>
								<p class="justificado">Es una forma de usar energías limpias ya que es una fuente inagotable y renovable además no contribuye al calentamiento global.</p>
						  	</div>
						</div>
						<div class="card" style="width: 18rem;">
						  <img src="<?php echo url_for('imagenes/PapelEcologico.jpg');?>" class="card-img-top" alt="Papel higiénico.">
						  	<div class="card-body">
						  		<h2>Papel higiénico.</h2>
								<p class="justificado">El papel hecho de bambú es amigable con el medio ambiente porque es un material renovable y sus componentes hacen que sea suave, biodegradable y absorbente.</p>
						  	</div>
						</div>
						<div class="card" style="width: 18rem;">
						  <img src="<?php echo url_for('imagenes/DiscosDesmaquillantes.jpg');?>" class="card-img-top" alt="Discos desmaquillantes.">
						  	<div class="card-body">
						  		<h2>Discos desmaquillantes.</h2>
								<p class="justificado">Son de forma de algodón, pero tienen fibras de bambú orgánico y costuras reforzadas que permiten que los laven fácilmente en la lavadora y cuando quieras tirarlos los puedes colocar en un contenedor de abono.</p>
						  	</div>
						</div>
					</article>
				</div>
			</aside>
			<section class="p-4 col-12 col-md-4 col-lg-4">
				<div class="container">  
					<article class="row p-2 entrada justify-content-around">
						<div class="card" style="width: 18rem;">
						  <img class="animate__animated animate__rubberBand" src="<?php echo url_for('imagenes/BolsaAlgodon.png');?>" class="card-img-top" alt="Bolsas de algodón.">
						  	<div class="card-body">
						  		<h2>Bolsas de algodón.</h2>
								<p class="justificado">Son fabricadas con algodón orgánico, permiten la circulación de aire, no ocupan mucho espacio y pueden ser lavadas para utilizar se de nuevo.</p>
						  	</div>
						</div>
						<div class="card" style="width: 18rem;">
						  <img src="<?php echo url_for('imagenes/MueblesEcologicos.jpg');?>" class="card-img-top" alt="Muebles hechos con madera reciclable.">
						  	<div class="card-body">
						  		<h2>Muebles hechos con madera reciclable.</h2>
								<p class="justificado">Un diseñador alemán recicla las tarimas desechadas o en mal estado y las convierte en muebles ayudando a la erosión de los suelos.</p>
						  	</div>
						</div>
						<div class="card" style="width: 18rem;">
						  <img src="<?php echo url_for('imagenes/FocoLED.jpg');?>" class="card-img-top" alt="Focos LED ahorradores de energía.">
						  	<div class="card-body">
						  		<h2>Focos LED ahorradores de energía.</h2>
								<p class="justificado">Estos focos ayudan a reducir las emisiones de dióxido de carbono, desprenden menos calor y gastan menos energía eléctrica que un foco normal.</p>
						  	</div>
						</div>
					</article>
				</div>
			</section>
			<p class="justificado">Existen más productos que contribuyen con el medio ambiente para identificarlos es importante que antes de comprar un producto revises el tipo de material con el que está hecho la mayoría de estos productos vienen en empaques reciclables revisa que tenga alguna etiqueta que diga que es amigable con el ambiente como “Free Phthalates” o “Free Ca Pb Ba.</p>	
			<p class="justificado">De igual modo debe de indicar que es libre de componentes tóxicos que es biodegradable o incluso reciclable, si es un alimento aparte de indicar que es biodegradable debe decir que es orgánico, en productos de belleza revisa que no hayan sido probados en animalitos, puedes igual revisar que tengan el sello de certificación universal, comprando estos productos podemos poner nuestro granito de arena. Te invito a visistar nuestra pagina <a href="<?php echo url_for('paginas/inventos.php');?>">inventos</a> donde encontraras mas cosas. El siguiente video te muestra el daño que le causamos a los animalitos al seguir comprando productos no amigables con el medio ambiente.</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/cmlITg5xIb0?si=RJb9LYRgRpjXd_bS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
</main>
<?php include(SHARED_PATH . '/footer.php');?>