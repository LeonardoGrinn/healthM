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


  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

  <!-- Font Family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Health Listings</title>
</head>

<body onload="getJSONData()">

<!-- Navbar -->
<?php include 'layout/navbar.php';?>
<!-- Navbar -->



  <!-- Section Listings -->
  <section class="section__listings padding-section">

  <center>
    <h1>
    Health Listings
    </h1>
  </center>

  <!-- JSON Render -->
  <div id="res">
 
  </div>


  </section><!-- ./Section Listings -->

  <!-- Footer -->
  <?php include 'layout/footer.php';?>
  <!-- Footer -->
  

</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script>

<!-- Get JSON Data -->
<script src="assets/js/ajax.js"></script>

<!-- JSON medicare-listing -->
<script src="assets/json/medicare-listing.json"></script>

</html>
