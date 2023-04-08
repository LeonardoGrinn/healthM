<?php 

// Start Session
session_start();

if(isset($_SESSION['info'])) {

  // Extract Array so as we can use its key as variable name
  extract($_SESSION['info']);


  //$servername = "sql910.main-hosting.eu";
  $servername = "localhost";
  $database = "u554046401_heathM";
  $username = "u554046401_heathM";
  $password = "112123@33223QQQQWs";
  // $username = "root";
  // $password = "";
  $statusConn;

  // Conect to data base
  $conn = mysqli_connect($servername, $username, $password, $database);

  $sql = mysqli_query($conn, "INSERT INTO form_steps (zipcode, age, household_size, household_estimated, anualhouse_hold) VALUES('$zipcode', '$age', '$householdsize', '$householdestimated', '$anualhousehold')");


  if($sql) {
    unset($_SESSION['info']);

    $statusConn = "Data has been saved succesfully!";
    // echo 'Data has been saved succesfully!';

  } else {

    $statusConn = mysqli_error($conn);
    // echo mysqli_error($conn);
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
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Font Family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Results | Thanks</title>
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
      <div class="section__stepsbar-icon step-completed">
        <center><span><i class="fa-solid fa-heart-pulse"></i></span></center>
        <center><p>Life Events</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span class="current-step"><i class="fa-solid fa-square-poll-vertical"></i></span></center>
        <center><p>Results</p></center>
      </div> <!-- ./section__steps-icon -->
      
    </div>

  </section><!-- section__currentStep -->

  <!-- section__progressbar -->
  <section class="section__progressbar padding-section">

    <div class="section__progressbar-box">
      <div class="section__progressbar-fill" style="width:100%"></div>
      <div class="section__progressbar-filled" style="width:100%"></div> 
    </div>

  </section><!-- ./section__progressbar -->

  <!-- section__thanks-->
  <section class="section__thanks padding-section">
    
    <!-- First Form -->
    <center>
      <div>
        <br/>
        <br/>
        <p><u>You Qualify</u> for an Affordable Care Act Health Insurance Plan that covers your whole Household. <u>$10/month or less.</u></p>
      </div>
    </center>
      
    <br/>
    <br/>
    <br/>

    <div class="section__thanks-features">
      <div class="section__thanks-f">
        <p>• $0 Primary Care Visits</p>
        <p>• $0 Virtual Urgent Care</p>
        <p>• $0 Prescription Drug Costs</p>
      </div>
    </div>
    
    <br/>

    <center>
      <div>
        <p>Call the Number Below to Enroll</p>
        <p>(only takes about 10 minutes)</p>

        <br/>
        <br/>
        
        <button class="btn btnForm" href="tel:8559693952"><a href="tel:8559693952">855-969-3952</a></button>
      </div>
    </center>
    
   
  </section><!-- section__thanks -->

</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script>

</html>
