<?php session_start();

$campaignPost = 'https://crosspointe.leadportal.com/genericPostlead.php'; 

/* LIVE
if(!empty($_REQUEST['firstname'])){
	$_SESSION['firstname']=preg_replace('/[{}]/', '', $_REQUEST['firstname']);
}

if(!empty($_REQUEST['lastname'])){
	$_SESSION['lastname']=preg_replace('/[{}]/', '', $_REQUEST['lastname']);
}

if(!empty($_REQUEST['email'])){
	$_SESSION['email']=preg_replace('/[{}]/', '', $_REQUEST['email']);
}

if(!empty($_REQUEST['phone'])){
	$_SESSION['phone']=preg_replace('/[{}]/', '', $_REQUEST['phone']);
} */

//$Test_Lead='0'; // 1 (Only when testing)
$Test_Lead='1';
$TYPE='45';
$SRC='MyMortgageProtection';
/**** FORM ****/
$State=$_SESSION['State'];
$City=$_SESSION['City'];
$Zip=$_SESSION['Zip'];
$address=$_SESSION['address'];
$email=$_REQUEST['email'];
$lastname=$_REQUEST['lastname'];
$firstname=$_REQUEST['firstname'];
$phone=$_REQUEST['phone'];
$Sub_ID=$_SESSION['Sub_ID'];
$Pub_ID=$_SESSION['Pub_ID'];
$token=$_SESSION['token'];


  
  if(!empty($_SESSION['phone'])){
 $phone=preg_replace('/[{}]/', '', $_SESSION['phone']);
 //PHONE FORMAT CLEAR ALL
 $phone = preg_replace("/[^0-9]/", "", $phone );


}

$MortgageYearsRemaining=$_SESSION['MortgageYearsRemaining'];
$Monthly_Payment=$_SESSION['Monthly_Payment'];
//step2
$HeightF=$_SESSION['HeightF'];
$HeightI=$_SESSION['HeightI'];

$Weight=$_SESSION['Weight']; 
$Term=$_SESSION['Term'];
$Gender=$_SESSION['Gender'];
$Birth_Month=$_SESSION['Birth_Month'];
$Birth_Day=$_SESSION['Birth_Day']; 
$Birth_Year=$_SESSION['Birth_Year']; 
$Tobacco_Use=$_SESSION['Tobacco_Use']; 
$Major_Health_Issues= $_SESSION['Major_Health_Issues'];
//step2
$date=$Birth_Month."/".$Birth_Day."/".$Birth_Year;

if($Gender == "Male")
	$genderC="M";
if($Gender == "Female")
	$genderC="F";
if($Tobacco_Use == "Yes")
	$tobacco="true";
if($Tobacco_Use == "No")
	$tobacco="false";

$weightC= str_replace(" lb", "",$Weight);
$ft= str_replace(" ft", "",$HeightF);
$in= str_replace(" in", "",$HeightI);
$Monthly_Payment= str_replace(",", "",$Monthly_Payment);
$MortgageYearsRemaining= str_replace(" Years", "",$MortgageYearsRemaining);
if($MortgageYearsRemaining <= 5){
	$MortgageYearsRemaining=5;
}
else if($MortgageYearsRemaining >5 && $MortgageYearsRemaining <= 10){
	$MortgageYearsRemaining=10;
}
else if($MortgageYearsRemaining >10 && $MortgageYearsRemaining <= 15){
	$MortgageYearsRemaining=15;
}
else if($MortgageYearsRemaining >15 && $MortgageYearsRemaining <= 20){
	$MortgageYearsRemaining=20;
}
else if($MortgageYearsRemaining >20 && $MortgageYearsRemaining <= 25){
	$MortgageYearsRemaining=25;
}
else if($MortgageYearsRemaining >25 && $MortgageYearsRemaining <= 30){
	$MortgageYearsRemaining=30;
}
else if($MortgageYearsRemaining >30 && $MortgageYearsRemaining <= 35){
	$MortgageYearsRemaining=35;
}
else if($MortgageYearsRemaining >35 && $MortgageYearsRemaining <= 40){
	$MortgageYearsRemaining=40;
}
/*$ft= substr($Height, 0);
$in= substr($Height, 4,2);*/
$ft = $ft*12;
$heigthC= $ft + $in;
$Landing_Page ="mymortgageprotection";





//Build DATA array
//Arrangement and variables set by Boberdoo
$dataArray = array(
   'TYPE'                    	=> $TYPE,
   'SRC'                     	=> $SRC,
   'Sub_ID'                     	=> $Sub_ID,
   'Pub_ID'                     	=> $Pub_ID,
   'Landing_Page'            	=> 'mymortgageprotection.com/',
   'Gender'              		=> $Gender,
   'City'            		=> $City,
   'State'            		=> $State,
   'Heigth'            		=> $heigthC,
   'Weight'            		=> $weightC,
   'First_Name'              	=> $firstname,
   'Last_Name'               	=> $lastname,
   'Email'                   	=> $email,
   'Address'                   	=> $address,
   'Date_of_Birth'				=> $date,
   'Tobacco_Use'				=> $Tobacco_Use,
   'Zip'					=> $Zip,
   'Phone'					=> $phone,
   'Mortgage_Term'			=> $Term,
   'Mortgage_Years_Remaining'	=> $MortgageYearsRemaining,
   'Mortgage_Amount'	    => $Monthly_Payment,
   'Major_Health_Issues'	    => $Major_Health_Issues,
   
);


