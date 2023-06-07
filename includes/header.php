<?php
	$page = $home = $about = $contact = "";

	if (isset($_GET['gp']) && $_GET['gp'] != "") {
		$page = $_GET['gp'];

		switch ($page) {
			case 'hm':
				$page = "Home";
				$home = "active";
				break;
			case '':
				$page = "Home";
				$home = "active";
				break;
			case 'at':
				$page = "About";
				$about = "active";
				break;
		
			default:
				$page = "Contact";
				$contact = "active";
				break;
		}
	}else {
		$page = "Home";
		$home = "active";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $page; ?> :: Nossh Inc.</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- banner slider css -->
	<link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<!-- //banner slider css -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->

	<link rel="icon" type="text/css" href="images/logo.png">
	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- header -->
<div class="header-top">
	<header>
		<div class="top-head ml-lg-auto text-center">
			<div class="row mr-0">

				<div class="col-lg-4">
				</div>
				<!-- <div class="col-md-3 col-4 sign-btn">
					<a href="#" data-toggle="modal" data-target="#exampleModalCenter">
						<i class="fas fa-lock"></i> Sign In</a>
				</div>
				<div class="col-md-3 col-4 sign-btn">
					<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
						<i class="fas fa-user"></i> Register</a>
				</div> -->
				<div class="search col-md-2 col-4">
					<!-- <div class="mobile-nav-button">
						<button id="trigger-overlay" type="button">
							<i class="fas fa-search"></i>
						</button>
					</div> -->
					<!-- open/close -->
					<!-- <div class="overlay overlay-door">
						<button type="button" class="overlay-close">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<form action="#" method="post" class="d-flex">
							<input class="form-control" type="search" placeholder="Search here..." required="">
							<button type="submit" class="btn btn-primary submit">
								<i class="fas fa-search"></i>
							</button>
						</form>
					</div> -->
					<!-- open/close -->
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="logo">
				<h1>
					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png"> Nossh Inc.</a>
				</h1>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<i class="fas fa-bars"></i>
				</span>

			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-lg-auto text-center">
					<li class="nav-item <?php echo $home;?>">
						<a class="nav-link" href="index.php?gp=hm">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item <?php echo $about;?>">
						<a class="nav-link" href="about.php?gp=at">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="features.php?gp=ft" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Our Features
							<i class="fas fa-angle-down"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="" title="">Web</a>
							<a class="dropdown-item" href="#" title="">Mobile App</a>
							<a class="dropdown-item" href="#">Training</a>
							<a class="dropdown-item" href="#">Sales</a>
						</div>
					</li>
					<li class="nav-item <?php echo $contact;?>">
						<a class="nav-link" href="contact.php?gp=ct">Contact</a>
					</li>
				</ul>

			</div>
		</nav>
	</header>
</div>
<!-- header -->