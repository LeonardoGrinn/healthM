<?php 
include 'utils.php';
// Start Session
session_start();

if(isset($_POST['next'], $_POST['anualhousehold'])) {

  $_SESSION['info']['next']= $_POST['next'];
  $householdSize=  $_SESSION['info']["householdsize"];
  $income=  $_SESSION['info']["householdestimated"];
  $lifeEvents =  $_SESSION['info']["anualhousehold"];
  $state =  $_SESSION['info']["state"];

  echo checkIncomeStepfive($householdSize, $income, $lifeEvents, $state);
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

  <title>Step 5 | Life Events</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SNH79EYLLD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-SNH79EYLLD');
  </script>  

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
      <div class="section__progressbar-fill" style="width:80%"></div>
      <div class="section__progressbar-filled" style="width:60%"></div> 
    </div>

  </section><!-- ./section__progressbar -->

  <!-- section__currentStep -->
  <section class="section__currentstep padding-section">
    
    <!-- First Form -->
    <center>
      <form method="POST" class="section__step-form">
        <label>What is your estimated annual Household income for 2023?</label> <br/><br/>
        <p><small><i>Enter your estimated income range for everyone your included in your Household</i></small></p> <br/>
        
        <!-- <select required style="width: 50%;" class="btn btnForm" value="<?= isset($_SESSION['info']['anualhousehold']) ? $_SESSION['info']['anualhousehold'] : '' ?>" name="anualhousehold">
          <option value="Losing or lost health coverage">Losing or lost health coverage</option>
          <option value="Changes with my family">Changes with my family</option>
          <option value="Started or left a job">Started or left a job</option>
          <option value="Move to a new state">Move to a new state</option>
          <option value="None of these apply">None of these apply</option>
        </select> -->

        <div class="btn btnForm stepCheckbox">
          <input type="checkbox" id="event1" name="anualhousehold" value="Losing or lost health coverage">
          <label for="event1"> Losing or lost health coverage</label><br>
        </div>

        <div class="btn btnForm stepCheckbox">
          <input type="checkbox" id="event2" name="anualhousehold" value="Changes with my family">
          <label for="event2"> Changes with my family</label><br>
        </div>

        <div class="btn btnForm stepCheckbox">
          <input type="checkbox" id="event3" name="anualhousehold" value="Started or left a job">
          <label for="event3"> Started or left a job</label><br><br>
        </div>
        
        <div class="btn btnForm stepCheckbox">
          <input type="checkbox" id="event4" name="anualhousehold" value="Move to a new state">
          <label for="event4"> Move to a new state</label><br><br>
        </div>

        <div class="btn btnForm stepCheckbox">
          <input type="checkbox" id="event5" name="anualhousehold" value="Move to a new state">
          <label for="event5"> Move to a new state</label><br><br>
        </div>

        <div class="btn btnForm stepCheckbox">
          <input type="checkbox" id="event6" name="anualhousehold" value="None of these apply">
          <label for="event6"> None of these apply</label><br><br>
        </div>
        
        
        

        <!-- Form buttons -->
        <div>
          <a id="btBack" class="btn btnLink btn-red" href="step-4.php">Previous</a>
          <input id="btNext" class="btn btnForm" name="next" value="Submit" type="submit">
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

<!-- Tag para registrar el click -->
<script>
document.getElementById("btBack").addEventListener("click", gtag_Back);
document.getElementById("btNext").addEventListener("click", gtag_Next);

function gtag_Next() {
  gtag('event', 'click', { 'event_category': 'RegisterForm', 'event_label': 'Next', 'value':'Step 5 - Life Events' });
}

function gtag_Back() {
  gtag('event', 'click', { 'event_category': 'RegisterForm', 'event_label': 'Back', 'value':'Step 5 - Life Events' });
}
</script>

</html>
