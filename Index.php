<DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Embreuš Photography</title>
		<!--CSS-->
		<!--Bootstrap-->
		<!-- Latest compiled and minified CSS -->
<!--		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!--	 Font awsome -->		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">		
		<!-- Blma CSS -->
<!--		<link rel="stylesheet" href="css/bulma.min.css"> -->

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css">		
</head>	
<body>
	<!-- HEADER -->
	<header>
		<div class='container-fluid'>
			<div class='jumbotron text-center'>
				<h1>Embreuš Photography</h1>
				<p>Amater photography site<p>
			</div>
		</div>
	</header>

	<nav class='navbar navbar-inverse navbar-fixed-top'>
		<div class='container-fluid'>
			<header class='navbar-header'>
				<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
				<a class='navbar-brand' href='index.php'>Home page</a>
			</header>
			<div class='collapse navbar-collapse' id='myNavbar'>
			<ul class='nav navbar-nav'>
				<li><a href='#'>Portfolio</a></li>
				<li><a href='#'>Contact</a></li>
				<li><a href='#'>About</a></li>
			</ul>
			
			<ul class='nav navbar-nav navbar-right'>
				<li>
					<form class='navbar-form' action='#' method='POST'>
						<input type='text' class='form-control' placeholder='Search the site'>
						<button type='submit' class='btn-primary'>
							<span class='glyphicon glyphicon-search'></span>
						</button>
				</li>
			</ul>
		</div>				
	</nav>
	<!-- MAIN -->
	<main>		
		<div class='container'>
			<!-- Carousel -->
			<div id="carouselPortfolio" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-inner">
			  	<div class="carousel-item active">
      				<img src="pic\img0001.jpg" class="d-block w-100" alt="img0001">
    			</div>
				<div class="carousel-item">
      				<img src="pic\img0002.jpg" class="d-block w-100" alt="img0002">
    			</div>
    			<div class="carousel-item">
      				<img src="pic\img0003.jpg" class="d-block w-100" alt="img0003">
    			</div>
			  <a class="carousel-control-prev" href="#carouselPortfolio" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselPortfolio" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</main>
	<!-- FOOTER -->
	<footer class='text-center'>
		<nav class='navbar-inverse navbar-bottom'>
			<div class='container-fluid'>
				<ul class='nav navbar-nav'>
					<li class='navbar-text'>Copyight &copy; Marko Embreuš</li>
					<li><a href='#'><i class='fab fa-facebook'></i></a></li>
					<li><a href='#'><i class='fab fa-google-plus-square'></i></a></li>
					<li><a href='#'><i class='fas fa-envelope'></i></a></li>
				</ul>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='#'><i class='fas fa-sitemap'></i></a></li>
					<li><a href='#'>Terms &amp; Conditions</a></li>					
				</ul>
			</div>
		</nav>
	</footer>
	<!-- JAVASCRIPT -->
	
	<!--JQuery-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
	
	<!-- Latest compiled and minified JavaScript -->	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!--Custom css-->	
</body>
</html>