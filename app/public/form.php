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
          <!--progress bar-
          <div class="row">
            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
              <div class="multisteps-form__progress"> <strong style="color:#022c43;margin-top: 12px;">Progress:</strong>
                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info" >Step 1</button>
                <button class="multisteps-form__progress-btn multisteps-form__progress-btn2" type="button" title="Address" disabled>Step 2</button>
              </div>
            </div>
          </div>-->
		  <div class="row">
            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
              <div class="multisteps-form__progress"> <strong style="color:#022c43;margin-top: 12px;">Progress:</strong>
                <button class="multisteps-form__progress-btn js-active " type="button" title="User Info" >Step 1</button>
                <button class="multisteps-form__progress-btn multisteps-form__progress-btn2 " type="button" title="Address" disabled>Step 2</button>
				<button class="multisteps-form__progress-btn multisteps-form__progress-btn2 " type="button" title="Address" disabled>Step 3</button>
              </div>
            </div>
          </div>
          <!--form panels-->
          <div class="row p-50">
            <div class="col-12 col-lg-8 m-auto">
              <form class="multisteps-form__form" id="form" action="form-step2.php" method="POST"> <!-- action="thanks.php"-->
                <!--single form panel-->
                <div class="multisteps-form__panel uno shadow p-4 rounded bg-white js-active " data-animation="scaleIn"> 
                  <!--<h3 class="multisteps-form__title">Your User Info</h3>-->
                  <div class="multisteps-form__content f1">
                    <div class="container">
                      <h2 class="content__title">Mortgage Details </h2>
                      <center>
                        <p class="clasep">Enter Your Home Loan Details</p>
                      </center>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
						  <center><label>Address</label></center>
                        <input id="address" class="multisteps-form__input form-control" type="text" name="address" placeholder="100 Main Street" required value="<?php echo $_SESSION['address']; ?>"  />
						<div class="val1"></div>																												   
						<input id="City" name="City" type="hidden" value="<?php echo $_SESSION['city']; ?>" />
						<input id="State" name="State" type="hidden" value="<?php echo $_SESSION['state']; ?>" />
						<input id="Zip" name="Zip"  type="hidden" value="<?php echo $_SESSION['Zipcode']; ?>" />
						
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0"> 
                        <!-- <input class="multisteps-form__input form-control " type="text" placeholder="Mortgage Term"/>-->
							<center><label>Mortgage Term</label></center>
                        <select  name="Term" required="required" class="form-control round" type="text" value="" placeholder="" required>
						  <option value="" selected="true" disabled="disabled"> </option>
                          <option value="15">15 Years</option>
                          <option value="30" selected>30 Years</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
						<center><label>Mortgage Years Remaining</label></center>
						<input id="MortgageYearsRemaining" class="multisteps-form__input form-control" type="text" name="MortgageYearsRemaining" placeholder="Years" required required="required" required />
						<div class="val3"></div>
						<p class="txt-ok">Ok to estimate</p>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
						<center><label>Mortgage Amount</label></center>
                        <span class="input-euro left"><input name="Monthly_Payment" class="multisteps-form__input form-control Monthly_Payment" type="" placeholder="300,000" min="0" required /><span>
						<div class="val2"></div>
						<p class="txt-ok">Ok to estimate</p>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <!--<button id="part1" class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>-->
					   <button class="btn btn-success ml-auto btn-med" type="submit" title="Next">Next</button>
                    </div>
                  </div>
                </div>
                <!--single form panel
                <div class="multisteps-form__panel dos shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <div class="container">
                    <h2 class="content__title">How is Your Health?</h2>
                    <center>
                      <p class="clasep">Get accurate results by answering a few questions.</p>
                    </center>
                  </div>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6 row">
						 <div class="col-12 col-md-0">
							<center><label>Height</label></center>
						 </div>
						 <div class="col-6">
							<input name="HeightF" id="heightF" class="multisteps-form__input form-control height" type="text" placeholder=" ft"  required />
						 </div>
						 <div class="col-6">
							<input name="HeightI" id="heightI" class="multisteps-form__input form-control height" type="text" placeholder=" in" required />
						 </div>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
						<center><label>Weight</label></center>
                        <input name="Weight" id="weight" class="multisteps-form__input form-control" type="text" placeholder=" lbs" maxlength="10" size="10" required />
                      </div>
                    </div>
							
							
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
						<center><label>Gender</label></center>
                        <select  name="Gender" required="required" class="form-control" type="text" value="" placeholder="" required >
						  <option value=""  disabled="disabled">Gender</option>
                          <option value="Male" selected="true">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>

                      <div class="col-12 col-sm-6 mt-4 mt-sm-0 row">
						<div class="col-12 col-md-0">
						 <center><label>Date of Birth</label></center>
                      </div>										   
						<div class="col-5 cal">
							<select name="Birth_Month" id="month" required="" class="form-control input-bg no-margin-bottom" required >
									<option value="" selected="true" disabled="disabled" style="opacity:6">Month</option>
									 <option value="01">January</option>
									 <option value="02">February</option>
									 <option value="03">March</option>
									 <option value="04">April</option>
									 <option value="05">May</option>
									 <option value="06">June</option>
									 <option value="07">July</option>
									 <option value="08">August</option>
									 <option value="09">September</option>
									 <option value="10">October</option>
									 <option value="11">November</option>
									 <option value="12">December</option>
							</select>
						</div>
                       	<div class="col-3 cal">
							<select name="Birth_Day" id="day" required="" class="form-control input-bg no-margin-bottom" required >
									<option value="" selected="true" disabled="disabled">Day</option>
									 <option value="01">01</option>
									 <option value="02">02</option>
									 <option value="03">03</option>
									 <option value="04">04</option>
									 <option value="05">05</option>
									 <option value="06">06</option>
									 <option value="07">07</option>
									 <option value="08">08</option>
									 <option value="09">09</option>
									 <option value="10">10</option>
									 <option value="11">11</option>
									 <option value="12">12</option>
									 <option value="13">13</option>
									 <option value="14">14</option>
									 <option value="15">15</option>
									 <option value="16">16</option>
									 <option value="17">17</option>
									 <option value="18">18</option>
									 <option value="19">19</option>
									 <option value="20">20</option>
									 <option value="21">21</option>
									 <option value="22">22</option>
									 <option value="23">23</option>
									 <option value="24">24</option>
									 <option value="25">25</option>
									 <option value="26">26</option>
									 <option value="27">27</option>
									 <option value="28">28</option>
									 <option value="29">29</option>
									 <option value="30">30</option>
									 <option value="31">31</option>
									</select>
						</div>
						<div class="col-4 cal">
							<select name="Birth_Year" id="year" required="" class="form-control input-bg no-margin-bottom" required >
									<option value="" selected="true" disabled="disabled">Year</option>
									<option value="2019">2019</option>
									<option value="2018">2018</option>
									<option value="2017">2017</option>
									<option value="2016">2016</option>
									<option value="2015">2015</option>
									<option value="2014">2014</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
									<option value="2007">2007</option>
									<option value="2006">2006</option>
									<option value="2005">2005</option>
									<option value="2004">2004</option>
									<option value="2003">2003</option>
									<option value="2002">2002</option>
									<option value="2001">2001</option>
									<option value="2000">2000</option>
									<option value="1999">1999</option>
									<option value="1998">1998</option>
									<option value="1997">1997</option>
									<option value="1996">1996</option>
									<option value="1995">1995</option>
									<option value="1994">1994</option>
									<option value="1993">1993</option>
									<option value="1992">1992</option>
									<option value="1991">1991</option>
									<option value="1990">1990</option>
									<option value="1989">1989</option>
									<option value="1988">1988</option>
									<option value="1987">1987</option>
									<option value="1986">1986</option>
									<option value="1985">1985</option>
									<option value="1984">1984</option>
									<option value="1983">1983</option>
									<option value="1982">1982</option>
									<option value="1981">1981</option>
									<option value="1980">1980</option>
									<option value="1979">1979</option>
									<option value="1978">1978</option>
									<option value="1977">1977</option>
									<option value="1976">1976</option>
									<option value="1975">1975</option>
									<option value="1974">1974</option>
									<option value="1973">1973</option>
									<option value="1972">1972</option>
									<option value="1971">1971</option>
									<option value="1970">1970</option>
									<option value="1969">1969</option>
									<option value="1968">1968</option>
									<option value="1967">1967</option>
									<option value="1966">1966</option>
									<option value="1965">1965</option>
									<option value="1964">1964</option>
									<option value="1963">1963</option>
									<option value="1962">1962</option>
									<option value="1961">1961</option>
									<option value="1960">1960</option>
									<option value="1959">1959</option>
									<option value="1958">1958</option>
									<option value="1957">1957</option>
									<option value="1956">1956</option>
									<option value="1955">1955</option>
									<option value="1954">1954</option>
									<option value="1953">1953</option>
									<option value="1952">1952</option>
									<option value="1951">1951</option>
									<option value="1950">1950</option>
									<option value="1949">1949</option>
									<option value="1948">1948</option>
									<option value="1947">1947</option>
									<option value="1946">1946</option>
									<option value="1945">1945</option>
									<option value="1944">1944</option>
									<option value="1943">1943</option>
									<option value="1942">1942</option>
									<option value="1941">1941</option>
									<option value="1940">1940</option>
									<option value="1939">1939</option>
									<option value="1938">1938</option>
									<option value="1937">1937</option>
									<option value="1936">1936</option>
									<option value="1935">1935</option>
									<option value="1934">1934</option>
									<option value="1933">1933</option>
									<option value="1932">1932</option>
									<option value="1931">1931</option>
									<option value="1930">1930</option>
									<option value="1929">1929</option>
									<option value="1928">1928</option>
									<option value="1927">1927</option>
									<option value="1926">1926</option>
									<option value="1925">1925</option>
									<option value="1924">1924</option>
									<option value="1923">1923</option>
									<option value="1922">1922</option>
									<option value="1921">1921</option>
									<option value="1920">1920</option>
									<option value="1919">1919</option>
									<option value="1918">1918</option>
									<option value="1917">1917</option>
									<option value="1916">1916</option>
									<option value="1915">1915</option>
									<option value="1914">1914</option>
									<option value="1913">1913</option>
									<option value="1912">1912</option>
									<option value="1911">1911</option>
									<option value="1910">1910</option>
									<option value="1909">1909</option>
									<option value="1908">1908</option>
									<option value="1907">1907</option>
									<option value="1906">1906</option>
									<option value="1905">1905</option>
									<option value="1904">1904</option>
									<option value="1903">1903</option>
									<option value="1902">1902</option>
									<option value="1901">1901</option>
									<option value="1900">1900</option>
									</select>
						</div>
						
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
						<center><label>Tobacco Use</label></center>
                        <select  name="Tobacco_Use" required="required" class="form-control" type="text" value="" placeholder="" required >
						  <option value="" selected="true" disabled="disabled">Tobacco use</option>
                          <option value="Yes">Yes</option>
                          <option value="No" selected>No</option>
                        </select>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
						<center><label>Major Health Issues</label></center>
                        <select  name="Major_Health_Issues" required="required" class="form-control" type="text" value="" placeholder="" required >
						  <option value="" selected="true" disabled="disabled">Major Health Issues</option>
                          <option value="Yes">Yes</option>
                          <option value="No" selected>No</option>
                        </select>
                      </div>
                    </div>
                    
                    <div class="button-row d-flex mt-4 col-12">
					  <button class="btn btn-success ml-auto btn-med" type="submit" title="Next">See You Results</button>
					  
                    </div>
                  </div>
                </div>-->
              </form>
            </div>
          </div>
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

