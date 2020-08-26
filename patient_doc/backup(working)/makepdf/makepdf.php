 <?php 

 require_once __DIR__ . '/vendor/autoload.php';
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
 echo "working";


$ptn_name = $_POST['ptn_name'];
$ptn_age = $_POST['ptn_age'];
$ptn_name = $_POST['ptn_gender'];
$ptn_name = $_POST['ptn_symptom'];
$ptn_name = $_POST['ptn_diagnosis'];
$ptn_name = $_POST['ptn_prescription'];
$ptn_name = $_POST['ptn_advice'];
$message = "we did it";


echo $ptn_name;



$mpdf = new \Mpdf\Mpdf();



$data = "";

$data .= '<h1> Your Details</h1>';



if($message)
{
	$data .= '<br/> <strong>Message</strong>  '.$message;
}

$mpdf->writeHTML($data);


$pdf_file = $mpdf->Output('newpdf.pdf','S');


$enquirydata = [

			'First Name' => $ptn_name,'Age' => $ptn_age

];

sendEmail($pdf_file,$enquirydata);

function sendEmail($pdf_file,$enquirydata){




$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '00552483ec4005';                     // SMTP username
    $mail->Password   = 'ad8739d9504b65';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('about.srb@gmail.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    
    //add file
    $mail->addStringAttachment($pdf_file, 'myfile.pdf');
    
   

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
 ?>
