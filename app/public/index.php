<?php 
// Start session 
session_start();
// session_destroy();
$message =''; 

if (isset($_POST['next'], $_POST['zipcode'])) {
  $zipcode = $_POST['zipcode'];

  // Initialize CURL session
  $curl = curl_init();
  // Set CURL session options
  curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.zippopotam.us/us/$zipcode",
      CURLOPT_RETURNTRANSFER => true, // Return the response instead of printing it
  ));
  // Send HTTP GET request and store the response
  $response = curl_exec($curl);
  // Check for errors in the HTTP request
  $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  if ($http_code !== 200) {
      $message = "Error: ZIP code not found.";
  } else {
      // Decode the JSON response and extract the state abbreviation
      $data = json_decode($response, true);
      $state_abbr = strtolower($data["country abbreviation"]);
        // Crear el objeto info
        $info = array(
          'state' =>  $state_abbr,
          'zipcode' => $zipcode,
          'next' => $_POST['next']
        );
    
        $_SESSION['info'] = $info;

      // Redirect to step 2
      header("Location: step-2.php");
  }
  // Close the CURL session
  curl_close($curl);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

  <!-- Font Family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Starter</title>
</head>

<body>

<!-- Navbar -->
<?php include 'layout/navbar.php';?>
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
            <input required type="text" pattern="[0-9]*" id="" placeholder="Zip Code" name="zipcode"> <br/>
            <input class="btn btnForm" name="next" value="Get Started" type="submit">
          </form>
    
          <div>
            <p class="section__hero-textbox-text">
                <?php echo $message; ?>
             </p>
          </div>
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

  <!-- Footer -->
  <?php include 'layout/footer.php';?>
  <!-- Footer -->
  

</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script>

</html>
