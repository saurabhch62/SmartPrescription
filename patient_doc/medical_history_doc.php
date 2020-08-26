<?php
session_start();
if(!isset($_SESSION['doctor_vnpi'])){
  echo "<script>location.href='../doc_login_patient.php'</script>"; 
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Medical History </title>
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

<?php require('../header.php') ;?>
<br>

<div class="container-fluid"  style="background-color: lightgreen;padding:6px;  ">
   <div class="row">
   <div class="container-fluid col-sm-4" style="margin: auto;" ><h5>Patient Id : <i style="color: tomato;"><?php echo " " .$_SESSION['uname'].""?></i></h5></div>
    <div class="col-sm-8" align="right"><a href="logout_doctor.php"><button style="min-width: 100px; border-radius: 8px;color:white;background-color: red;padding: 4px;box-shadow: 0px 0px 0px 3px tomato; border: none; ">Logout</button></a></div>
    </div>
</div>  
<br>

<?php 

require($_SERVER['DOCUMENT_ROOT'].'/connect_db.php');
$sql = "SELECT p_sympton, p_diagnosis, p_prescription, p_advice FROM patient_medical_history";
$result = $conn->query($sql);

?>

<div class="container table_container" >
    <h3>Medical history : </h3>
    <table class="table table-hover table-bordered">
      <thead class="thead">
      <tr class="head_row">
        <th >Prescribe Date & Time</th>
        <th>Sympton</th>
        <th>Diagnosis</th>
        <th>Prescription</th>
        <th>Advice</th>
      </tr>
      </thead>

      <tbody>
<?php
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        
      ?>
      <tr>
        <td> Column N.D. </td>
        <td><?php echo  $row["p_sympton"]  ?></td>
        <td><?php echo  $row["p_diagnosis"]  ?></td>
        <td><?php echo  $row["p_prescription"]  ?></td>
        <td><?php echo  $row["p_advice"]  ?></td>
      </tr>
  <?php  }
}
      else {
    echo "We are sorry, Medical history is  unavailable";
      } 

?>
      
    </tbody>
    </table>

  </div>    

        
<br>

<div class="container-fluid"  >
   <div class="row">
   <div class="container-fluid" align="center" style="margin: auto;" >
        <a href="give_prescription.php">
              <button style="min-width: 100px; border-radius: 8px;color:white;background-color: red;padding: 4px;box-shadow: 0px 0px 0px 3px tomato; border: none; ">Next</button>
        </a>
    </div>
</div>  
<br>

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
