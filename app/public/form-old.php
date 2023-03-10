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
	   <link href="assets/css/steps.css" rel="stylesheet">
   </head>
   <body>
      <header>
         <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
            <div class="container-fluid">
               <a class="navbar-brand p0" href="#"><img src="assets/img/logo.png" class="logo"></a>
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
               <button class="btn btn-outline-success btn-orange mr3" type="submit">How much do you need?</button>
            </div>
         </nav>
      </header>
      <main >
         <div class="container" >
            <div class="row third text-center">
               <div class="col-md-12">
				<div class="container">
					<div class="stepwizard">
						<div class="stepwizard-row setup-panel">
							<div class="stepwizard-step">
								<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
								<p>Step 1</p>
							</div>
							<div class="stepwizard-step">
								<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
								<p>Step 2</p>
							</div>
							
						</div>
					</div>
					<form role="form" action="thanks.php" method="POST">
						<div class="setup-content" id="step-1">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Address</label>
										<input name="Adress" maxlength="100" type="text" required="required" class="form-control" placeholder="Address" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Mortgage Term </label>
										<select  name="Term" required="required" class="form-control" type="text" value="" placeholder="" >
										  <option>Mortgage Term</option>
										  <option value="15 Years">15 Years</option>
										  <option value="30 Years">30 Years</option>
										  <option value="Other">Oher</option>
										</select>
									</div>
									</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Mortgage Years Remaining</label>
										<input name="MortgageYearsRemaining" maxlength="200" type="number" required="required" class="form-control" placeholder="Mortgage Years Remaining" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Mortgage Amount</label>
										<input name="MortgageAmount" maxlength="200" type="text" required="required" class="form-control" placeholder="Mortgage Amount"  />
									</div>
								</div>
							</div>
							<div class="col-xs-12">
								
									<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
							</div>
						</div>
						<div class="setup-content" id="step-2">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Height</label>
										<input name="Height"  maxlength="100" type="text" required="required" class="form-control" placeholder="Height"  />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Weight </label>
										<input  name="Weight" maxlength="100" type="text" required="required" class="form-control" placeholder="Weight"  />
									</div>
									</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Gender</label>
										<select  name="Gender" required="required" class="form-control" type="text" value="" placeholder="" >
										  <option>Gender</option>
										  <option value="Male">Male</option>
										  <option value="Female">Female</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Age</label>
										<select  name="Age" required="required" class="form-control" type="text" value="" placeholder="" >
										  <option>Select Age</option>
										  <option value="21">21</option>
										  <option value="22">22</option>
										  <option value="23">23</option>
										  <option value="24">24</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Tobacco Use</label>
										<select  name="Tobacco" required="required" class="form-control" type="text" value="" placeholder="Tobacco Use" >
										  <option>Tobacco Use</option>
										  <option value="Yes">Yes</option>
										  <option value="No">No</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Major Health Issues</label>
										<select  name="MajorHealthIssues" required="required" class="form-control" type="text" value="" placeholder="Major Health Issues" >
										  <option>Major Health Issues</option>
										  <option value="Yes">Yes</option>
										  <option value="No">No</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
								
									<button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
								</div>
							</div>
						</div>
						
					</form>
					</div>
              </div>
            </div>
         </div>
         <!-- FOOTER -->
         <footer>
            <div class="container">
               <div class="row col-md-12 first-section ">
                  <div class="col-md-4 v-bottom">
                     <p>Lorem ipsum dolor sit amet consectetur adipiscing elit auctor, sed faucibus tincidunt</p>
                     <p>© Copyright 2021 Americo. All rights reserved</p>
                  </div>
                  <div class="col-md-4 ">
                     <ul>
                        <li>Home</li>
                        <li>About</li>
                        <li>Service</li>
                        <li>Projects</li>
                        <li>Quote</li>
                     </ul>
                  </div>
                  <div class="col-md-3 ">
                  </div>
               </div>
            </div>
         </footer>
      </main>
      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	  <script>
	  $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
	  </script>

   </body>
</html>