<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nitro &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
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

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<!-- <aside>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.html"><alt="DATA ANGGOTA KOPERASI CERIA"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
				</ul>
			</nav>

		</aside>
 -->

		<div id="fh5co-main">
		<br>
				<br>
				<br>

			<div class="fh5co-narrow-content">
				<h2 class="text-center" data-animate-effect="fadeInLeft">DATA ANGGOTA</h2>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				<?php foreach ($user as $key): ?>
				<div class="text-center row animate-box" data-animate-effect="fadeInLeft">
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h2 class="section-heading text-black"><?php echo $key->nama_anggota ?></h2>
						<hr class="light my-4">
						<p class="text-faded mb-4">
						<a href="CtrUser/view/<?php echo $key->id_anggota ?>" style="color:black;">
						 <img src="img/<?php echo $key->img_anggota; ?>" alt="image" width="200">
						 </a>
					</div>

					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	</div>
	</p>
	</div>
	</div>
	</div>
	</div>
	</div>

	<!-- jQuery -->
	<script src="assets/assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/assets/js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="assets/assets/js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="assets/assets/js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/assets/js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="assets/assets/js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="assets/assets/js/main.js"></script>

	</body>
</html>
