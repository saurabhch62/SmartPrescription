
<?php

$doctor_npi = 
$doctor_name=
$doctor_gender=
$doctor_age=
$doctor_designation=
$doctor_email =
$doctor_password =
$clinic_address =
$doctor_mobile =
$doctor_verification_status = "";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Doctor Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="doctor_registration.css">

	<!--Bootstrap-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
   
</head>

<body>

<?php require('../header.php') ;?>
 <br>

  <div class="container donation_form_container" style="max-width: 500px;" margin="33%">
         <form action="" method="POST">
            <div class="container-fluid inside_form_container">
                <h3><strong>Doctor Registration</strong></h3>
                
                <hr>

                <label for="doctor_vnpi"><b>Virtual VPNI :</b></label>
                <input type="text" name="doctor_vnpi" id="doctor_vnpi" placeholder="Create VPNI" required >

                <label for="doctor_name"><b>Name :</b></label>
                <input type="text" name="doctor_name" id="doctor_name" placeholder="Enter Full Name" required >


                <label for="doctor_gender"><b>Gender :</b></label>
                <input type="text"  name="doctor_gender" id="doctor_gender" placeholder="Enter gender" required >

                <label for="doctor_age"><b>Age:</b></label>
                <input type="text" placeholder="Enter Age" id="doctor_age"  name="doctor_age" required  >     


                
                <label for="doctor_designation"><b>Designation : </b></label>
                <input type="text" placeholder="Enter Designation" id="doctor_designation"  name="doctor_designation" required  >
                     
                <br>

                <label for="doctor_email"><b>Email  : </b></label>
                
                     <input type="email" name="doctor_email" id="doctor_email" required  placeholder="Enter email"  >   
                <br>


                <label for="doctor_password"><b>Password : </b></label>
                 <input type="text" placeholder="Enter Password" id="doctor_password" minlength="7" maxlength="16" name="doctor_password" required>
                <br> 

                <label for="clinic_address"><b>Clinic Address : </b></label>
                
                     <textarea name="clinic_address" id="clinic_address" required   >  </textarea> 
                <br>

                <label for="doctor_mobile"><b>Contact No. : </b></label>
                 <input type="text" placeholder="Enter mobile number" id="doctor_mobile" minlength="7" maxlength="16" name="doctor_mobile" required>
                <br>

                
                <br>
                <label for="register_button" style="background-color: lightblue;"></label>
                <button type="submit" name="register_button" class="register_button" >Register</button>


                

                
          </div>     
      </form>
</div>






  <?php 

  # code...



if(isset($_POST) && array_key_exists('register_button',$_POST) )
        {


$doctor_npi = $_POST['doctor_vnpi'];
$doctor_name=$_POST['doctor_name'];
$doctor_gender=$_POST["doctor_gender"];
$doctor_age=$_POST["doctor_age"];
$doctor_designation=$_POST["doctor_designation"];
$doctor_email =$_POST["doctor_email"];
$doctor_password =$_POST["doctor_password"];
$clinic_address =$_POST["clinic_address"];
$doctor_mobile =$_POST["doctor_mobile"];
$doctor_verification_status = "1";


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





       $sql = "INSERT INTO `doctor_registration` (`doc_sn`, `doc_vnpi`, `doc_name`, `doc_gender`, `doc_age`, `doc_designation`, `doc_email`, `doc_password`, `doc_mobile`, `doc_address`, `doc_verification`) VALUES (NULL, '".$doctor_npi."', '".$doctor_name."', '".$doctor_npi."', '".$doctor_npi."', '".$doctor_npi."', '".$doctor_npi."', '".$doctor_npi."', '".$doctor_npi."', '".$doctor_npi."', '".$doctor_npi."');";


if ($conn->query($sql) === TRUE) {
    echo "Your have Registered yourself.";
    ?>
  <script type="text/javascript">alert('Your have Registered yourself')</script>;
  <?php
  
    // $submitted = "Your have Registered yourself.";
   

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  //echo "Server Error! please try again later";
       ?>
  <script type="text/javascript">alert('Server Error! please try again later')</script>;
  <?php
      exit();
  // $submitted = "Server Error! please try again later";


}
}
?>
   
