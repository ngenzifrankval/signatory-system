<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	//require_once 'conn.php';
	session_start();
	
	if(ISSET($_POST['register'])){
		$email = $_POST['email'];
		$link = "localhost/myemail/data.php?email=".$email."";
		$message = "Hello $email! <br>"
        . "Please click the link below<br>"
     
        . "<a href='$link'>Click Here!</a>";
		
		//Load composer's autoloader
		require 'vendor/autoload.php';
 
		$mail = new PHPMailer(true);                            
   
		try {
			//Server settings
			$mail->isSMTP();                                     
			$mail->Host = 'smtp.gmail.com';                      
			$mail->SMTPAuth = true;                             
			$mail->Username = 'youremail.com';     
			$mail->Password = 'youremailpassword';             
			$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			);                         
			$mail->SMTPSecure = 'ssl';                           
			$mail->Port = 465;                                   
	
			//Send Email
			$mail->setFrom('youremail@gmail.com');
	
			//Recipients
			$mail->addAddress($email);              
			$mail->addReplyTo('youremail@gmail.com');
	
			//Content
			$mail->isHTML(true);                                  
			$mail->Subject = "Habari";
			$mail->Body    = $message;
	
			$mail->send();
	
			header("location:message.php?email=".$email."");
			
		} catch (Exception $e) {
			$_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
			$_SESSION['status'] = 'error';
		}

	}
	
?>