<?php
	require_once('../../private/initialize.php');
	$page_title = 'Planeta Sano';
	include(SHARED_PATH . '/header.php');
?>
<main class="container">
		<div class="row justify-content-arround">
			<h2>¿Cuál es el significado de huella </h2>
			<p class="justificado">La huella ecológica fue un concepto creado por William Rees, se utiliza para medir el impacto del ser humano en el medio ambiente específicamente en términos de consumo de recursos naturales y generación de residuos, te indica cual es la cantidad de tierra y recursos necesarios para mantener el estilo de vida de una persona, comunidad o país en particular.</p>
			<p class="justificado">La unidad de medida con la que se expresa es en hectáreas globales (gha) o hectáreas equivalentes por persona (gha/pers) que representan una hectárea de la tierra con productividad biológica medida en el mundo. Otra forma de definir la huella ecológica es que se trata de un indicador para saber la sostenibilidad de lo que realizan las personas, la sostenibilidad se refiere a mantener un equilibrio entre una especie y los recursos de su entorno, entonces la huella ecológica mide y nos indica si estamos teniendo ese equilibrio entre humanos y recursos naturales de la tierra.</p>
			<p class="justificado">Tenemos algunos sinónimos de la huella ecológica aquí mencionaremos solo 3 que son los siguientes:
			<ol class="justificado">
				<li><b>Pegada ecológica:</b> Este término se utiliza comúnmente en países de habla hispana para referirse al mismo concepto.</li>
				<li><b>Huellas de carbono:</b> Aunque más específico, el término "huellas de carbono" se refiere al impacto de las emisiones de carbono de una persona, empresa o país en el medio ambiente.</li>
				<li><b>Impacto ambiental:</b> Aunque más amplio, este término puede ser considerado un sinónimo en el sentido de que ambos conceptos se refieren al efecto de las actividades humanas en el medio ambiente.</li>
			</ol>
			</p>
			<div class="col-4">
				<figure><img src="<?php echo url_for('imagenes/PlantaHuella.jpg');?>" alt="Planta creciendo"></figure>
			</div>
			<div class="col-4">
				<figure><img src="<?php echo url_for('imagenes/Tree.jpg');?>" alt="Plantando árboles"></figure>
			</div>
			<div class="col-4">
				<figure><img src="<?php echo url_for('imagenes/Paisaje.jpg');?>" alt="Paisaje"></figure>
			</div>
			<h2>Clasificación de la huella ecológica</h2>
			<p class="justificado">La huella ecológica se divide en diferentes tipos de huellas:<br><b>Huella forestal:</b> Se encarga de medir la demanda de bosques para suministrar combustible y productos de madera.<br><b>Huella de pastoreo:</b>Se encarga de medir la demanda de los pastizales para poder criar ganado y producir carne, lácteos, cueros y lana.<br><b>Huella de las zonas de pesca:</b> Se encarga de la demanda de ecosistemas de aguas marinas y continentales para suministrar los peces.<br><b>Huella de las tierras de cultivo:</b> Se encarga de medir la demanda de la tierra que se necesita para poder producir alimentos para el consumo del humano, para alimentar al ganado, cultivos y producción de caucho.<br><b>Huella del suelo urbanizado:</b> Ayuda con la demanda de áreas biológicamente productivas para construir lo que es infraestructuras de transporte, viviendas y estructuras industriales.<br><b>Huella de carbono:</b> Se encarga de medir las emisiones de carbono que vienen de quemar combustible fósil. 
			</p>
			<h2>¿Cómo se calcula?</h2>
			<p class="justificado">Pero ¿cómo puedo medir mi huella ecológica? Bueno para esto es importante tomar en cuenta varios factores como lo son el producir un producto o servicio sea el que sea va a necesitar de materiales y energía para absorber los residuos que generan estos productos y servicios en su producción se necesitan sistemas ecológicos y finalmente las infraestructuras y equipamientos el hacer uso de estas reduce hectáreas de superficie que podemos usar mejor para ecosistemas productivos.<br>Huella ecológica = Consumo / Productividad<br>Obteniendo esto solo faltaría restar los recursos que consume cada persona a los recursos generados por el planeta todo esto al año y así obtendremos las hectáreas globales que le corresponde a cada persona. Pero existen paginas que te calculan tu huella ecológica y a continuación te muestro algunas:</p>
			<div class="card" style="width: 17rem;">
				<img src="<?php echo url_for('imagenes/Calculadora1.jpg');?>" class="card-img-top" alt="Calculadora de huella ecológica">
				<div class="card-body">
					<h2><a href="https://www.footprintcalculator.org/home/es">Global Footprint Network</a></h2>
					<p>Es una organización que está compuesta por un grupo de expertos sin fines de lucro se encarga de calcular la huella ecológica proporcionando datos científicos para llevar el cambio social hacia la sostenibilidad.</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<img src="<?php echo url_for('imagenes/Calculadora2.jpg');?>" class="card-img-top" alt="Calculadora de huella ecológica">
				<div class="card-body">
					<h2><a href="https://climatehero.org/">ClimateHero</a></h2>
					<p>Es una pagina que calcula la huella ecológica tomando en cuenta tres aspectos vivienda, viajar y consumo es un poco difícil de usar, pero al final te dice como puedes reducir tu huella y que haces bien.</p>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<img src="<?php echo url_for('imagenes/Calculadora3.png');?>" class="card-img-top" alt="Calculadora de huella ecológica">
				<div class="card-body">
					<h2><a href="https://www.vidasostenible.org/proyectos/calculadora-de-huella-ecologica/">Fundación vida sostenible</a></h2>
					<p>Es una página que tiene un apartado de calcular tu huella ecológica además tiene como blogs sobre temas relacionados con el tema.</p>
				</div>
			</div>
			<div class="card" style="width: 17rem;">
				<img src="<?php echo url_for('imagenes/Calculadora4.jpg');?>" class="card-img-top" alt="Calculadora de huella ecológica">
				<div class="card-body">
					<h2><a href="https://consumoresponsable.greenpeace.org.mx/?_gl=1*8jnai3*_ga*MTcxNTk5NzAyNS4xNzEyMDkzODYw*_ga_YERBT5H8S8*MTcxMjA5Mzg3Mi4xLjEuMTcxMjA5NDA0NS4wLjAuMA..*_fplc*S0RWV3RsJTJGcFJpMkZqJTJCbFpqU2xvMWFCVFFKd0d3ZXhicVB2eU5CaklGa3llWjFLMlpwZE1ocFBnM2lBZ2tlOHg1UEh1Q3lURkt3NXZYNGw0SzRLd3VmckExUkdWYWJ1Ymp4T2IzS0VaUkhPTmFNNTdtOEJpak9oY2FDUU1uUSUzRCUzRA..&_ga=2.224952924.75420085.1712093873-1715997025.1712093860">Greenpeace</a></h2>
					<p>Es una organización sin fines lucrativos donde tiene una pagina que habla sobre el cambio climático y más temas relacionados específicamente tiene un apartado donde te ayuda a calcular tu huella ecológica.</p>
				</div>
			</div>
			<p class="justificado">Ahora que ya conocer que es la huella ecológica, como calcular la y su clasificacion, es momento de hacer conciencia y conocer como estamos dañando nuestro planeta en la pagina de <a href="<?php echo url_for('paginas/contaminacionAmbiental.php');?>">contaminacion ambiental</a> encontraras una introduccion general de como estamos contaminando nuestro planeta y posterior mente te manda a las paginas donde se habla mas a fondo de cada contaminacion que existe tambien, pero tambien tenemos que saber como reducir nuestra huella ecologica en la pagina de <a href="<?php echo url_for('paginas/medidasParaCuidarlo.php');?>">medidas para cuidar el planeta</a> vienen algunas medidas que puedes tomar para mantener a salvo nuestro planeta, recuerda que es el lugar donde vivimos y si acabamos con el acabamos con nuestra existencia, tenemos muchos lugares bonitos y animales bonitos que no merecen desaparecer dejemos una bonita herencia a nuestros hijos y nietos.
		</div>
</main>
<?php include(SHARED_PATH . '/footer.php');?>