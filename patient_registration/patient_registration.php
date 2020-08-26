  <?php
	
  $ptn_name= $ptn_gender = $ptn_age = $ptn_symptom = $ptn_diagnosis = $ptn_prescription = $ptn_advice = "";
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="patient_registration.css">

	<!--Bootstrap-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
   
</head>

<body>

 <?php require('../header.php') ;?> 
 <br>

  <div class="container donation_form_container" style="max-width: 450px;">
         <form action="" method="POST">
            <div class="container-fluid inside_form_container">
                <h6><strong>Click and Speak respective field to fill</strong></h6>
                <br>
                <hr>
                <label for="ptn_id"><b>Patient ID</b></label>
                <input type="text" name="ptn_id" id="ptn_id" placeholder="Enter id">
                <label for="ptn_name"><b>Patient Name</b></label>
                <input type="text" name="ptn_name" id="ptn_name" placeholder="Enter Full Name">

                 
                <label for="ptn_gender"><b>Gender </b></label>
                <input type="text" required  name="ptn_gender" id="ptn_gender" placeholder="gender" >

                <label for="ptn_age"><b>Age </b></label>
                <input type="number" placeholder="age" id="ptn_age" required name="ptn_age" >   

               
                <br>
                 <label for="ptn_email"><b>Email</b></label>
                <input type="email" placeholder="email" id="ptn_email" required name="ptn_email" >     
                
                <br>

               
                <label for="ptn_contact"><b>Contact</b></label>
                <input type="tel" placeholder="contact_no." id="ptn_contact" required name="ptn_contact" > 
               
                <br>
                 <label for="ptn_password"><b>Password</b></label>
                <input type="password" name="ptn_password" id="ptn_password" placeholder="Password" >

                <br>
                <br>


                

                <div class="clearfix" id="register_patient" >
            
                    <button   type="submit" name="register_patient" id="register_patient" class="register_patient"  >Resgister</button>
                </div>
          </div>     
      </form>
</div>






<?php

if(isset($_REQUEST['register_patient'])){




$uphoto = "";
$ptn_id=$_POST["ptn_id"];
$ptn_name=$_POST["ptn_name"];
$ptn_gender=$_POST["ptn_gender"];
$ptn_age=$_POST["ptn_age"];
$ptn_email=$_POST["ptn_email"];
$ptn_contact =$_POST["ptn_contact"];
$ptn_password =$_POST["ptn_password"];



    // vairable for connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "voice_prescription";
//Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

   
       $sql = "INSERT INTO `patient_registration` (`sn`, `patient_id`, `patient_name`, `patient_age`, `patient_gender`, `p_email`, `p_mobile`, `p_password`) VALUES (NULL, '".$_POST["ptn_id"]."', '".$_POST["ptn_name"]."', '".$_POST["ptn_gender"]."', '".$_POST["ptn_age"]."', '".$_POST["ptn_email"]."', '".$_POST["ptn_contact"]."', '".$_POST["ptn_password"]."')";




if ($conn->query($sql) === TRUE) {
    //echo "Your have Registered yourself.";
  
    ?>
  <script type="text/javascript">alert('Your have Registered yourself')</script>;
  <?php
  
    // $submitted = "Your have Registered yourself.";
   

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  echo "Server Error! please try again later";
       ?>
<!--   <script type="text/javascript">alert('Server Error! please try again later')</script>;
 -->  <?php
      exit();
  // $submitted = "Server Error! please try again later";


}
}
?> 