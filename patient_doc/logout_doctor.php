<?php
session_start();

if (isset($_SESSION['doctor_vnpi'])) {
	session_destroy();
   echo "<script>location.href='../doctor_login.php'</script>";

}
else
{
  
    echo "<script>location.href='../doctor_login.php'</script>"; 
}

?>
