<?php 
// Start session 
session_start();

if (isset($_POST['next'])) {
  // Create a new session variable any input inside key and values from POST array.
  foreach($_POST as $key => $value) {
    $_SESSION['info'][$key] = $value;
  } 

  //Remove Next Key 

  $keys = array_keys($_SESSION['info']);
  
  if (in_array('next', $keys)) {
    unset($_SESSION['info']['next']);
  }

  //Redirect to Step 2 Page 
  header("Location: step-2.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/icon-font.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

  <!-- Font Family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Starter</title>
</head>

<body>

<!-- Navbar -->
<?php include 'navbar.php';?>
<!-- Navbar -->

  <!-- Section Hero -->
  <section class="section__hero">
    
    <div class="section__hero-empty"></div><!-- section__hero-empty -->

    <!-- section__hero-textbox -->
    <div class="section__hero-textbox">

      <!-- section__hero-textbox-content -->
      <div class="section__hero-textbox-content">

        <center><h4>See if you qualify for goverment subsidized health insurance fo $10/month or less</h4></center>

        <!-- First Form -->
        <center>
          <form method="POST" class="section__hero-form">
            <input required type="text" pattern="[0-9]*" id="" placeholder="Zip Code" value="<?= isset($_SESSION['info']['zipcode']) ? $_SESSION['info']['zipcode'] : '' ?>" name="zipcode"> <br/>
            <input class="btn btnForm" name="next" value="Get Started" type="submit">
          </form>
        </center> <!-- ./First Form -->

       <center> <div class="section__hero-features">
          <p>• 4 out of 5 Qualify</p>
          <p>• 0 Primary Care Visits</p>
          <p>• 0 Virtual Urgent Care</p>
          <p>• $3 Prescription Drug Costs</p>
        </div></center>
        
      </div> <!-- ./section__hero-textbox-content -->
    </div> <!-- ./section__hero-textbox -->

    <div class="section__hero-empty-bottom"></div><!-- section__hero-empty -->
   
  </section>

  <!-- Texbox Banner -->
  <section class="section-textbanner">
    <p>Affordable Care Act (Obamacare) Health Insurance Plans</p>
  </section> <!-- ./Texbox Banner -->
  <!-- ./Section Hero -->

  <!-- Section Steps -->
  <section class="section__steps padding-section">

    <div class="section__steps-description"> <!-- Steps description -->
      <center><p>Determine your eligibility for goverment subisidized healt insurance in 4 easy steps</p></center>
    </div> <!-- ./Steps description -->

    <div class="section__steps-box">

      <!-- section__steps-icon -->
      <div class="section__steps-icon">
        <center><span>1</span></center>
        <center><p>Zip Code</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__steps-icon">
        <center><span>2</span></center>
        <center><p>Age</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__steps-icon">
        <center><span>3</span></center>
        <center><p>Household Size</p></center>
      </div> <!-- ./section__steps-icon -->
      
      <!-- section__steps-icon -->
      <div class="section__steps-icon">
        <center><span>4</span></center>
        <center><p>Household Income</p></center>
      </div> <!-- ./section__steps-icon -->
      
    </div>

  </section><!-- ./Section Steps -->

  <!-- Section Info -->
  <section class="section__info padding-section">
    <!-- section__info-about -->
    <dir class="section__info-about">

      <h1>About</h1>
      <p>USA Health Marketplace.org was created to inform US citizens of their health insurance options specifically for eligibility for 
        Affordable Care Act government subsidized health insurance plans. Our goal is to provide a tool and a resource to determine if 
        your eligibility for a ACA health insurance plan without asking or storing any personal information.</p>

    </dir>  <!-- ./section__info-about -->

    <!-- section__info-health -->
    <div class="section__info-health">

      <h1>Goverment Health</h1>

      <a href="#">Medicaid</a> <br/>
      <a href="#">Medicare</a> <br/>
      <a href="#">Affordable Care Act Plans</a>

    </div><!-- ./section__info-health -->
  </section> <!-- ./Section Info -->

</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script>

</html>
