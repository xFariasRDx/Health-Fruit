
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"><i class="icon-cart"></i>Health & Fruit</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php">Inicio</a></li>
						
						
							<li><a href="blog.php">Pedidos</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/ftbg.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Pequeñas unidades</a>
								      </li>
								    
								      <li role="presentation">
								    	   <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Paquetes</a>
								      </li>
								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									<form action="insertar2.php" method="POST">
									<div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">De:</label>
													<input type="text" class="form-control" name="ciudad" id="from-place" placeholder="Santo Domingo, Este"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">A:</label>
													<input type="text" class="form-control" name="destino" id="to-place" placeholder="Puerto Plata"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Salida:</label>
													<input type="text" class="form-control" name="salida" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Llegada:</label>
													<input type="text" class="form-control" name="llegada" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Fruta:</label>
													<select type="text" name="frutas" class="cs-select cs-skin-border">
														<option value="" disabled selected>Piña</option>
														<option value="Mango">Mango</option>
														<option value="Manzana">Manzana</option>
														<option value="Pera">Pera</option>
														<option value="Piña">Piña</option>
														<option value="Banana">Banana</option>
														<option value="Kiwi">Kiwi</option>
														<option value="Limón">Limón</option>
														<option value="Chinola">Chinola</option>
														<option value="Uva">Uva</option>
													</select>
												</section>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Cantidad:</label>
													<select type="text" name="cantidad" class="cs-select cs-skin-border">
														<option value="" disabled selected>0</option>
														<option value="5">5</option>
														<option value="10">10</option>
														<option value="15">15</option>
														<option value="20">20</option>
														<option value="25">25</option>
														<option value="30">30</option>
														<option value="35">35</option>
													</select>
												</section>
											</div>
										
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Guardar">
											</div>
										</div>
									 </div>
</form>
									

									 <div role="tabpanel" class="tab-pane" id="packages">
									 <div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">De:</label>
													<input type="text" class="form-control" id="from-place" placeholder="Santo Domingo, Este"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">A:</label>
													<input type="text" class="form-control" id="to-place" placeholder="Puerto Plata"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Salida:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Llegada:</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Fruta:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>Piña</option>
														<option value="economy">Mango</option>
														<option value="first">Manzana</option>
														<option value="business">Pera</option>
														<option value="first">Piña</option>
														<option value="business">Banana</option>
														<option value="first">Kiwi</option>
														<option value="business">Limón</option>
														<option value="first">Chinola</option>
														<option value="business">Uva</option>
													</select>
												</section>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Caja de 40 unidades:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>0</option>
														<option value="economy">1</option>
														<option value="first">2</option>
														<option value="business">3</option>
														<option value="first">4</option>
														<option value="business">5</option>
														<option value="first">6</option>
														<option value="business">7</option>
													</select>
												</section>
											</div>
										
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Guardar">
</div>
										</div>
									 </div>
									</div>

								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									
									<h2>Health & Fruit</h2>
									<h3>Desde Santo Domingo a toda la República Dominicana</h3>
									<span class="price">Desde $50 c/u</span>
									<p>Minimo de envio $250/ /Minimo por paquete $2,000
									</p>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Quienes Somos?</h3>
						<p>Tienda de frutas tropicales en Santo Domingo, Este. Ofrecemos una variedad de frutas frescas.</p>
					</div>
				</div>
				
									
				

	

					
		
		<div id="fh5co-destination">
			<div class="tour-fluid">
				<div class="row">
					<div class="col-md-12">
						<ul id="fh5co-destination-list" class="animate-box">
							<li class="one-forth text-center" style="background-image: url(images/mangobc.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Mango</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/perabc.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Pera</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/manzanabc.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Manzana</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/pibc.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Piña</h2>
									</div>
								</a>
							</li>

							<li class="one-forth text-center" style="background-image: url(images/kiwibc.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Kiwi</h2>
									</div>
								</a>
							</li>
							<li class="one-half text-center">
								<div class="title-bg">
									<div class="case-studies-summary">
										<h2>Health & Fruit</h2>
									
									</div>
								</div>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/bananabc.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Banana</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/limonbc.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Limón</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/chinolabc.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Chinola</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/uvabc.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Uva</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/fresabc.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Fresa</h2>
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>
			</div>
		</div>

		
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/frutasbc.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">30% de Descuento a nuestro producto al por mayor

									</a></h3>
									
									<p>Health & Fruit es una frutería que vende productos frescos y otros artículos de alimentación. Tenemos una gran variedad de opciones de frutas.</p>
									
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/frtbg.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Frutería Dominicana: Fruta real en unidades y paquetes</a></h3>
									
									<p>Nuestra frutería dominicana ofrece las frutas y verduras de mejor calidad de todo el Caribe. Puede comprar por unidades o por paquete, y ofrecemos una amplia variedad de frutas tropicales.</p>
									
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/fruta2bg.jpg" alt=""></a>
							<div class="blog-text">
								<div class="prod-title">
									<h3><a href="#">Frutería - Fresco y Delicioso</a></h3>
									
									
								
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>

			

			</div>
		</div>
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Quienes Somos?</h3>
							<p>Tienda de frutas tropicales en Santo Domingo, Este. Ofrecemos una variedad de frutas frescas.</p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Home</h3>
							<ul>
								<li><a href="index.php">Inicio</a></li>
								
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Inventario</h3>
							<ul>
								<li><a href="blog.php">Pedidos</a></li>
							
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Diganos</h3>
							<ul>
								<li><a href="contact.php">Contacto</a></li>
							
							</ul>
					
						</div>
					</div>
					
				</div>
			</div>
		</footer>

	

	
	<!-- END fh5co-page -->

	
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

