<?php

$to = "about.srb@gmail.com";
$subject = "hhdas";
$message = "knkdna";
$header = "cont.hry@gmail.com";

if(mail($to, $subject, $message,$header))
{
	echo "mailed send succesfully";
}
else
{
	echo "cannot send mail";
}


?>