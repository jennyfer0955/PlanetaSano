<?php
	require_once('../../private/initialize.php');
	$page_title = 'Planeta Sano';
	include(SHARED_PATH . '/header.php');
?>
<main class="container">
	<div class="row p-4 justify-content-arroun">
		<h2>Organizaciones, marcas comprometidas con el medio ambiente y lugares de voluntariado</h2>
		<p class="justificado">Tenemos organizaciones que protegen y velan por el medio ambiente a continuación te menciono algunas:</p>
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-8">
					<div id="carouselExampleDark" class="carousel carousel-dark slide">
					  <div class="carousel-indicators">
					    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
					    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
					    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
					    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
					    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
					  </div>
					  <div class="carousel-inner">
					    <div class="carousel-item active" data-bs-interval="10000">
					      <img src="<?php echo url_for('imagenes/SEMARNAT.png');?>" class="d-block w-100" alt="SEMARNAT">
					      <div class="carousel-caption d-md-block">
					        <h5><a href="https://www.gob.mx/semarnat">Secretaría de Medio Ambiente y Recursos Naturales (SEMARNAT)</a></h5>
							<p>Encargada de proteger, restaurar y conservar los ecosistemas y recursos naturales.</p>
					      </div>
					    </div>
					    <div class="carousel-item" data-bs-interval="2000">
					      	<img src="<?php echo url_for('imagenes/ASEA.png');?>" class="d-block w-100" alt="ASEA">
							<div class="carousel-caption d-md-block">
							   	<h5><a href="https://www.gob.mx/asea">Agencia de Seguridad, Energía y Ambiente (ASEA)</a></h5>
								<p>Se encarga de la regulación y supervisar la seguridad industrial y operativa para proteger el medio ambiente de las actividades del sector hidrocarburos.</p>
							</div>
					    </div>
					    <div class="carousel-item">
					      	<img src="<?php echo url_for('imagenes/CAME.png');?>" class="d-block w-100" alt="CAME">
							<div class="carousel-caption d-md-block">
							    <h5><a href="https://www.gob.mx/comisionambiental">Comisión Ambiental de la Megalópolis (CAME)</a></h5>
								<p>Tiene como objetivo planear y ejecutar acciones para la protección al medio ambiente y restaurar el equilibrio ecológico.</p>
							</div>
					    </div>
					    <div class="carousel-item" data-bs-interval="2000">
					    	<img src="<?php echo url_for('imagenes/CONABIO.png');?>" class="d-block w-100" alt="CONABIO">
							<div class="carousel-caption d-md-block">
							    <h5><a href="https://www.gob.mx/conabio">Comisión Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO)</a></h5>
								<p>Se encarga de la regulación y supervisar la seguridad industrial y operativa para proteger el medio ambiente de las actividades del sector hidrocarburos.</p>
							</div>
					      	
					    </div>
					    <div class="carousel-item" data-bs-interval="2000">
					      	<img src="<?php echo url_for('imagenes/CONAFOR.png');?>" class="d-block w-100" alt="CONAFOR">
							<div class="carousel-caption d-md-block">
							    <h5><a href="https://www.gob.mx/conafor">Comisión Nacional Forestal (CONAFOR)</a></h5>
								<p>Encargado del desarrollo e impulsar las actividades productivas de conservación y restauración de la materia forestal.</p>
							</div>
					    </div>
					    <div class="carousel-item">
					      	<img src="<?php echo url_for('imagenes/CONAGUA.png');?>" class="d-block w-100" alt="CONAGUA">
							<div class="carousel-caption d-md-block">
						      <h5><a href="https://www.gob.mx/conagua">Comisión Nacional del Agua (CONAGUA)</a></h5>
							  <p>Controla, regula, administra y protege las aguas nacionales de México.</p>
						   	</div>
					    </div>
					  </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Next</span>
					  </button>
					</div>
				</div>
			</div>
		</div>
		<p class="justificado">Así como tenemos organizaciones gubernamentales que protegen nuestro medio ambiente hay marcas que producen productos amigables con el medio ambiente te menciono algunas a continuación:</p>
		<div class="accordion" id="accordionExample">
		  <div class="accordion-item">
		    <h2 class="accordion-header">
		      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		        Stella McCartney
		      </button>
		    </h2>
		    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
		        <p class="justificado">Una diseñadora británica que busca que sus clientes usen prendas amigables con el medio ambiente y sin ser crueles con los animales.</p>
		      </div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <h2 class="accordion-header">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		        LEVI’S
		      </button>
		    </h2>
		    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
				<p class="justificado">Es una marca de jeans que se dio cuenta del agua desperdiciada al fabricar ropa buscando reducir hasta un 95% el agua en sus prendas.</p>
		      </div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <h2 class="accordion-header">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		        The Honest Company
		      </button>
		    </h2>
		    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
		        <p class="justificado">Tiene como objetivo principal crear productos libres de químicos y no tóxicos.</p>
		      </div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <h2 class="accordion-header">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		        Caffenio
		      </button>
		    </h2>
		    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
		        <p class="justificado">Es una empresa que en sus vasos certifica y garantiza que por cada árbol que corta se siembra otro, además sustituyo sus servilletas y portavasos por material 100% reciclable.</p>
		      </div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <h2 class="accordion-header">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
		        Ahluwalia
		      </button>
		    </h2>
		    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
		        <p class="justificado">Es una marca de ropa masculina que le da reciclaje a la ropa de segunda mano de Lagos dando le una vida nueva.</p>
		      </div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <h2 class="accordion-header">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
		        Natura Bisse
		      </button>
		    </h2>
		    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
		        <p class="justificado">Marca que en sus envases incluye el papel FSC de bosques incluso su sede de Barcelona recibe suministro eléctrico de una planta poligeneración ahorrando mucha energía casi un 50% y reduce emisiones de CO2 más de un 35%.</p>
		      </div>
		    </div>
		  </div>
		</div>
		<p class="justificado">Finalmente te diré algunos lugares donde puedes ser voluntariado y contribuir:</p>
		<ul>
			<li class="justificado"><b>Grupo modelo:</b> Tiene una campaña que se llama Desplastificate donde con la colaboración de voluntariados limpian playas.</li>
			<li class="justificado"><b>Greenpeace:</b> Es una organización en México que tiene programa de voluntariado para llevar mensajes a todo el mundo sobre la protección del medio ambiente.</li>
			<li class="justificado"><b>Comisión Nacional de Áreas Naturales Protegidas (Conanp):</b> Tiene un programa de voluntariados que tiene como objetivo hacer que la sociedad conozca y participe en el cuidado del ambiente.</li>
			<li class="justificado"><b>Worldpackers:</b> Es una comunidad que te da la oportunidad de viajar y poner tu granito de arena.</li>
		</ul>
	</div>
</main>
<?php include(SHARED_PATH . '/footer.php');?>