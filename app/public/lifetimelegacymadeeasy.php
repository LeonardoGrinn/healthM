<?php
session_start();
if(!empty($_REQUEST['firstname'])){
	$_SESSION['firstname']=preg_replace('/[{}]/', '', $_REQUEST['firstname']);
}

if(!empty($_REQUEST['lastname'])){
	$_SESSION['lastname']=preg_replace('/[{}]/', '', $_REQUEST['lastname']);
}

if(!empty($_REQUEST['email'])){
	$_SESSION['email']=preg_replace('/[{}]/', '', $_REQUEST['email']);
}

if(!empty($_REQUEST['phone'])){
	$_SESSION['phone']=preg_replace('/[{}]/', '', $_REQUEST['phone']);
}
if(!empty($_REQUEST['Sub_ID'])){
	$_SESSION['Sub_ID']=preg_replace('/[{}]/', '', $_REQUEST['Sub_ID']);
}
if(!empty($_REQUEST['Pub_ID'])){
	$_SESSION['Pub_ID']=preg_replace('/[{}]/', '', $_REQUEST['Pub_ID']);
}
if(!empty($_REQUEST['token'])){
	$_SESSION['token']=preg_replace('/[{}]/', '', $_REQUEST['token']);
}
if(!empty($_REQUEST['token'])){
	$_SESSION['token']=preg_replace('/[{}]/', '', $_REQUEST['token']);
}
if(!empty($_REQUEST['Gender'])){
	$_SESSION['Gender']=preg_replace('/[{}]/', '', $_REQUEST['Gender']);
}
if(!empty($_REQUEST['Tobacco'])){
	$_SESSION['Tobacco']=preg_replace('/[{}]/', '', $_REQUEST['Tobacco']);
}
if(!empty($_REQUEST['address'])){
	$_SESSION['address']=preg_replace('/[{}]/', '', $_REQUEST['address']);
}
if(!empty($_REQUEST['city'])){
	$_SESSION['city']=preg_replace('/[{}]/', '', $_REQUEST['city']);
}
if(!empty($_REQUEST['state'])){
	$_SESSION['state']=preg_replace('/[{}]/', '', $_REQUEST['state']);
}
if(!empty($_REQUEST['Zipcode'])){
	$_SESSION['Zipcode']=preg_replace('/[{}]/', '', $_REQUEST['Zipcode']);
}


?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>My Mortgage Protection</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/homepage/assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/homepage/assets/css/tempdynamic.css">
    <link rel="stylesheet" href="assets/homepage/assets/css/animated.css">
    <link rel="stylesheet" href="assets/homepage/assets/css/owl.css">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W8PVSGK');</script>
	<!-- End Google Tag Manager -->
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8PVSGK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
 <!-- <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
           
            <a href="index.html" class="logo">
              <h4>Spac<span>Dyna</span></h4>
            </a>
           
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
              <li class="scroll-to-section"><a href="#blog">Blog</a></li> 
              <li class="scroll-to-section"><a href="#contact">Message Us</a></li> 
              <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Contact Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            
          </nav>
        </div>
      </div>
    </div>
  </header>-->
  <!-- ***** Header Area End ***** -->
	
	 <!-- <a href="index.html">
              <img class="logoheader" src="assets/images/logo.png" alt="logo">
            </a>-->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
               <!-- <h6>Mortagage Protection</h6>-->
                <h1>Mortgage Protection <span>Insurance</span> </h1>
                <p>Life insurance specifically designed to cover your mortgage payments.</p>
			 <div class="main-blue-button button-glow">
                  <a href="form.php">How much do you need?</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/homepage/assets/images/banner-right-image.png" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="assets/homepage/assets/images/about-left-image.png" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
                <div class="col-lg-12 offset-lg-1">
            <h2   style="font-size: 50px; color: #fff; padding-bottom: 15px;">Why get Mortgage Protection Insurance?</h2>
            <p style="color:#fff;">If something ever happened to you, the last thing you would want is for your family to lose the home you worked so hard to buy. Mortgage protection insurance provides you with the peace of mind that your family will be able to keep the home. It is a type of term life insurance that allows you to pay off your mortgage in the case of your death.</p>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	
	
	
	<div id="about3" class="about-us3 section"><!-- resp-->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
                <div class="col-lg-1 offset-lg-0">
            <h2 >Why Get Mortgage Protection Insurance?</h2>
            <p >If something ever happened to you, the last thing you would want is for your family to lose the home you worked so hard to buy. Mortgage protection insurance provides you with the peace of mind that your family will be able to keep the home. It is a type of term life insurance that allows you to pay off your mortgage in the case of your death.</p>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	
  <div id="portfolio" class="our-portfolio section mb100">
    <div class="container">
		<div class="col-lg-12 offset-lg-0">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>How does it work?</h2>
          </div>
        </div>
      <div class="row">
        <div class="col-lg-5 col-sm-4">
         
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Purchase a Mortgage Insurance Policy for a set period of time.</h4>
                
              </div>
              <div class="showed-content">
                <img src="assets/homepage/assets/images/one.png" alt="">
              </div>
            </div>
         
        </div>
         <div class="col-lg-2 col-sm-3">
          
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4> Make monthly payments. </h4>
                
              </div>
              <div class="showed-content">
                <img src="assets/homepage/assets/images/two.png" alt="">
              </div>
            </div>
          
        </div>
        <div class="col-lg-4 col-sm-3">
          
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="hidden-content">
                <h4>If you pass away while the policy is in effect, your beneficiary receives the money they would need to pay off your mortgage.</h4>
              </div>
              <div class="showed-content">
                <img src="assets/homepage/assets/images/three.png" alt="">
              </div>
            </div>
         
        </div>
      </div>
    </div>
  </div>

	<div id="about2" class="about-us2 section "> <!--resp-->
    <div class="container">
      <div class="row">
        <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>How does it work?</h2>
          </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-4">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="assets/homepage/assets/images/one.png" alt="reporting">
                  </div>
                  <div class="right-text">
                    <!--<h4>1</h4>-->
                    <p>Purchase a Mortgage Insurance Policy for a set period of time.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="assets/homepage/assets/images/two.png" alt="">
                  </div>
                  <div class="right-text">
                    <!--<h4>2</h4>-->
                    <p>Make monthly payments.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="assets/homepage/assets/images/three.png" alt="">
                  </div>
                  <div class="right-text">
                    <!--<h4>3</h4>-->
                    <p>If you pass away while the policy is in effect, your beneficiary receives the money they would need to pay off your mortgage.</p>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	
	
	
	
	
	
	<!--
  <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
		  
		  <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
                <div class="col-lg-12 offset-lg-1">
            <h2 style="font-size: 50px; padding-bottom: 40px; font-weight: 600; color: #022C43">Protect Your Home and Your <span style="color: #E87101; font-size: 50px;">Family's Wellbeing</span></h2>
          
          </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <img src="assets/homepage/assets/images/big-blog-thumb.jpg" alt="Workspace Desktop">
            
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
				Mortgage Protection pays your mortgage in the case of:


              <li>
                <div class="left-content align-self-center">
                 
                  <a href="#"><h4>âš« Death</h4></a>
                </div>
              
              </li>
              <li>
                <div class="left-content align-self-center">
                  
                  <a href="#"><h4>âš« Disability</h4></a>
                </div>
                
              </li>
              <li>
                <div class="left-content align-self-center">
                  
                  <a href="#"><h4>âš« Critical Illness</h4></a>
                </div>
               
              </li>
            </ul>
			  Additionally, it provides benefits from a life insurance policy and provides you with something invaluable â€“ a peace of mind for you and your family.
          </div>
        </div>
      </div>
    </div>
  </div>-->
