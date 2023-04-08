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
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Font Family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Privacy Policy</title>
</head>

<body>

<!-- Navbar -->
<?php include 'layout/navbar.php';?>
<!-- Navbar -->



  <!-- Section Steps -->
  <section class="section__legal padding-section">

  <center>
    <h1>
    Privacy Policy
    </h1>
  </center>

  <p>
  Privacy policy
  <br/><br/>
  Thank you for visiting our usahealthmarketplace.org. We take your privacy seriously, and we want to ensure that you feel 
  comfortable using our website. This privacy policy explains how we collect, use, and protect any personal information that 
  you may provide when using our website.
  <br/><br/>
  Information We Collect
  <br/><br/>
  We do not collect any personal information from our website visitors.
  <br/><br/>
  Cookies
  <br/><br/>
  We may use cookies to enhance your user experience on our website. A cookie is a small text file that is stored on your computer 
  or mobile device when you visit our website. The cookie allows us to recognize your browser and provide you with a personalized 
  experience. Cookies do not give us access to your computer or any personal information about you.
  <br/><br/>
  How We Use Your Information
  <br/><br/>
  Since we do not collect any personal information from our website visitors, we do not use your information for any purposes.
  <br/><br/>
  Security
  <br/><br/>
  We take reasonable steps to protect your information from unauthorized access, disclosure, alteration, or destruction. However, 
  please note that no method of transmission over the Internet or electronic storage is 100% secure. Therefore, we cannot guarantee 
  the absolute security of your information.
  <br/><br/>
  Links to Other Websites
  <br/><br/>
  Our website may contain links to other websites that are not under our control. We are not responsible for the privacy practices or 
  the content of these websites. We encourage you to read the privacy policies of these websites before providing any personal 
  information to them.
  <br/><br/>
  Changes to This Privacy Policy
  <br/><br/>
  We reserve the right to modify this privacy policy at any time. If we make material changes to this policy, we will notify you by 
  posting the updated policy on our website.
  <br/><br/>
  Contact Us
  <br/><br/>
  If you have any questions or concerns about this privacy policy, please contact us at [insert contact information].

  </p>

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
