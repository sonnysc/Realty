<!DOCTYPE html>
<html lang="en">
	 
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Document</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- No recuerdo si era del rango de precios -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- script de num de pagina -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	 
	 <link rel="stylesheet" href="views/css/navbar.css">
	 <link rel="stylesheet" href="views/css/index2.css">

	 
</head>

<?php include 'views/navbar1.html'?>

<body>

	<!-- Cabezera -->
	<div class="busqueda">
		<!-- barra de búsqueda -->
		<div class="barra-busqueda">
			<form method="post">
				<h1>Encuentra la casa que estabas buscado</h1>

				<!-- barra de búsqueda -->
				<div class=" input-group mb-3">
					<span class="input-group-text" id="basic-addon1">
						<select class="form-select" aria-label="Default select example">
							<option value="comprar">Comprar</option>
							<option value="rentar">Rentar</option>
							<option value="traspasar">Traspasar</option>
						</select>
					</span>
					<input type="text" class="form-control" aria-label="" aria-describedby="basic-addon2" placeholder="ej. Dirección, Ciudad, CP" id="busqueda">
					<span class="input-group-text" id="basic-addon1" ><a href="views/propiedades.php" id="buscar">Buscar</a></span>
				</div>

			</form>
		</div>

	</div>
	

	<!-- Banner de venta -->
	<div class="banner-venta">
		<div>
			<h2>Vende tu propiedad con la confianza Realty</h2>
			<p>Buscas vender tu propiedad de la manera más segura y confiable. Contacta con nuestro equipo
				y encuentra la mejor estrategia de venta con el equipo más preparado.
			</p>
			<div id="boton-venta">
				<a id="viewp" href="views/propiedad-ficha.php" class="btn btn-primary" >Comienza aquí</a>
			</div>
		</div>
	</div>

	<h3>Ofertas destacadas</h3>

	<!-- Grupo de cartas -->
	<div class="card-deck">
		
		<!-- card 1  -->
		<div class="card">
			<!-- carousel -->
			<div id="slider-1" class="carousel slide">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="views/img/habitacio_mazatlan_1.png" class="d-block w-100" alt="">
					</div>
					<div class="carousel-item ">
						<img src="views/img/habitacio_mazatlan_2.png" class="d-block w-100" alt="">
					</div>
					<div class="carousel-item ">
						<img src="views/img/habitacio_mazatlan_3.png" class="d-block w-100" alt="">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#slider-1"
					data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#slider-1"
					data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
			<!-- fin carousel  -->

			<div class="card-body">
				<h5 class="card-title">Alojamiento entero: vivienda rentada en Mazatlán, México</h5>
				<p class="card-text">8 huéspedes - 4 habitaciones - 6 camas - 3 baños</p>
				<!-- precios de propiedades  -->
				<p class="precios"><strong>$2100</strong> por noche</p>
				<!-- boton ver propiedades  -->
				<a id="viewp" href="views/propiedad-ficha.php" class="btn btn-primary">Ver propiedad</a>
			</div>	
		</div>

		<!-- card 2  -->
		<div class="card">
				<!-- carousel -->
				<div id="slider-2" class="carousel slide">
					<div class="carousel-inner">
						<div class="carousel-item active">
								<img src="views/img/segunda_habitacion_mzt_1.png" class="d-block w-100" alt="">
						</div>
						<div class="carousel-item ">
								<img src="views/img/segunda_habitacion_mzt_2.png" class="d-block w-100" alt="">
						</div>
						<div class="carousel-item ">
								<img src="views/img/segunda_habitacion_mzt_3.png" class="d-block w-100" alt="">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#slider-2"
						data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#slider-2"
						data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
				<!-- fin carousel  -->

				<div class="card-body">
					<h5 class="card-title">Alojamiento entero: vivienda rentada en Mazatlán, México</h5>
					<p class="card-text">4 huéspedes - 2 habitaciones - 2 camas - 2 baños</p>
					<!-- precios de propiedades  -->
					<p class="precios"><strong>$2360</strong> por noche</p>
					<!-- boton ver propiedades  -->
					<a id="viewp" href="#" class="btn btn-primary">Ver propiedad</a>
				</div>
		</div>

		<!-- card 3  -->
		<div class="card">
				<!-- carousel -->
				<div id="slider-3" class="carousel slide">
					<div class="carousel-inner">
						<div class="carousel-item active">
								<img src="views/img/habitacio_mazatlan_3.png" class="d-block w-100" alt="">
						</div>
						<div class="carousel-item ">
								<img src="views/img/habitacio_mazatlan_1.png" class="d-block w-100" alt="">
						</div>
						<div class="carousel-item ">
								<img src="views/img/habitacio_mazatlan_2.png" class="d-block w-100" alt="">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#slider-3"
						data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#slider-3"
						data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
				<!-- fin carousel  -->

				<div class="card-body">
					<h5 class="card-title">Alojamiento entero: condominio en Mazatlán, México</h5>
					<p class="card-text">8 huéspedes - 4 habitaciones - 6 camas - 3 baños</p>
					<!-- precios de propiedades  -->
					<p class="precios"><strong>$1820</strong> por noche</p>
					<!-- boton ver propiedades  -->
					<a id="viewp" href="#" class="btn btn-primary">Ver propiedad</a>
				</div>
		</div>

	</div>
	

	<!-- Mensaje de bienvenida -->
	<div class="row" id="bienvenida">
		<img src="views/img/realty_logo_r.svg" id="logo-bienvenida">
		<h2>BIENVENIDO A REALTY: LA PUERTA DE ENTRADA A TU NUEVO HOGAR</h2>
		<p>
			En realty, entendemos que un hogar no es solo un hogar, es un sueño hecho realidad. Nuestra misión es
			ayudarte a encontrar la propiedad perfecta que se ajuste a tu estilo de vida y nececidades. Con años
			de experiencia en bienes raíces, ofrecemos una amplia gama de opciones que van desde lujosas recidencias
			hasta acogedores departamentos, todos diseñados para brindate la vida que mereces.
		</p>
	</div>

	<h3>Cerca de ti</h3>

	<div class="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.2490372045127!2d-104.55646302416747!3d24.022281678283395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb0afe49269e1%3A0x43644f8b73e439ad!2sUniversidad%20Polit%C3%A9cnica%20de%20Durango!5e0!3m2!1sen!2smx!4v1699982463095!5m2!1sen!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

	

</body>

<?php include 'views/footer.html'?>

</html>