<?php
	$ptn_name= $ptn_gender = $ptn_age = $ptn_symptom = $ptn_diagnosis = $ptn_prescription = $ptn_advice = "";
 ?>

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
	<title>Give</title>
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

<div class="container-fluid"  style="background-color: lightgreen;padding:6px;  ">
   <div class="row">
   <div class="container-fluid col-sm-4" style="margin: auto;" ><h5>Welcome back! <i style="color: tomato;"><?php echo " " .$_SESSION['doctor_vnpi'].""?></i></h5></div>
    <div class="col-sm-8" align="right"><a href="logout_doctor.php"><button style="min-width: 100px; border-radius: 8px;color:white;background-color: red;padding: 4px;box-shadow: 0px 0px 0px 3px tomato; border: none; ">Logout</button></a></div>
    </div>
</div> 
 <br>


  <div class="container donation_form_container" style="max-width: 450px;">
         <form action="makepdf/makepdf.php" method="POST">
            <div class="container-fluid inside_form_container">
                <h6><strong>Click respective field to fill and Speak :</strong></h6>
                
                <hr>
                <label for="ptn_name"><b>Patient Name</b></label>
                <input type="text" name="ptn_name" id="ptn_name" placeholder="Enter Full Name" required onclick="record(this.id)">

                <label for="ptn_gender"><b>Gender :</b></label>
                <input type="text" required  name="ptn_gender" id="ptn_gender" placeholder="Enter gender" onclick="record(this.id)" >

                <label for="ptn_age"><b>Age:</b></label>
                <input type="text" placeholder="Enter Age" id="ptn_age" required name="ptn_age" onclick="record(this.id)" >     


                
                <label for="ptn_symptom"><b>Symptoms : </b></label>
                
                     <textarea name="ptn_symptom" id="ptn_symptom" required onclick="record(this.id)"  >  </textarea> 
                <br>

                <label for="ptn_diagnosis"><b>Diagnosis : </b></label>
                
                     <textarea name="ptn_diagnosis" id="ptn_diagnosis" required placeholder="Ex:" maxlength="40"  value="<?php echo $ptn_diagnosis;?>" onclick="record(this.id)" >  </textarea> 
                <br>

                <label for="ptn_prescription"><b>Prescription: </b></label>
                
                     <textarea name="ptn_prescription" id="ptn_prescription" required placeholder="Ex: " onclick="record(this.id)"  >  </textarea> 
                <br>

                <label for="ptn_advice"><b>Advice  : </b></label>
                
                     <textarea name="ptn_advice" id="ptn_advice" required  placeholder="Ex: " onclick="record(this.id)" >  </textarea> 
                <br>
                <br>

                <label for="btn_lock" style="background-color: lightblue;"></label>
                <button type="button" name="btn_next" onclick= "btn_lock()" >Confirm and lock</button>
                <br>


                
                <div class="clearfix" id="btn_next_submit_div" >
            
                    <button   type="submit" name="down_pdf" id="down_pdf" class="down_pdf"  >download pdf</button>
                </div>

                <div class="clearfix" id="btn_next_submit_div" >
            
                    <button   type="submit" name="btn_next_submit" id="btn_next_submit" class="btn_next_submit"  >Send mail</button>
                </div>

          </div>     
      </form>
</div>




<script>
         function record(event_id) {
            
            var recognition = new webkitSpeechRecognition();
            recognition.lang = "en-GB";

            recognition.onresult  = function(event) {
                // console.log(event);
                document.getElementById(event_id).value = event.results[0][0].transcript;
            }
            recognition.start();

        }

       


     //    }
 </script>


<style type="text/css">
 .error
{
  color: red;
  font-style: italic;
}
</style>