<script>
 $(document).ready(function(){
	 
	
		  $("#form").validate();
		 
		
		
       /* $("#height").keypress(function(e){
				var input = document.getElementById('height');
                var enteredChar = String.fromCharCode(e.which);
                if (isNaN(parseInt(enteredChar) || enteredChar != ' '))
                    return false;
                if(input.value.length == 0) {
                    input.value += enteredChar + " ft ";
                    return false;
                }
				if(input.value.length == 5) {
                    input.value += enteredChar + ' in';
                    return false;
                }
                if(input.value.length == 6) {
                    input.value += enteredChar + ' in';
                    return false;
                }
				 if(input.value.length == 7) {
                    input.value += enteredChar + ' in';
                    return false;
                }
				 if(input.value.length == 8) {
                    input.value += enteredChar + ' in';
                    return false;
                }
		});
		$("#weight").keypress(function(e){
				var input = document.getElementById('weight');
                var enteredChar = String.fromCharCode(e.which);
                if (isNaN(parseInt(enteredChar) || enteredChar != ' '))
                    return false;
                if(input.value.length == 1) {
                    input.value += enteredChar + " lbs";
                    return false;
                }
				 if(input.value.length == 2) {
                    input.value += enteredChar + " lbs";
                    return false;
                }
               
		});
		$('#height').keyup(function(e){
			if(e.keyCode == 46) {
				$('height').val('');
			}
		});*/
});



