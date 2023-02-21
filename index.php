<?php require_once('inc/header.php') ?>
<body>
<div class="Main-agile">
	<div class="banner">                           <!-- EMERGENLINE -->
		<div class="container">
			<div class="col-md-4 agile1">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="stroke">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li class="dropdown menu__item menu__item--current">
									<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patient<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="emergency_form.php">Emergency Admit</a></li>
										<li><a href="patient_registration.php">Patient Registration</a></li>
									</ul>
								</li>
								<li class="dropdown menu__item menu__item--current">
									<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hospital<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="doctors_in.php">Hospital Location</a></li>
										<li><a href="doc_login/log.php">DOCTORS LOGIN</a></li>
									</ul>
								</li>
	
							</ul>
						</nav>
					</div>
				</nav>
			</div>
			<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
			<div class="col-md-4 logo">
			<h style='color:red;'font-family: 'Oswald', sans-serif;><b><font size="+2">PRESENTED BY FRICK BRAINS</font></b><h>
				<div class="logo-w3l">
				 <i class="fa fa-stethoscope" aria-hidden="true"></i>
				</div>
				<h1 style='color:red;'>EMERGENLINE</h1>
			</div>
			<div class="clearfix"> </div>
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						<li>
							<div class="w3layouts-banner-top">
								<div class="container">
									<div class="agileits-banner-info">
										<h3 style='color:red;'>EMERGENLINE</h3>
										<p style='color:pink;'>We Provide the fastest emergency services there is!</p>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top">
								<div class="container">
									<div class="agileits-banner-info">
										<h3 style='color:red;'>Don't worry when EMERGENLINE is here</h3>
										<p style='color:pink;'>Medical Services that you can Trust.</p>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top">
								<div class="container">
									<div class="agileits-banner-info">
										<h3 style='color:red;'>EMERGENCY</h3>
										<p style='color:pink;'>We provide doctors 24/7</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>		
</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

				<div class="clearfix"> </div>
		</div>


<?php require_once('inc/footer.php') ?>
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script> 
			<script src="js/responsiveslides.min.js"></script>
			<script>
						$(function () {
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });

						});
			</script>
			<script>
								
								$(function () {
								  
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });

								});
</body>
</html>
