<?php
session_start();
//step 1
/*
$_SESSION['State']=$State=$_REQUEST['State'];
$_SESSION['City']=$City=$_REQUEST['City'];
$_SESSION['Zip']=$Zip=$_REQUEST['Zip'];
$_SESSION['address']=$address=$_REQUEST['address'];
$_SESSION['MortgageYearsRemaining']=$MortgageYearsRemaining=$_REQUEST['MortgageYearsRemaining'];
$_SESSION['Monthly_Payment']=$Monthly_Payment=$_REQUEST['Monthly_Payment'];
$_SESSION['Term']=$Term=$_REQUEST['Term'];*/
$tob= $_SESSION['Tobacco'];

//step 2
$_SESSION['HeightF'] = $HeightF=$_REQUEST['HeightF'];
$_SESSION['HeightI'] = $HeightI=$_REQUEST['HeightI'];
$_SESSION['Weight'] = $Weight=$_REQUEST['Weight']; 
$_SESSION['Gender'] = $Gender=$_REQUEST['Gender'];
$_SESSION['Birth_Month'] = $Birth_Month=$_REQUEST['Birth_Month'];
$_SESSION['Birth_Day'] = $Birth_Day=$_REQUEST['Birth_Day']; 
$_SESSION['Birth_Year'] = $Birth_Year=$_REQUEST['Birth_Year']; 
$_SESSION['Tobacco_Use'] = $Tobacco_Use=$_REQUEST['Tobacco_Use']; 
$_SESSION['Major_Health_Issues'] = $Major_Health_Issues= $_REQUEST['Major_Health_Issues'];

//step 2
switch($tob){
   case 'TRUE':
     $tob='Yes';
   break;
   case 'FALSE':
     $tob='No';
   break;

   case 'True':
     $tob='Yes';
   break;
   case 'False':
     $tob='No';
   break;

   case 'true':
     $tob='Yes';
   break;
   case 'false':
     $tob='No';
   break;
   
   case 'yes':
     $tob='Yes';
   break;
 
   case 'no':
     $tob='No';
   break;

   case 'YES':
     $tob='Yes';
   break;

   case 'NO':
     $tob='No';
   break;

   case 'Yes':
    $tob='Yes';
  break;

  case 'No':
    $tob='No';
  break;

   case '0':
     $tob='No';
   break;

   case '1':
     $tob='Yes';
   break;

   default:
     $tob=$tob;
     break;

 }
  $Gen=$_SESSION['Gender'];
 switch($Gen){
   case 'M':
   $Gen='Male';
   break;

   case 'm':
   $Gen='Male';
   break;

   case 'male':
   $Gen='Male';
   break;

   case 'MALE':
   $Gen='Male';
   break;
 
   case 'F':
   $Gen='Female';
   break;

   case 'f':
   $Gen='Female';
   break;

   case 'female':
   $Gen='Female';
   break;

   case 'FEMALE':
   $Gen='Female';
   break;
 
   default:
   $Gen=$Gen;
   break;
 }
/*
if(!empty($_REQUEST['firstname'])){
 $firstname=preg_replace('/[{}]/', '', $_REQUEST['firstname']);
}
else{
 if(isset($_SESSION['firstname'])){
   $firstname=$_SESSION['firstname'];
 }
 else{ $firstname=''; }
}

if(!empty($_REQUEST['lastname'])){
 $lastname=preg_replace('/[{}]/', '', $_REQUEST['lastname']);
}
else{
 if(isset($_SESSION['lastname'])){
   $lastname=$_SESSION['lastname'];
 }
 else{ $lastname=''; }
}

if(!empty($_REQUEST['email'])){
 $email=preg_replace('/[{}]/', '', $_REQUEST['email']);
}
else{
 if(isset($_SESSION['email'])){
   $email=$_SESSION['email'];
 }
 else{ $email=''; }
}

if(!empty($_REQUEST['address'])){
 $address=preg_replace('/[{}]/', '', $_REQUEST['address']);
}
else{
 if(isset($_SESSION['address'])){
   $address=$_SESSION['address'];
 }
 else{ $address=''; }
}

if(!empty($_REQUEST['city'])){
 $cityname=preg_replace('/[{}]/', '', $_REQUEST['city']);
}
else{
 if(isset($_SESSION['city'])){
   $cityname=$_SESSION['city'];
 }
 else{ $cityname=$city; }
 
}

if(!empty($_REQUEST['state'])){
 $statename=preg_replace('/[{}]/', '', $_REQUEST['state']);
}
else{
 if(isset($_SESSION['state'])){
   $statename=$_SESSION['state'];
 }
 else{ $statename=$statename; }
}

if(!empty($_REQUEST['phone'])){
 $phone=preg_replace('/[{}]/', '', $_REQUEST['phone']);
 //PHONE FORMAT CLEAR ALL
 $phone = preg_replace("/[^0-9]/", "", $phone );


}
else{
 if(isset($_SESSION['phone'])){
   $phone=$_SESSION['phone'];

 }
 else{ $phone=''; }
}
*/
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="generator" content="">
<title></title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/qunit/qunit-1.11.0.css" type="text/css" media="all">
<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

