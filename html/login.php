		<header id="header">
			<nav class ="navbar navbar-default navbar-fixed-top" id="navBar" style="background-image: url(images/res/bg_4.jpg);">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-icon" href="index.php"><img src="images/logo.png" alt="logo"></a>
					</div>
				
					<div class="collapse navbar-collapse" id="homeNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php#" id="colorHover"><span class="glyphicon glyphicon-home"></span> Home</a></li>
							<li><a href="index.php#aboutUs" id="colorHover"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
							<li><a href="signup.php" id="colorHover"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>	
		
		<div class="page-header" id="content" style="background-image: url(images/res/bg_2.jpg);">
			<div class="row" id="content">
				<div class="col-lg-7" align="center">
					<img src="images/info.png" class="img-responsive">
				</div>
				<div class="col-lg-2"></div>
				<div class="col-lg-3" align="left">
					<section class="no-margin" id="login">
						<h2 align="center"> <strong>Login<strong></h2>
							<form role="form">
								<div class="form-group">
									<label for="studno"> Student No.: </label>
									<input type="number" class="form-control" id="studno">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" id="pwd">
									<a href="changePassword.php">Forgot your password? </a>
								</div>
								<div class="checkbox">
									<label><input type="checkbox"> Remember me</lable>
								</div>
								<button type="submit" class="btn btn-primary">Login</button>
							</form>
					</section>
				</div>
			</div>
		</div>
		 
		<section class="panel" id="aboutUs" background="#f1f1f1">	
				<div class="row">
					<div class="col-lg-12" align="center">
						<h2><strong> The Gang of Four <strong></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4" align="center">
						<img src="images/gang_of_four.png" class="img-responsive">
					</div>
					<div class="col-lg-8" id="content">
						<p class="lead" align="justify"><strong>An Automated Hybrid Management System for Interns' Documentation.</strong>
						<br><small> It is also known as the <i>Internship Progress Tracker</i>. A case study in Introduction to Mobile Application Development (CS 414A3 and CS 414A3L) 
						and Advanced Mobile Application Development (CS CS 422A4 and CS 422A4L) created by the the developer team, The Gang of Four, composed of: 				
						
						<div class="row" align="center">
							<div class="col-lg-3">
								<img src="images/users/jerome.png" class="img-circle" width="90%"> 
								<br><h4>Jerome Ian C. Llaguno</h4>
								Leader | Lord of Backend 										
							</div>
							<div class="col-lg-3">
								<img src="images/users/brian.png" class="img-circle" width="90%"> 
								<br><h4>Brian B. Caldona</h4>
								Master of Documentation
							</div>
							<div class="col-lg-3">
								<img src="images/users/mikkle.png" class="img-circle" width="90%">
								<br><h4>Mikkle P. Bondoc</h4>
								App Front-end Developer
							</div>
							<div class="col-lg-3">
								<img src="images/users/marnie.jpg" class="img-circle" width="90%">  
								<br><h5>Marnie Bright R. Palapar</h5>
								Web Front-end Developer
							</div>
						</div>
						</p>
					</div>	
				</div>
		</section>