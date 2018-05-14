<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KOPERASI SIMPAN PINJAM CERIA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />


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
	<link rel="stylesheet" href="../../assets/user/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../../assets/user/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../../assets/user/css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../../assets/user/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../../assets/user/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="../../assets/user/css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.html"><img src="assets/user/images/logo.png" alt="KOPERASI SIMPAN PINJAM CERIA"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
				</ul>
			</nav>

			

		</aside>

		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
			<?php foreach ($data as $x): ?>
				<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<img src=img/<?php echo $x->img_anggota; ?>></center><br/>
				<center><?php echo $x->nama_anggota; ?><hr/>
				<br><b><?php echo $x->alamat_anggota;?><br/></b>
				<br><b><?php echo $x->tempat_lahir_anggota;?></b>,
				<b><?php echo $x->tanggal_lahir_anggota;?><br></b>
				<?php echo $x->jk_anggota;?><br/>
			<?php endforeach ?>
		</div>
		
	</div>
				</div>


			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="../../assets/user/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../../assets/user/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../../assets/user/js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="../../assets/user/js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="../../assets/user/js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="../../assets/user/js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="../../assets/user/js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="../../assets/user/js/main.js"></script>

	</body>
</html>