@media (min-width: 768px) {
.bd-placeholder-img-lg {
	font-size: 3.5rem;
}
}
</style>
<!-- Custom styles for this template -->
<link href="assets/css/styles.css" rel="stylesheet">
<link href="assets/css/formstyle.css" rel="stylesheet">
<link href="assets/css/steps.css" rel="stylesheet">
﻿﻿<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W8PVSGK');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8PVSGK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
    <div class="container-fluid"> <a class="navbar-brand p0" href="."><img src="assets/img/logo.png" class="logo"></a> 
      <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                     <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                     </ul>
                     <form class="d-flex"> 
                        <button class="btn btn-outline-success btn-orange" type="submit">How much do you need?</button>
                     </form>
                  
                  </div>--> 
      <!--<button class="btn btn-outline-success btn-orange mr3" type="submit">How much do you need?</button>--> 
    </div>
  </nav>
</header>
<main> <br>
  <br>
  <br>
  <!--PEN HEADER--> 
  <!--<header class="header"><br>
	<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
            
         </nav>
  <h1 class="header__title"></h1>
	
 
</header>--> 
  <!--PEN CONTENT     -->
	
	<br>
  <div class="content"> 
    <!--content inner-->
    <div class="content__inner">
      <div class="container overflow-hidden"> 
        <!--multisteps-form-->
        <div class="multisteps-form"> 
          <!--progress bar-->
          <div class="row">
            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
              <div class="multisteps-form__progress"> <strong style="color:#022c43;margin-top: 12px;">Progress:</strong>
                <button class="multisteps-form__progress-btn " type="button" title="User Info" disabled>Step 1</button>
                <button class="multisteps-form__progress-btn multisteps-form__progress-btn2 " type="button" title="Address" disabled>Step 2</button>
				<button class="multisteps-form__progress-btn multisteps-form__progress-btn2 js-active" type="button" title="Address">Step 3</button>
              </div>
            </div>
          </div>
          <!--form panels-->
          <div class="row p-50">
            <div class="col-12 col-lg-8 m-auto">
              <form class="multisteps-form__form" id="form" action="send.php" method="POST"> <!-- action="thanks.php"-->
                <!--single form panel-->
               
                <!--single form panel-->
                <div class="multisteps-form__panel dos shadow p-4 rounded bg-white js-active " data-animation="scaleIn">
                  <div class="container">
                    <h2 class="content__title">Name & Contact Information </h2>
                    <center>
                      <p class="clasep">﻿Let us know how can we get in touch with you.</p>
                    </center>
                  </div>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6 ">
						<center><label>Name</label></center>
                        <input name="firstname" id="firstname" class="multisteps-form__input form-control" type="text" placeholder="First Name" required />
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
						<center><label>Last Name</label></center>
                        <input name="lastname" id="lastname" class="multisteps-form__input form-control" type="text" placeholder="Last Name"  required />
                      </div>
                    </div>
							
							
                   <div class="form-row mt-4">
                      <div class="col-12 col-sm-6 ">
						<center><label>Phone</label></center>
                        <input id="phone" class="multisteps-form__input form-control" type="text" name="phone" placeholder="Phone Number" required required="required" required />
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
						<center><label>Email</label></center>
                        <input id="email" class="multisteps-form__input form-control" type="text" name="email" placeholder="Email Address" required required="required" required />
                      </div>
                    </div><!--<div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="password" placeholder="Password"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="password" placeholder="Repeat Password"/>
                    </div>
                  </div>-->
                    <div class="button-row d-flex mt-4 col-12">
                     <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Back</button>-->
					  <button class="btn btn-success ml-auto btn-med send-form" id="send-form" type="submit" title="Next">See Your Results</button>
                    <!--  <button class="btn btn-success ml-auto" type="submit" title="Next">Finish</button>-->
					  
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
	  <div class="container">
		  <div class="row col-md-12">
				<p style="font-size: 12px;    color: #666;}">﻿﻿By completing this form and clicking “Next”, you authorize an insurance agent to contact you by phone or text at the phone number listed. You understand contact may be automated and/or prerecorded advertisements. You are not required to sign this to purchase any product. This consent applies to all products currently or in the future marketed or sold by us. This authorization continues until it is revoked by you.</p>
		  </div>
	  </div>
	  
	  
    </div>
  </div>
  <br>
  <br>
  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="row col-md-12 first-section ">
        <div class="col-md-12 v-bottom text-center">
          <p>© Copyright 2022, Americo. All Rights Reserved. <a href="/privacy-policy.php">Privacy policy </a></p>
        </div>
        
      </div>
    </div>
  </footer>
</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 

<!-- formscript --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"></script> 

<script  src="assets/js/script.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>



  <script type="text/javascript" src="https://code.jquery.com/qunit/qunit-1.11.0.js"></script>
  
  <script type="text/javascript" src="assets/js/sinon-1.10.3.js"></script>
  <script type="text/javascript" src="assets/js/sinon-qunit-1.0.0.js"></script>

  <script type="text/javascript" src="assets/js/jquery.mask.js"></script>
  <script type="text/javascript" src="assets/js/jquery.mask.test.js"></script>
  <script>
	$('#weight').mask('00# lb', {reverse: true});
	$('#heightF').mask('Z ft', {reverse: true, translation:  {'Z': {pattern: /[3-8]/}}});
	$('#heightI').mask('0# in', {reverse: true});
	$('#MortgageYearsRemaining').mask('0# Years', {reverse: true});
	
	/*$('#height').mask('0ft #Zin', {reverse: false, translation:  {'Z': {pattern: /[0-1]/, optional: true}}});*/
	$('.Monthly_Payment').mask('#,##0', {reverse: true});
	
	
  </script>
  
</body>
</html>