<?php
$State=$_REQUEST['state'];
$firstname=$_REQUEST['firstName'];
$lastname=$_REQUEST['lastName'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$genderC=$_REQUEST['gender'];
$date=$_REQUEST['dateOfBirth'];
$weightC=$_REQUEST['weight'];
$heigthC=$_REQUEST['totalInches']; 
$tobacco=$_REQUEST['tobacco']; 
$Monthly_Payment=$_REQUEST['faceAmount']; 
$MortgageYearsRemaining=$_REQUEST['termLength']; 
$ft=$_REQUEST['ft'];
$in=$_REQUEST['in'];

//date in mm/dd/yyyy format; or it can be in other formats as well
 $birthDate = $Birth_Month."/".$Birth_Day."/".$Birth_Year;
 //explode the date to get month, day and year
 $birthDate = explode("/", $date);
 //get age from date or birthdate
 $Age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
   ? ((date("Y") - $birthDate[2]) - 1)
   : (date("Y") - $birthDate[2]));
 //echo "Age is:" . $age;
 
 
 
 // formats money to a whole number or with 2 decimals; includes a dollar sign in front
function formatMoney($number, $cents = 1) { // cents: 0=never, 1=if needed, 2=always
  if (is_numeric($number)) { // a number
    if (!$number) { // zero
      $money = ($cents == 2 ? '0.00' : '0'); // output zero
    } else { // value
      if (floor($number) == $number) { // whole number
        $money = number_format($number, ($cents == 2 ? 2 : 0)); // format
      } else { // cents
        $money = number_format(round($number, 2), ($cents == 0 ? 0 : 2)); // format
      } // integer or decimal
    } // value
    return '$'.$money;
  } // numeric
} // formatMoney

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
         })(window,document,'script','dataLayer','GTM-W8PVSGK');
      </script>
      <!-- End Google Tag Manager -->
   </head>
   <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8PVSGK"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->   
	  <header>
	  <nav class="navbar navbar-expand-md navbar-light bg-white">
		<div class="container-fluid"> <a class="navbar-brand p0" href="."><img src="assets/img/logo.png" class="logo" style="height:60px"></a> 
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
      <div id="" class="contact-us section" style="padding: 60px 0px;background: rgb(232,116,37);background: linear-gradient(90deg, rgba(232,116,37,1) 0%, rgba(234,127,54,1) 64%, rgba(237,143,79,1) 82%, rgba(243,181,139,1) 91%, rgba(248,209,183,1) 95%, rgba(249,218,197,1) 98%, rgba(255,255,255,1) 100%);">
         <center>
            <div class="container">
               <div class="col-lg-12 offset-lg-0">
                  <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                     <h2 style="color:#fff;text-align:left;padding-bottom: 0px; ">Mortgage Protection Insurance </h2>
                  </div>
               </div>               
            </div>
      </div>
	   <div id="portfolio" class="our-portfolio section mb100">
         
            <div class="container">
				<div class="row">
				   <div class="col-lg-4">
						
						<form class="formulario">
						  <h3 style="color:#1c324d; text-align:center">Your Quote</h3>
						  <div class="form-group" style="text-align:center">
							
							<div class='ctrl'>
							  <div class='ctrl__button ctrl__button--decrement'>&ndash;</div>
							  <div class='ctrl__counter'>
								<input class='ctrl__counter-input' id="Monthly_Payment" maxlength='10' type='text' value='<?php echo $Monthly_Payment; ?>'>
								<div class='ctrl__counter-num' style="color:#1c324d;"><?php echo $Monthly_Payment; ?></div>
							  </div>
							  <div class='ctrl__button ctrl__button--increment'>+</div>
							</div>

						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Years of Coverage</label>
							
							   <input value="<?php echo $MortgageYearsRemaining; ?>" id="MortgageYearsRemaining" class="form-control">
							  
							
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Healt Class</label>
							<select name="" id="" class="insel">
							  <option value="Best">Best</option>
							  <option value="Better">Better</option>
							  <option value="Good">Good</option>
							  
							</select>
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Summary</label>
							<div><div class="MuiCollapse-root w-100 MuiCollapse-entered" style="min-height: 0px;"><div class="MuiCollapse-wrapper"><div class="MuiCollapse-wrapperInner"><div class="basic-info-summary d-flex flex-wrap justify-content-center py-2"><div class="d-flex flex-column px-1  col"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="MuiSvgIcon-root mx-auto" focusable="false" aria-hidden="false" role="img" aria-label="Gender" id="Gender-0"><g stroke-linecap="round" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linejoin="round"><path d="M14.475 4.525a3.5 3.5 0 11-4.95 4.95 3.5 3.5 0 014.95-4.95M4 18.5v1a1 1 0 001 1h14a1 1 0 001-1v-1c0-3.026-3.952-4.992-8-4.992S4 15.474 4 18.5z"></path></g><path fill="none" d="M0 0h24v24H0z"></path></svg><div class="mx-auto"><?php echo $genderC; ?></div></div><div class="d-flex flex-column px-1  col"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="MuiSvgIcon-root mx-auto" focusable="false" aria-hidden="false" role="img" aria-label="State" id="State-1"><g fill="none"><path d="M0 0h24v24H0z"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 13v0a3 3 0 01-3-3v0a3 3 0 013-3v0a3 3 0 013 3v0a3 3 0 01-3 3z"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21s-7-5.75-7-11a7 7 0 1114 0c0 5.25-7 11-7 11z"></path></g></svg><div class="mx-auto"><?php echo $State; ?></div></div><div class="d-flex flex-column px-1  col"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="MuiSvgIcon-root mx-auto" focusable="false" aria-hidden="false" role="img" aria-label="Age" id="Age-2"><g stroke-linecap="round" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linejoin="round"><path d="M16 2v4M8 2v4M3 9h18M19 4H5a2 2 0 00-2 2v13a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2zM10.6 13.82l1.46-1.32M10.72 17.5h2.68M12.06 12.5v5"></path></g><path fill="none" d="M0 0h24v24H0z"></path></svg><div class="mx-auto"><?php echo $Age; ?></div></div><div class="d-flex flex-column px-1  col"><svg class="MuiSvgIcon-root MuiSvgIcon-root mx-auto" focusable="false" viewBox="0 0 24 24" aria-hidden="false" role="img" aria-label="Smoker" id="Smoker-3"><path d="M2 16h15v3H2zm18.5 0H22v3h-1.5zM18 16h1.5v3H18zm.85-8.27c.62-.61 1-1.45 1-2.38C19.85 3.5 18.35 2 16.5 2v1.5c1.02 0 1.85.83 1.85 1.85S17.52 7.2 16.5 7.2v1.5c2.24 0 4 1.83 4 4.07V15H22v-2.24c0-2.22-1.28-4.14-3.15-5.03zm-2.82 2.47H14.5c-1.02 0-1.85-.98-1.85-2s.83-1.75 1.85-1.75v-1.5c-1.85 0-3.35 1.5-3.35 3.35s1.5 3.35 3.35 3.35h1.53c1.05 0 1.97.74 1.97 2.05V15h1.5v-1.64c0-1.81-1.6-3.16-3.47-3.16z"></path></svg><div class="mx-auto"><?php echo $tobacco; ?></div></div><div class="d-flex flex-column px-1  col"><svg id="Height-4" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="MuiSvgIcon-root mx-auto" focusable="false" aria-hidden="false" role="img" aria-label="Height"><defs><style>.height_svg__cls-1,.height_svg__cls-2{fill:currentColor;stroke:currentColor;stroke-miterlimit:10}.height_svg__cls-2{fill:none;stroke-width:1.5px}</style></defs><path id="height_svg__Path_3" data-name="Path 3" class="height_svg__cls-1" d="M19 2.5L17 5h4z"></path><path id="height_svg__Path_3_Copy" data-name="Path 3 Copy" class="height_svg__cls-1" d="M19 21.5L17 19h4z"></path><path id="height_svg__Path_2_Copy" data-name="Path 2 Copy" class="height_svg__cls-2" d="M19 5v14"></path><path d="M6.84 2.5H13a1 1 0 011 1v17a1 1 0 01-1 1H7a1 1 0 01-1-1V3.34a.84.84 0 01.84-.84z" stroke="currentColor" fill="none" stroke-width="1.5" stroke-miterlimit="10"></path><path class="height_svg__cls-2" d="M11 6.5h3M11 12h3M11 17.5h3"></path></svg><div class="mx-auto"><?php echo $ft."' ".$in."''"; ?></div></div><div class="d-flex flex-column px-1  col"><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="MuiSvgIcon-root mx-auto" focusable="false" aria-hidden="false" role="img" aria-label="Weight" id="Weight-5"><path d="M3.84 3H20a1 1 0 011 1v15a1 1 0 01-1 1H4a1 1 0 01-1-1V3.84A.84.84 0 013.84 3z" stroke-width="1.5" stroke-miterlimit="10" fill="none" stroke="currentColor"></path><circle cx="12" cy="8" r="5" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill="none" stroke="currentColor"></circle><path stroke-width="3" stroke-miterlimit="10" fill="none" stroke="currentColor" d="M12 6v4"></path></svg><div class="mx-auto"><?php echo $weightC."lb"; ?></div></div></div></div></div></div></div>
						  </div>
						  
						 
						  
						</form>
				   </div>
					<div class="col-lg-8 ">
					 <h2 style="background: #1c324d;    color: #fff;    text-align: center;    width: 100%;    padding: 19px;    border-radius: 20px; "><?php echo formatMoney($Monthly_Payment, 0);?> - <?php echo $MortgageYearsRemaining; ?> Year Decreasing Term</h2>
					<!--<img src="images/grafica.jpg">--><br><br>
					<div id="canvas-holder" style="width:100%">
					  <canvas id="myChart" />
					</div>
					<div class="main-blue-button" style="text-align:end;margin-top:30px;">
						  <a href="https://americo.covrtech.com/dataimport?path=quote/term-life-insurance/loan-protector/proposed-insured-info/term&dateOfBirth=<?php echo $date;?>&state=<?php echo $State;?>&gender=<?php echo $genderC;?>&weight=<?php echo $weightC;?>&totalInches=<?php echo $heigthC;?>&usResident=true&replacePolicy=true&tobacco=<?php echo $tobacco;?>&faceAmount=<?php echo $Monthly_Payment;?>&healthClass=PP&termLength=<?php echo $MortgageYearsRemaining;?>&firstName=<?php echo $firstname;?>&lastName=<?php echo $lastname;?>&phone=<?php echo $phone;?>&email=<?php echo $email;?>">Start Application</a>
						</div>
					</div>
				</div>
               
            </div>
      </div>
      
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
	  <script>
	  (function() {
  'use strict';

  function ctrls() {
    var _this = this;

    this.counter = 0;
    this.els = {
      decrement: document.querySelector('.ctrl__button--decrement'),
      counter: {
        container: document.querySelector('.ctrl__counter'),
        num: document.querySelector('.ctrl__counter-num'),
        input: document.querySelector('.ctrl__counter-input')
      },
      increment: document.querySelector('.ctrl__button--increment')
    };

    this.decrement = function() {
      var counter = _this.getCounter();
      var nextCounter = (_this.counter > 0) ? --counter : counter;
      _this.setCounter(nextCounter);
    };

    this.increment = function() {
      var counter = _this.getCounter();
      var nextCounter = (counter < 9999999999) ? ++counter : counter;
      _this.setCounter(nextCounter);
    };

    this.getCounter = function() {
      return _this.counter;
    };

    this.setCounter = function(nextCounter) {
      _this.counter = nextCounter;
    };

    this.debounce = function(callback) {
      setTimeout(callback, 100);
    };

    this.render = function(hideClassName, visibleClassName) {
      _this.els.counter.num.classList.add(hideClassName);

      setTimeout(function() {
        _this.els.counter.num.innerText = _this.getCounter();
        _this.els.counter.input.value = _this.getCounter();
        _this.els.counter.num.classList.add(visibleClassName);
      }, 100);

      setTimeout(function() {
        _this.els.counter.num.classList.remove(hideClassName);
        _this.els.counter.num.classList.remove(visibleClassName);
      }, 1100);
    };

    this.ready = function() {
      _this.els.decrement.addEventListener('click', function() {
        _this.debounce(function() {
          _this.decrement();
          _this.render('is-decrement-hide', 'is-decrement-visible');
        });
      });

      _this.els.increment.addEventListener('click', function() {
        _this.debounce(function() {
          _this.increment();
          _this.render('is-increment-hide', 'is-increment-visible');
        });
      });

      _this.els.counter.input.addEventListener('input', function(e) {
        var parseValue = parseInt(e.target.value);
        if (!isNaN(parseValue) && parseValue >= 0) {
          _this.setCounter(parseValue);
          _this.render();
        }
      });

      _this.els.counter.input.addEventListener('focus', function(e) {
        _this.els.counter.container.classList.add('is-input');
      });

      _this.els.counter.input.addEventListener('blur', function(e) {
        _this.els.counter.container.classList.remove('is-input');
        _this.render();
      });
    };
  };

  // init
  var controls = new ctrls();
  document.addEventListener('DOMContentLoaded', controls.ready);
})();
	  </script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	  
	  <script>
		
		var MortgageYearsRemaining= $("#MortgageYearsRemaining").val();
		var Monthly_Payment= $("#Monthly_Payment").val();
		var int_anual = 0.035 * Monthly_Payment;
		var n_pagos = 12 * MortgageYearsRemaining;
		var n_pagos = -1 * n_pagos;
		var paso1 = Math.pow(1.0029, n_pagos);
		var paso2 = 1 - paso1;
		var paso3 = .0029/paso2
		var paso4 = paso3 * Monthly_Payment;
		var paso5 = paso4 * 12;
		
		jsonObj = [];
		jsonObj2 = [];
		var pen = parseInt(MortgageYearsRemaining)-1;
		var pen2 = parseInt(MortgageYearsRemaining)-2;
		for(let i = 1; i <= parseInt(MortgageYearsRemaining); i++){
			item = {}
			item = i;
			jsonObj.push(item);
			item2 = {}		
			
			Monthly_Payment = (parseFloat(Monthly_Payment) + parseFloat(int_anual)) - parseFloat(paso5);
			if(i == pen2){
				Monthly_Payment = Monthly_Payment * .99;
			}
			if(i == pen){
				Monthly_Payment = Monthly_Payment * .98;
			}
			if(i == Monthly_Payment){
				Monthly_Payment = Monthly_Payment * .85;
			}
			item2 = Monthly_Payment;			
			jsonObj2.push(item2);
		}
			console.log(jsonObj2)
	      var config = {
        type: 'bar',
        data: {
            labels: jsonObj,
            datasets: [{
                    type: 'line',
      label: "Line label", 
                    backgroundColor: "#1c324d",
                    borderColor: "#1c324d",
                    data: jsonObj2,
                    fill: false,
                },
                {
                    type: 'bar', 
      label: "Bar label1",
                    backgroundColor: "#e87425",
                    borderColor: "#e87425",
                    data: jsonObj2,
                    fill: false,
                }
            ]
        },
        options: {
            responsive: true,
            title: {
                display: false,
                text: 'Files'
            },
            tooltips: {
                mode: 'nearest',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            legend: {
                display: true,
                position: 'top'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: 'Date'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: false,
                        labelString: 'Files'
                    }
                }]
            }
        }
    };

 
            var ctx = document.getElementById('myChart').getContext('2d');
            new Chart(ctx, config);
	  </script>
   </body>
</html>