var placeSearch, autocomplete;

var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search predictions to
  // geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('address'), {types: ['geocode']});

  // Avoid paying for data that you don't need by restricting the set of
  // place fields that are returned to just the address components.
  autocomplete.setFields(['address_component']);

  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {


  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  
 /* 
  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }
*/
  
  //var theroute = place.address_components[0][componentForm['route']];
  var route='';
  var street_number='';
  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
	console.log(addressType);
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
	  
	  if(addressType=='route'){
	  var route=val;
	  //document.getElementById('route').value = val;
	  //document.getElementById('autocomplete').value = val;
	  }
	  if(addressType=='street_number'){
	  var street_number=val;
	  //document.getElementById('street_number').value = val
	  }
	  
	  if(addressType=='locality'){
	  document.getElementById('City').value = val;
	  }

    if(addressType=='postal_code'){
	  document.getElementById('Zip').value = val;
	  }

	if(addressType=='administrative_area_level_1'){
			document.getElementById('State').value = val;
		/*	var st=val;
		if(st == 'ID'){		  
			$(".val1").html("<label id='address-error' class='error' for='address'>The state of Idaho is not covered by Amerio's financial services. We are sorry for the inconvenience.</label>");
			$("#address").val('');
			
		}else{
			$('.val1').empty();
		}*/
	  
	 // selectElement2('state', val);
		
		function selectElement2(id, valueToSelect) {    
			let element = document.getElementById(id);
			element.value = valueToSelect;
		}





	}
	  
	  
     // document.getElementById(addressType).value = val;
    }
  }
  
  <!--document.getElementById('address').value = street_number + ' ' + route;-->
  
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiqrNUndWFAE9Kf0txx8uV2EnsSLh0e8M&libraries=places&callback=initAutocomplete" async defer></script>

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