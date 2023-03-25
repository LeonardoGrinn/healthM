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
  $password = "143dq3242tr245t45&/GY7";
  // $username = "root";
  // $password = "";

  // Conect to data base
  $conn = mysqli_connect($servername, $username, $password, $database);

  $sql = mysqli_query($conn, "INSERT INTO form_steps (zipcode, age, household_size, household_estimated, anualhouse_hold) VALUES('$zipcode', '$age', '$householdsize', '$householdestimated', '$anualhousehold')");


  if($sql) {
    unset($_SESSION['info']);

    echo 'Data has been saved succesfully!';
    echo $zipcode;

  } else {
    echo mysqli_error($conn);
  }

}

?>