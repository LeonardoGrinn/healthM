
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">


	<link rel="stylesheet" href="assets/css/style.css">

	
	<script src="//insurance.mediaalpha.com/js/serve.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="assets/demo/geoip2.js"></script>
	<script src="assets/demo/jquery.mask.min.js"></script>
	<script src="assets/demo/front.js"></script>
</head>

<body>


	<div id="cta" data-text="View Plans"></div>
	<!-- lead or nolead -->
	<div id="mode" data-id="lead"></div>

	<div class="container" id="medigapQuiz">
		<div class="row">
			<div class="col-12 col-xl-9 mx-auto">

				<!-- Navbar -->
				<?php include 'layout/navbar.php'; ?>
				<!-- Navbar --> <!-- <form> -->


				<!--page four-->
				<div id="page-4" data-page="4" class="page hidden pt-4 ">

					<!-- Margin -->
					<br/><br/><br/><br/>
					<!-- Margin -->
					<center>
						<h1>We Found
							<span id="plansFound">Several</span>
							Medicare Plans That Match Your Healthcare Needs
						</h1>
					</center>

					<br/><br/>
					<div id="plans"></div>
					<div class="col-12 mt-4 mb-4">
						<center>
							<h2 style="margin:20px">Speak with a licensed Medicare specialist: <a href="tel:8559693952" style="text-decoration: none; color:inherit;"> <i class="fa-solid fa-phone-volume" style="transform: translateY(2.5px); margin-right: 7px;"></i>855-969-3952</a></a></h2>
						</center>
						<!--<a href="" class="btn btn-primary back">
								<i class="fas fa-angle-left"></i> Back</a>-->
					</div>
				</div>
				<input id="leadid_token" name="universal_leadid" type="hidden" value="" />
				<input type="hidden" name="zipcode" id="zipcode">

				<!--end page four-
					<script id="LeadiDscript" type="text/javascript">
						// <!--
						(function () {
							var s = document.createElement('script');
							s.id = 'LeadiDscript_campaign';
							s.type = 'text/javascript';
							s.async = true;
							s.src = '//create.lidstatic.com/campaign/fd06c57f-5c45-477d-cb4b-cec9937d07d7.js?snippet_version=2';
							var LeadiDscript = document.getElementById('LeadiDscript');
							LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
						})();
						// -->
				</script>
				<noscript>
					<img src='//create.leadid.com/noscript.gif?lac=ddfae2e1-bcd3-c902-36cb-ad20bd1a3a2f&lck=fd06c57f-5c45-477d-cb4b-cec9937d07d7&snippet_version=2' />
				</noscript>
				<!-- </form> -->

			</div>
			<!--end quiz-->

			<!-- Footer -->
			<?php include 'layout/footer.php'; ?>
			<!-- Footer -->

		</div>
	</div>
	</div>
</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script>

</html>