<div id="contact" class="contact-us section">
	<center><div class="container">
		<div class="col-lg-12 offset-lg-0">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2 style="padding-bottom: 90px; ">Your home can be protected in a matter of minutes</h2>
          </div>
        </div>
      <div class="row">
	   <div class="col-lg-4 col-sm-4">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4 style="font-weight: 600;">Get a Quick Quote</h4>
                <p>Receive a quick quote in minutes.</p>
              </div>
              <div class="showed-content2">
                <img src="assets/homepage/assets/images/timeicon.png" alt="">
              </div>
            </div>
        </div>
	  <div class="col-lg-4 col-sm-4">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4 style="font-weight: 600;">Apply Online:</h4>
                <p>It takes 5-15 minutes to complete the application.</p>
              </div>
              <div class="showed-content2">
                <img src="assets/homepage/assets/images/appicon.png" alt="">
              </div>
            </div>
        </div>
       
         
        <div class="col-lg-4 col-sm-4">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="hidden-content">
                <h4 style="font-weight: 600;">Protect Your Home:</h4>
                <p> Gain the peace of mind that your home is protected.</p>
              </div>
              <div class="showed-content2">
                <img src="assets/homepage/assets/images/homeicon.png" alt="">
              </div>
            </div>
         
        </div>
      </div>
    </div></center>
    <!--<div class="container">
       <div class="row">
		   <div class="col-lg-4 offset-lg-1  wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
    <div class="col-lg-4 col-sm-3"><img class="imgicons" src="assets/images/timeicon.png"></div>
    <div class="col-lg-4 col-sm-3"><img class="imgicons" src="assets/images/appicon.png"></div>
    <div class="col-lg-4 col-sm-3"><img class="imgicons" src="assets/images/homeicon.png"></div>
    </div>
	
  </div>
    </div>-->
  </div>
	
  <!--<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore et dolores</p>
            <div class="phone-info">
              <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="#">010-020-0340</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>-->
<footer class="footer">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2 class="footer"><a href="#" class="logo"><img style="max-width: 10%; height: auto; " src="assets/homepage/assets/images/logo.png"></a></h2>
						<!--<p class="menu">
							<a href="#"><strong>Home</strong></a>&#160;
							<a href="#"><strong>About</strong></a>&#160;
							<a href="#"><strong>Services</strong></a>&#160;
							<a href="#"><strong>Projects</strong></a>&#160;
							<a href="#"><strong>Quote</strong></a>
						</p>
						<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
            </ul>-->
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Copyright 2022, Americo. All Rights Reserved. <a href="/privacy-policy.php">Privacy policy </a>
          
         
        </div>
				</div>
			</div>
		</footer>
	<!-- Return to Top -->
<!--<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>-->


<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  
<!-- Test the scroll -->

 <!-- <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>Â© Copyright 2021 Americo. All rights reserved 
          
         
        </div>
      </div>
    </div>
  </footer>-->
  <!-- Scripts -->
  <script src="assets/homepage/vendor/jquery/jquery.min.js"></script>
  <script src="assets/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/homepage/assets/js/owl-carousel.js"></script>
  <script src="assets/homepage/assets/js/animation.js"></script>
  <script src="assets/homepage/assets/js/imagesloaded.js"></script>
  <script src="assets/homepage/assets/js/tempcustom.js"></script>

</body>
</html>