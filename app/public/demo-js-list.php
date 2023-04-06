
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MyMedicarePlans.org</title>
	<link rel="shortcut icon" href="/favicon.ico">


	<link rel="stylesheet" href="assets/css/style.css">

	<!-- <link rel="stylesheet" href="assets/demo/front.css"> -->
	<script src="//insurance.mediaalpha.com/js/serve.js"></script>
	
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="assets/demo/geoip2.js"></script>
	<script src="assets/demo/jquery.mask.min.js"></script>
	<script src="assets/demo/front.js"></script>

<style>
.bubble-info{
	padding:4px 10px!important;
	background:#fff;
	color: #000;
	position:absolute;
	z-index:999999;
	margin-top:112px!important;
	margin-left: -30px!important;
	border-radius:4px;
	font-size:.9em;
	box-shadow: 2px -2px 20px #00000030;
	border: 1px solid #cacaca;
	font-weight: normal;
    text-align: center;
    line-height: 1.2em;
}
.bubble-info:after {
	content: '';
	position: absolute;
	top: 0;
	left: 50%;
	width: 0;
	height: 0;
	border: 10px solid transparent;
	border-bottom-color: #fff;
	border-top: 0;
	margin-left: -10px;
	margin-top: -10px;
}

@media screen and (max-width: 768px){
.bubble-info{
    padding: 8px 10px!important;
    background: #ffffff;
    box-shadow: -5px 0px 14px #00000030;
    border: 1px solid #cacaca;
    color: #000;
    position: absolute;
    z-index: 999999;
    margin-top: 28px!important;
    margin-left: -120px!important;
    border-radius: 4px;
    font-size: .9em;
    font-weight: normal;
    text-align: center;
    line-height: 1.2em;
	}
.bubble-info:after{
	content: '';
	position: absolute;
	left: 0;
	top: 50%;
	width: 0;
	height: 0;
	border: 10px solid transparent;
	border-right-color: #fff;
	border-left: 0;
	margin-top: -10px;
	margin-left: -10px;
}	
}

@media screen and (max-width: 640px){
.bubble-info{
    padding: 8px 10px!important;
    background: #ffffff;
    box-shadow: 0px 6px 14px #00000030;
    border: 1px solid #cacaca;
    color: #000;
    position: absolute;
    z-index: 999999;
	/*
    margin-top: -14px!important;
    margin-left: 0px!important;*/
	margin-top: 73px!important;
    right: 8px!important;
    border-radius: 4px;
    font-size: .9em;
    font-weight: normal;
    text-align: center;
    line-height: 1.2em;
	}
.bubble-info:after{
	content: '';
	position: absolute;
	top: 0;
	left: 50%;
	width: 0;
	height: 0;
	border: 10px solid transparent;
	border-bottom-color: #fff;
	border-top: 0;
	margin-left: -10px;
	margin-top: -10px;
}	

.max-ad-listings th:first-child {
    display: none;
}

.max-ad-listings th:nth-child(2) {
    width: 20%!important;
}

.max-ad-listings th:nth-child(3) {
    display: none;
}

.max-ad-listings th:nth-child(4) {
    width: 20%!important;
}

#ma-table-header tr {
    padding-bottom: 20px!important;
}

#page-4 .max-ad-listings thead#ma-table-header th {
    padding: 11px!important;
}

}

</style>
</head>

<body>


	<div id="cta" data-text="View Plans"></div>
	<!-- lead or nolead -->
	<div id="mode" data-id="lead"></div>

	<div class="container" id="medigapQuiz">
		<div class="row">
			<div class="col-12 col-xl-9 mx-auto">

				<!-- Navbar -->
				<?php include 'layout/navbar.php';?>
				<!-- Navbar -->					<!-- <form> -->
					

					<!--page four-->
					<div id="page-4" data-page="4" class="page hidden pt-4 ">
						<h5>We Found
							<span id="plansFound">Several</span>
							Medicare Plans That Match Your Healthcare Needs</h5>
						<div id="plans"></div>
						<div class="col-12 mt-4 mb-4">
						<h5 style="margin:20px">Speak with a licensed Medicare specialist: (844) 395-0891</h5>
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
				<?php include 'layout/footer.php';?>
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