	<!-- Header Start -->
	<header class="header-v3">
		<!-- Header Topbar Start -->
		<div class="header-top-v3">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-8">
						<div class="site-slogun">
							<span>We provied best <a href="#">finance</a> services</span>
						</div>
					</div>				
					<div class="col-md-3 col-sm-4">
						<div class="soical-link">
							<ul>
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Topbar End -->
		<!-- Header Top Bottom Start -->
		<div class="header-top-bottom">
			<div class="container">
				<div class="row">
					<!-- Logo Start -->
					<div class="col-md-3 col-sm-3 col-xs-8">
						<div class="logo">
							<a href="index.html" class="site-sticky-logo"><img src="assets/img/home-3-logo.png" alt=""/></a>
						</div>
					</div>	
					<!-- Logo End -->					
					<div class="col-md-9">
						<div class="contact-info-inner">
							<div class="info-intro">
								<div class="info-icon">
									<i class="fa fa-map-marker"></i>
								</div>							
								<div class="info-text">
									<h5>Opening Hour </h5>
									<span><span class="opening-time">Sat-Fri :</span>08.00am - 05:00 Pm</span>
								</div>
							</div>						
							<div class="info-intro">
								<div class="info-icon">
									<i class="fa fa-envelope-o"></i>
								</div>							
								<div class="info-text">
									<h5>Email Address</h5>
									<a href="mailto:yourdomain@gmail.com">info@exem.com</a>
								</div>
							</div>					
							<div class="info-intro">
								<div class="info-icon">
									<i class="fa fa-clock-o"></i>
								</div>							
								<div class="info-text">
									<h5>any emergency</h5>
									<span>+124 325 9645</span>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>		
		<!-- Header Top Bottom End -->
		<!-- Main Bar Start -->
		<div class="custom-nav-menu custom-nav-no-padding">
			<!-- Start Navigation -->
			<nav class="navbar navbar-default white no-background bootsnav">
				<!-- Start Top Search -->
				<div class="top-search">
					<div class="container">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
							<input type="text" class="form-control" placeholder="Search">
							<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
						</div>
					</div>
				</div>
				<!-- End Top Search -->

				<div class="container">            
					<!-- Start Atribute Navigation -->
					<div class="attr-nav">
						<ul>
							<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
							<li class="applay-button"><a href="#">CONSULTAION</a></li>
						</ul>
					</div>
					<!-- End Atribute Navigation -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
					 <?php 
						$nav_menu = 'primary';
						$nav_classes[]='nav navbar-nav navbar-left';
						Influen_Template::menu( $nav_menu, $nav_classes );
					 ?>

					</div><!-- /.navbar-collapse -->
				</div>   
			</nav>
			<!-- End Navigation -->
		</div>
		<!-- Main Bar End -->
	</header>
	<!-- Header End -->	