<?php 

// Start Session
session_start();

if(isset($_POST['next'])) {

  // Create a new session variable any put inside key and values from POST array. 
  foreach ($_POST as $key  => $value) {

    $_SESSION['info'][$key] = $value;
  }

  $keys = array_keys($_SESSION['info']);

  // Remove Next Key. 
  if (in_array('next', $keys)) {
    unset($_SESSION['info']['next']);
  }

  // Redirecto to step-3.php
  header("Location: step-5.php");
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

  <title>Step 4 | Income</title>
</head>

<body>

<!-- Navbar -->
<?php include 'navbar.php';?>
<!-- Navbar -->

  <section class="section__stepsbar padding-section">
   
    <div class="section__stepsbar-box">

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><i class="fa-solid fa-cake-candles"></i></span></center>
        <center><p>Age</p></center>
      </div> <!-- ./section__steps-icon -->

       <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><i class="fa-solid fa-magnifying-glass"></i></span></center>
        <center><p>Household Size</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><i class="fa-solid fa-money-bill-trend-up"></i></span></center>
        <center><p>Income</p></center>
      </div> <!-- ./section__steps-icon -->
      
      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span class="current-step"><i class="fa-solid fa-heart-pulse"></i></span></center>
        <center><p>Life Events</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span><i class="fa-solid fa-square-poll-vertical"></i></span></center>
        <center><p>Results</p></center>
      </div> <!-- ./section__steps-icon -->
      
    </div>

  </section><!-- section__currentStep -->

  <!-- section__progressbar -->
  <section class="section__progressbar padding-section">

    <div class="section__progressbar-box">
      <div class="section__progressbar-fill" style="width:60%"></div>
      <div class="section__progressbar-filled" style="width:40%"></div> 
    </div>

  </section><!-- ./section__progressbar -->

  <!-- section__currentStep -->
  <section class="section__currentstep padding-section">
    
    <!-- First Form -->
    <center>
      <form method="POST" class="section__step-form">
        <label>What is your estimated annual Household income for 2023?</label> <br/><br/>
        <p><small><i>Enter your estimated income range for everyone your included in your Household</i></small></p> <br/>
        <input required type="number" value="<?= isset($_SESSION['info']['householdestimated']) ? $_SESSION['info']['householdestimated'] : '' ?>"  placeholder="Household Estimated" name="householdestimated"> <br/>
        <!-- Form buttons -->
        <div>
          <a class="btn btnLink btn-red" href="step-3.php">Previous</a>
          <input class="btn btnForm" name="next" value="Next" type="submit">
        </div>
        <!-- ./Form buttons -->
      </form>
    </center> <!-- ./First Form -->
   
  </section><!-- section__currentStep -->

</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script>

</html>