<?php
	$ptn_name= $ptn_gender = $ptn_age = $ptn_symptom = $ptn_diagnosis = $ptn_prescription = $ptn_advice = "";
 ?>

<?php
session_start();

if (isset($_SESSION['doctor_vnpi'])) {
  
  
  echo "<script>location.href='patient_doc/doc_login_patient.php'</script>"; 
  
  
}
else
{
    // echo "<script>location.href='doc_login_patient.php'</script>";
  }	

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Doctor Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="doc_login_patient.css">

	<!--Bootstrap-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
   
</head>

<body>

<?php require('header.php') ;?>
 <br>

  <div class="container donation_form_container" style="max-width: 500px;" margin="33%">
         <form action="" method="POST">
            <div class="container-fluid inside_form_container">
                <h3><strong>Doctor Login</strong></h3>

                
                <hr>
                <label for="doctor_vnpi"><b>Virtual-NPI :</b></label>
                <input type="text" name="doctor_vnpi" id="doctor_vnpi" placeholder="Enter Full Name" required >


                <label for="doclogin_password"><b>Password :</b></label>
                <input type="Password"  name="doclogin_password" id="doclogin_password" placeholder="Enter Password" required >

               
                <label for="doclogin_button" style="background-color: lightblue;"></label>
                <button type="submit" name="doclogin_button"  >Login</button>

                <p>Not registered yet ? <a href="doctor_registration/doctor_registration.php"><u style="color: blue;"> Register here</u> </a></p>

                
          </div>     
      </form>
</div>


<?php

if(isset($_POST) && array_key_exists('doclogin_button',$_POST) )
        {


  $uname = $_POST['doctor_vnpi'];
  $pwd = $_POST['doclogin_password'];
  echo $uname;


 
      // **********Connect database******

  require($_SERVER['DOCUMENT_ROOT'].'/connect_db.php');

$sql = "SELECT * FROM doctor_registration where doc_vnpi = '$uname' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if($pwd == $row['doc_password']){
    $_SESSION['doctor_vnpi']=$row['doc_vnpi'];
    

    echo "<script>location.href='patient_doc/doc_login_patient.php'</script>";
  }else{
    echo "<script>alert('Incorrect Password')</script>";
  }
  } else {
    echo "<script>alert('Virtual-NPI Does Not Exist')</script>";
}
}
?>

<?php require('footer.php') ;?>





<style type="text/css">
 .error
{
  color: red;
  font-style: italic;
}
</style>