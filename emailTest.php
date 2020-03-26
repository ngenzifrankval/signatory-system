<?php
session_start();
$_SESSION['email'];
  require("email/PHPMailerAutoload.php");
  

  $mail = new PHPMailer;
  $mail->isSMTP();//for online disable this line
  //$transport = Swift_SmtpTransport::newInstance('smtp.mail.yahoo.com', 465, 'ssl')
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "tls";
  $mail->Username = "peertechapprove@gmail.com";
  $mail->Password = "p@@rt@ch123";

  //$mail->setFrom($_POST['email'],$_POST['name']); //u can pass email with name
  $mail->setFrom("peertechapprove@gmail.com","tbaba");
  $mail->addAddress("tajiribaba123@gmail.com");
  $mail->addReplyTo("peertechapprove@gmail.com");

  $mail->isHTML(true);
  $mail->Subject="Form submission:";
  $mail->Body="Kaapruvu..1";

  if (!$mail->send()) {
    echo "Something went wrong, please try again";
  }else{
    echo "Thank you for contacting us";
  }

?>
