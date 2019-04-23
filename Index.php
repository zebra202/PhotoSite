<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Embreuš Photography</title>
		<!--CSS-->
		<!--Bootstrap 4-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
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

	<!--<nav class='navbar navbar-inverse navbar-fixed-top'>
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
	</nav>	-->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  		<div class='container-fluid'>
			<!-- Toggler/collapsibe Button -->
  			<header class='navbar-header'>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class='navbar-brand' href='index.php'>Home page</a>
			</header>
	  		<!-- Navbar links -->
	  		<div class="collapse navbar-collapse" id="myNavbar">  			
	    		<ul class="navbar-nav">
	      			<li class="nav-item">
	        			<a class="nav-link" href="#">Portfolio</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="#">Contact</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="#">About</a>
	      			</li> 
	    		</ul>
 
 				<form class="form-inline my-2 my-lg-0" action='#' method='POST'>
					<input class="form-control mr-sm-2" type="search the site" placeholder="Search" aria-label="Search">
      				<button type='submit' class='btn-primary'>
							<span class='fa fa-search'></span>
						</button>
    			</form>	    		
	  		</div> 
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
		<nav class='navbar navbar-expand-md bg-dark navbar-dark'>
			<div class='container-fluid'>
				<ul class='nav navbar-nav navbar-left'>
					<li class='navbar-text'>Copyight &copy; Marko Embreuš</li>
				</ul>
				<ul class='nav navbar-nav navbar-center'>
					<a class="nav-link" href='#'><i class='fab fa-facebook'></i></a>
					<a class="nav-link" href='#'><i class='fab fa-google-plus-square'></i></a>
					<a class="nav-link" href='#'><i class='fas fa-envelope'></i></a>
				</ul>
				<ul class='nav navbar-nav navbar-right'>
					<a class="nav-link" href='#'><i class='fas fa-sitemap'></i></a>
					<a class="nav-link" href='#'>Terms &amp; Conditions</a>				
				</ul>
			</div>
		</nav>
	</footer>
	<!-- JAVASCRIPT -->
	
	<!--JQuery-->
	<script src="js/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->	
	<script src="js/bootstrap.min.js"></script>
	<!--Custom css-->	
</body>
</html>