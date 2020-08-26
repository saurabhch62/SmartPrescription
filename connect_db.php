<?php  //form for registration



    // vairable for connection
  $servername = "localhost";  //server266.web-hosting.com
  $username = "root";//kaarabnf
  $password = "";
  $dbname = "voice_prescription";//kaarabnf_Kaarwaa_db
//Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    ?>
    <script type="text/javascript">alert('Service Unavailable (DB-K315)!')</script>

   <?php
   exit();
} 
// echo "Connected successfully";
?>

 