//Store to DB Before Send to Boberdoo


/**** End FORM ****/



   $servername = "192.168.5.115";
   $database = "db4385365995";
   $username = "fw5721316214";
   $password = "5TC2Nq1iBp3zSz9UEvJS9Vs4O5On4F";
 
   $conn = new mysqli($servername, $username, $password, $database);
 
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
 

    $sql = "INSERT INTO `failed_leads_SL` (`Sub_ID`, `Pub_ID`, `SubID`, `SubID2`, `Token`, `Unique_Identifier`, `transaction_id`, `clickid`, `SRC`, `Landing_Page`, `TCPA_Consent`, `IP_Address`, `Gender`, `Age`, `Tobacco_Use`, `Birth_Month`, `Birth_Day`, `Birth_Year`, `Universal_LeadId`, `Mobile`, `First_Name`, `Last_Name`, `Phone`, `Email`, `Address`, `City`, `State`, `Zip`, `error_log`, `error_type`, `Major_Health_Issues`, `Weight`, `Height`, `Term`, `MortgageYearsRemaining`, `Monthly_Payment` ) VALUES
   ('$Sub_ID', '$Pub_ID', '$Sub_ID', '$SubID2', '$Token', '$Unique_Identifier', '$transaction_id', '$clickid', '$SRC', '$Landing_Page', '$TCPA', '$ip_address', '$Gender', '$Age', '$Tobacco_Use', '$Birth_Month', '$Birth_Day', '$Birth_Year', '$Universal_LeadId', '$Mobile', '$firstname', '$lastname', '$phone', '$email', '$address', '$City', '$State', '$Zip', '', '', '$Major_Health_Issues', '$weightC', '$heigthC', '$Term', '$MortgageYearsRemaining', '$Monthly_Payment')";
 
 
   $result =$conn->query($sql);
 
   $last_id = $conn->insert_id;
   $current_date=date('Y-m-d H:i:s');
   
   
    //End of DB Stored
	
//date in mm/dd/yyyy format; or it can be in other formats as well
 $birthDate = $Birth_Month."/".$Birth_Day."/".$Birth_Year;
 //explode the date to get month, day and year
 $birthDate = explode("/", $birthDate);
 //get age from date or birthdate
 $Age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
   ? ((date("Y") - $birthDate[2]) - 1)
   : (date("Y") - $birthDate[2]));
 //echo "Age is:" . $age;
 
 if($Age >= 60){
 header('Location: senior.html');
}else{

 /* esto es boberdoo para entonces descomento*/


//DATA DELIVERY
foreach($dataArray as $key=>$value) { $dataArray_string .= $key.'='.$value.'&'; }
rtrim($dataArray_string, '&');

//open connection
$ch = curl_init();

//POST for DATA DELIVERY
curl_setopt($ch,CURLOPT_URL, $campaignPost);
curl_setopt($ch,CURLOPT_POST, count($dataArray));
curl_setopt($ch,CURLOPT_POSTFIELDS, $dataArray_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//execute post
$result=curl_exec($ch);
curl_close($ch);

 $xmldata = simplexml_load_string($result);

if($xmldata->status=='Error'){


   $error_msg=$xmldata->error;
   $error_type="Error";

   $sql2 = "UPDATE failed_leads_SL SET error_log='$error_msg', error_type='$error_type', curr_date='$current_date' WHERE id='$last_id'";
   $result =$conn->query($sql2);

}
else if($xmldata->status=='Unmatched'){
  //for test
	//print_r('Error: '.$xmldata->error);
   $error_msg=$xmldata->error;
   $error_type="Unmatched";

   $sql2 = "UPDATE failed_leads_SL SET error_log='$error_msg', error_type='$error_type', curr_date='$current_date' WHERE id='$last_id'";
   $result =$conn->query($sql2);
}
else {
//print_r($xmldata);	

$error_msg='NoErrors';
$error_type="Match";

   $sql3 = "UPDATE failed_leads_SL SET error_log='$error_msg', error_type='$error_type', curr_date='$current_date' WHERE id='$last_id'";
   $result =$conn->query($sql3);
}



  /*  URL redirect covr old */
  $url="https://americo.covrtech.com/dataimport?path=quote/term-life-insurance/loan-protector/get-a-quote/term&dateOfBirth=".$date."&state=".$State."&gender=".$genderC."&weight=".$weightC."&totalInches=".$heigthC."&usResident=true&replacePolicy=true&tobacco=".$tobacco."&faceAmount=".$Monthly_Payment."&healthClass=".$Major_Health_Issues."&termLength=".$MortgageYearsRemaining."&firstName=".$firstname."&lastName=".$lastname."&phone=".$phone."&email=".$email;
   
   
  /*  URL redirect graphic  $url="mortgage-potection-insurance.php?dateOfBirth=".$date."&state=".$State."&gender=".$genderC."&weight=".$weightC."&totalInches=".$heigthC."&usResident=true&replacePolicy=true&tobacco=".$tobacco."&faceAmount=".$Monthly_Payment."&healthClass=PP&termLength=".$MortgageYearsRemaining."&firstName=".$firstname."&lastName=".$lastname."&phone=".$phone."&email=".$email."&ft=".$ft."&in=".$in;*/
   
   


header('Location: '.$url);

}



?>
<!--<a href="<? echo $url; ?>"><? echo $url; ?></a>-->