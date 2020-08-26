<?php
session_start();

if (isset($_SESSION['doctor_vnpi'])) {
  
  
  
 
}
else
{
    echo "<script>location.href='../doctor_login.php'</script>";
  } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient Login </title>
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

 <div class="container-fluid"  style="background-color: lightgreen;padding:6px;  ">
   <div class="row">
   <div class="container-fluid col-sm-4" style="margin: auto;" ><h5>Current Patient Id:   <i style="color: tomato;"><?php echo " " .$_SESSION['doctor_vnpi'].""?></i></h5></div>
    <div class="col-sm-8" align="right"><a href="logout_doctor.php"><button style="min-width: 100px; border-radius: 8px;color:white;background-color: red;padding: 4px;box-shadow: 0px 0px 0px 3px tomato; border: none; ">Logout</button></a></div>
    </div>
</div>  
<br>




   <!-- Login Form  -->

    <div class="container donation_form_container" style="max-width: 450px;">
         <form action="" method="POST">
            <div class="container-fluid inside_form_container">
                <h3><strong>Enter Patient id</strong></h3>
                
                
                <hr>
                <label for="mbr_uname"><b>User Name :</b></label>
                <input type="text" id="mbr_uname" name="mbr_uname"  placeholder="patient user id" required><br>


                <div class="clearfix">
            
                    <button  type="submit" name="mlogin_submit" class="donatebtn" >Next</button>
                </div>
          </div>     
      </form>
      <a href="doc_reg_patient"></a>
</div>

<br>
<?php

if(isset($_POST) && array_key_exists('mlogin_submit',$_POST) )
        {


         

  $uname = $_POST['mbr_uname'];
  


 
      // **********Connect database******

  require($_SERVER['DOCUMENT_ROOT'].'/connect_db.php');

$sql = "SELECT * FROM patient_registration where ptn_id = '$uname' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  
    $_SESSION['uname']=$row['patient_id'];
    

    echo "<script>location.href='medical_history_doc.php'</script>";
  }
  else {
    echo "<script>alert('Patient Id is Incorrect')</script>";
}
}
?>
  <!--Footer-->


<!--Footer-->








<style>
	
  /*media query if screen size less than 576*/
  @media only screen and (max-width: 575px) {	


  }
	
	/*media query if screen size less than 768*/
	@media only screen and (max-width: 768px) {
  

 

 
}
	@media only screen  and (min-width : 768px) {
		
		
 



}


 

</style>
     
 <script>



</script>    



</body>
</html>
