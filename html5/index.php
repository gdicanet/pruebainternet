<!DOCTYPE HTML>
<html>
	<head>
		<title>Test de Internet</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<h1>Test Internet</h1>
					<p>By Abraham Rico</p>
				</header>
				<footer>
				<?php 
					//function pingAddress($ip) {
    					$pingresult = exec("/bin/ping -c 3 8.8.8.8", $outcome, $status);
							if (0 == $status)
  	  						echo '<a href="#banner" class="button style2 scrolly">Probar la conexion</a>';
    						else
    							echo '<a href="#failbanner" class="button style2 scrolly">Probar la conexion</a>';
    				 	//pingAddress("8.8.8.8");
				?>
				</footer>
			</section>
		
		<?php
    			if (0 == $status) {
        	echo '
				<section id="banner">
				<header>
					<h2>Conexion exitosa!</h2>
				</header>
				<p>Tiene una salida a internet con una latencia aceptable</p>
				<footer>
					<a href="#container" class="button style2 scrolly">Enviar test</a>
				</footer>
				</section>
        		';
    		}	 
    		else {
        	echo '<section id="failbanner">
				<header>
					<h2>Conexion fallida!</h2>
				</header>
				<p>No tiene una salida a internet </p>
				<footer>
					<a href="#container" class="button style2 scrolly">Enviar test</a>
				</footer>
				</section>';
    		}
		
		?>
		
		<!-- Contact -->
			<article id="container" class="container box style3">
				<header>
					<h2>Enviar test a GDLIcanet</h2>
					<p>Le agradecemos se comunique con GDLIcanet.</p>
				</header>
			</article>
		
		
		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
				<li><a href="#" class="fa fa-facebook solo"><span>Facebook</span></a></li>
				<li><a href="#" class="fa fa-google-plus solo"><span>Google+</span></a></li>
				<li><a href="#" class="fa fa-pinterest solo"><span>Pinterest</span></a></li>
				<li><a href="#" class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
				<li><a href="#" class="fa fa-linkedin solo"><span>LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; GDLIcanet. Todos los derechos reservados.</li>
					<li>Diseño: <a href="http://abricolabs.com/">Abraham Rico Moreno</a></li>
				</ul>
			</div>
		</section>

	</body>
</html>
