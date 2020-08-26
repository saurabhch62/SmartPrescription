 <?php 

 require_once __DIR__ . '/vendor/autoload.php';
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
 
if(isset($_POST) && array_key_exists('down_pdf',$_POST) )
        {
    # code...

 echo "working";


$ptn_name = $_POST['ptn_name'];
$ptn_age = $_POST['ptn_age'];
$ptn_gender = $_POST['ptn_gender'];
$ptn_symptom = $_POST['ptn_symptom'];
$ptn_diagnosis = $_POST['ptn_diagnosis'];
$ptn_prescription = $_POST['ptn_prescription'];
$ptn_advice = $_POST['ptn_advice'];




echo $ptn_name;



$mpdf = new \Mpdf\Mpdf();



$data = "";

$data .= '<h4> Patient Prescription Detail</h4>';
$data .= '<hr>';

$data .= '<h6>Patient Name </h6>';
$data .= '<p>'.$ptn_name.' </p>';
$data .= '<br><h6>Patient Age </h6>';
$data .= '<p>'.$ptn_age.' </p>';
$data .= '<br><h6>Patient Gender </h6>';
$data .= '<p>'.$ptn_gender.' </p>';
$data .= '<br><h6>Patient Symptoms </h6>';
$data .= '<p>'.$ptn_symptom.' </p>';
$data .= '<br><h6>Patient Diagnosis </h6>';
$data .= '<p>'.$ptn_diagnosis.' </p>';
$data .= '<br><h6>Patient Prescription </h6>';
$data .= '<p>'.$ptn_prescription.' </p>';
$data .= '<br><h6>Patient Advice </h6>';
$data .= '<p>'.$ptn_advice.' </p>';





if($message)
{
	$data .= '<br/> <strong>Message</strong>  '.$message;
}

$mpdf->SetProtection(array('copy','print'), 'userpwd', 'MyPassword');

$mpdf->writeHTML($data);


    # code...

$mpdf->Output('newpdf.pdf','D');

}






if(isset($_POST) && array_key_exists('btn_next_submit',$_POST) )
        {


 echo "working  mail";


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

$data .= '<div class="sih00">
  <div class="sih01"><b>PatientName</b></div>
  <div class="sih02"><b>:</b></div>
  <div class="sih03"><b></b></div>
</div>';



if($message)
{
    $data .= '<br/> <strong>Message</strong>  '.$message;
}

$mpdf->SetProtection(array('copy','print'), 'userpwd', 'MyPassword');

$mpdf->writeHTML($data);


    # code...



$pdf_file = $mpdf->Output('newpdf1.pdf','S');




$enquirydata = [

            'First Name' => $ptn_name,'Age' => $ptn_age

];



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

     $password = 'password'; //it would be smart to put this in a separate file , eg config file.

    $mail->password = $password;
    
   

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Patient Medicine Prescription';
    $mail->Body    = 'We are glad</b>';
    $mail->AltBody = 'Please medicine on time';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

sendEmail($pdf_file,$enquirydata);
        }

 ?>
