<?php 
// Start Session
session_start();

if(isset($_POST['next'], $_POST['age'])) {
  $age =  $_POST['age'];
  
  $current_date = new DateTime();
  $birth_date =  $current_date->sub(new DateInterval("P{$age}Y"))->format('Y');

  $_SESSION['info']['birth_date']= $birth_date;
  $_SESSION['info']['age']= $age;
  $_SESSION['info']['next']= $_POST['next'];

  if ($age > 25 && $age < 65) {
    // Redirecto to step-3.php
    header("Location: step-3.php");
  } 

  if ($age < 26) {
    // Redirecto to rejected.php
    header("Location: rejected.php");
  } 
  
  if ($age > 64) {
    header("Location: goverment-health/medicare.php");
  }
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

  <title>Step 2 | Age</title>
</head>

<body>

<!-- Navbar -->
<?php include 'layout/navbar.php';?>
<!-- Navbar -->

  <section class="section__stepsbar padding-section">
   
    <div class="section__stepsbar-box">

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><i class="fa-solid fa-cake-candles"></i></span></center>
        <center><p>Age</p></center>
      </div> <!-- ./section__steps-icon -->

       <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span class="current-step"><i class="fa-solid fa-magnifying-glass"></i></span></center>
        <center><p>Household Size</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span><i class="fa-solid fa-money-bill-trend-up"></i></span></center>
        <center><p>Income</p></center>
      </div> <!-- ./section__steps-icon -->
      
      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span><i class="fa-solid fa-heart-pulse"></i></span></center>
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
      <div class="section__progressbar-fill" style="width:20%"></div>
      <div class="section__progressbar-filled" style="width:0%"></div> 
    </div>

  </section><!-- ./section__progressbar -->

  <!-- section__currentStep -->
  <section class="section__currentstep padding-section">
    
    <!-- First Form -->
    <center>
      <form method="POST" class="section__step-form">
        <label>How old are you?</label> <br/><br/>
        <input required type="number" value="<?= isset($_SESSION['info']['age']) ? $_SESSION['info']['age'] : '' ?>"  placeholder="Introduce your age" name="age"> <br/>
        
         <!-- Form buttons -->
        <div>
          <a class="btn btnLink btn-red" href="index.php">Go back</a>
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
