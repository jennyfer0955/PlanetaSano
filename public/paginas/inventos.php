<?php
	require_once('../../private/initialize.php');
	$page_title = 'Planeta Sano';
	include(SHARED_PATH . '/header.php');
?>
<main class="container">
	<h2 class="subtitulo">Inventos para el cuidado del medio ambiente</h2>
	<p>Existen personas que han tomado muy en cerio el tema de cuidar el planeta y se han dedicado a inventar productos que resuelvan algunas problemáticas y ayuden a reducir la contaminación de modo que estos productos no le hacen daño al medio ambiente a continuación te menciono algunos:</p>
		<div class="row justify-content-around">
			<section class="p-4 col-12 col-md-4 col-lg-4">
				<div class="container">  
					<article class="row p-2 entrada justify-content-around">
						<div class="card" style="width: 18rem;">
							<img class="animate__animated animate__rubberBand" src="<?php echo url_for('imagenes/LitroDeLuz.png');?>" class="card-img-top" alt="Luz en botellas">
							<div class="card-body">
								<h2>Liter of light (un litro de luz).</h2>
								<p class="justificado">Proyecto que lleva luz a lugares sin recursos reutilizando las botellas de plástico y un panel solar con solo estos dos materiales crean farolas, farolillos y luces para casa, este proyecto a llegado a varios lugares y tienen como objetivo acabar con la pobreza energética utilizando solo materiales locales y plástico reciclado.</p>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<img src="<?php echo url_for('imagenes/Ooho.jpg');?>" class="card-img-top" alt="Botella comestible">
							<div class="card-body">
								<h2>Ooho una botella de agua comestible.</h2>
								<p class="justificado">Es la solución de la empresa Skipping Rocks Lab para las botellas de plástico y evitar así la contaminación de envases esta hecha 100% de algas y plantas, la cubierta del agua se puede desechar ya que tarda solo 6 semanas en biodegradarse.</p>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<img src="<?php echo url_for('imagenes/carritoEcologico.jpg');?>" class="card-img-top" alt="Carrito que recoje basura del agua">
							<div class="card-body">
								<h2>Mr. Trash Weel.</h2>
								<p class="justificado">Baltimore usa una forma divertida de extraer basura de los ríos, es una combinación entre las nueva y vieja tecnología se trata nada mas que de una reda de agua para moverse se apoya de la corriente del agua y si no hay de la energía solar, no genera residuos que contaminen.</p>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<img src="<?php echo url_for('imagenes/Nohbo.jpg');?>" class="card-img-top" alt="bolas de champu">
							<div class="card-body">
								<h2>Nohbo.</h2>
								<p class="justificado">Una alternativa mas para terminar con el plástico se trata nada menos que de una bola de champu que no necesita de una botella y es activada con agua fue inventada por un adolescente de 16 años.</p>
							</div>
						</div>
					</article>
				</div>
			</section>
			<aside class="p-4 col-12 col-md-4 col-lg-4">
				<div class="container">  
					<article class="row p-2 entrada justify-content-around">
						<div class="card" style="width: 18rem;">
							<img class="animate__animated animate__rubberBand" src="<?php echo url_for('imagenes/pools.jpg');?>" class="card-img-top" alt="Contenedores de piscinas">
							<div class="card-body">
								<h2>Shipping Container Pools.</h2>
								<p class="justificado">Una empresa australiana crea con ayuda de un contenedor de envió piscinas esto ayuda al medio ambiente porque muchos contenedores terminar si usar se, además reduce la huella de carbono porque una piscina normal mente conlleva muchos materiales y estas son fáciles de instalar se en cualquier lugar y no requieren mucha energía para su creación.</p>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<img src="<?php echo url_for('imagenes/HomeBioGas.jpeg');?>" class="card-img-top" alt="Biogas">
							<div class="card-body">
								<h2>Home Biogas.</h2>
								<p class="justificado">Es un contenedor de compostaje que puede crear hasta 200 litros de biogas funciona con desperdicios orgánicos como frutas, vegetales, carne etc. Este contenedor tiene como bacterias que transforma todos esos desechos en gas produce gas verde y sustentable.</p>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<img src="<?php echo url_for('imagenes/polvoMagico.jpg');?>" class="card-img-top" alt="Polvo que limpia el agua contaminada">
							<div class="card-body">
								<h2>Polyglu.</h2>
								<p class="justificado">Es un polvo compuesto por base de soja fermentada que purifica el agua fue fabricado en Japón, este polvo elimina todos esos desechos que provocan enfermedades.</p>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<img src="<?php echo url_for('imagenes/Turbina.png');?>" class="card-img-top" alt="Turbina que genera luz">
							<div class="card-body">
								<h2>WaterLily.</h2>
								<p class="justificado">Es una turbina capaz de generar energía de agua o aire, sirve para cargar celulares y especialmente para exteriores, fácilmente la puedes llevar hasta en tu mochil.</p>
							</div>
						</div>
					</article>
				</div>
			</aside>
			<section class="p-4 col-12 col-md-4 col-lg-4">
				<div class="container">  
					<article class="row p-2 entrada justify-content-around">
						<div class="card" style="width: 18rem;">
							<img class="animate__animated animate__rubberBand" src="<?php echo url_for('imagenes/Losetas.png');?>" class="card-img-top" alt="Losetas echas de neumaticos">
							<div class="card-body">
								<h2>Baldosas de caucho.</h2>
								<p class="justificado">También conocidas como losetas son echas de los neumáticos usados es una forma de evitar que se quemen o solo se acumulen y se pueden utilizar en diferentes suelos.</p>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<img src="<?php echo url_for('imagenes/Comestible.jpg');?>" class="card-img-top" alt="Anillas comestibles para los peses">
							<div class="card-body">
								<h2>Salt Water Brewery.</h2>
								<p class="justificado">Son anillas para un six-pack que pueden comerse los animales marinos y no lastimarse o morir a causa de estos, los anillos están hechos de los restos de cebada y trigo de la creación de cerveza, esto fue creado por una empresa de cervezas.</p>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<img src="<?php echo url_for('imagenes/CubiertosComestibles.jpg');?>" class="card-img-top" alt="Cubiertos comestibles">
							<div class="card-body">
								<h2>Cubiertos comestibles.</h2>
								<p class="justificado">Una empresa india fue la que creo estos cubiertos que después de usar los te los puedes comer su objetivo es terminar con los utensilios de plástico de un solo uso están echas para consumir incluso si no es así son biodegradables.</p>
							</div>
						</div>
						<div class="card" style="width: 18rem;">
							<img src="<?php echo url_for('imagenes/ataud,jpg');?>" class="card-img-top" alt="Entierro verde">
							<div class="card-body">
								<h2>Entierro verde.</h2>
								<p class="justificado">Incluso desde el más allá puedes seguir ayudando al medio ambiente con esta idea que fue creada por un holandés y son los ataúdes biodegradables usa estructura radicular de los hongos y fibra de cáñamo el ataúd parece un sarcófago egipcio.</p>
							</div>
						</div>
					</article>
				</div>
			</section>
		</div>	
</main>
<?php include(SHARED_PATH . '/footer.php');?>