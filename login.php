<?php
	include("connection.php");


session_start();

	//$_SESSION["email"] =$Email;

	
	$_SESSION['pokea'] = 1;
	if (isset($_POST['signin'])) {
			$email = $_POST['email'];
			$passwd = $_POST['passwd'];

	//$_SESSION['userName'] = 'Root';

	$sql = "select Email,Passwd,status,Name from Employee where Email='$email' and Passwd='$passwd'";

	$query = mysqli_query($con, $sql);
	
	$row = mysqli_num_rows($query);

	if($row > 0){
	

		while($row=mysqli_fetch_array($query)){
			  $Email=$row["Email"];
			  $status=$row["status"];
			  $_SESSION['status']=  $status;
			  if ($status=='Accountant') {
			  		$_SESSION["email"] =$Email;
			  		
			  		header("Location:home-Accountant.php");
			  	
			  }
			  elseif ($status=='Project Manager') {
			  		$_SESSION["email"] =$Email;
			  		header("Location:home-PM.php");

			  }
			  elseif ($status=='Engineer') {
			  		$_SESSION["email"] =$Email;
			  		header("Location:Request-Engineer.php");

			  }
			  elseif ($status=='Business Development Manager') {
			  		$_SESSION["email"] =$Email;
			  		header("Location:home-BDM.php");

			  }
			  elseif ($status=='Manager Directory') {
			  		$_SESSION["email"] =$Email;
			  		header("Location:home-MD.php");

			  }
			  elseif ($status=='Assistant Project Manager') {
			  		$_SESSION["email"] =$Email;
			  		header("Location:Request-APM.php");

			  }

		}
		

	}else{
		//echo "User is not exist..!";
		//header("HTTP/1.0 404 NOT FOUND");
		header("location:index.php?");
		
		$_SESSION['pokea']=2;
	}
}

if (isset($_POST['btnreset'])) {
		$email=$_POST['emailupdate1'];
		$sqlcheck = "select Email from Employee where Email='$email'";

		$query = mysqli_query($con, $sqlcheck);
		
		$check = mysqli_num_rows($query);
		if ($check) {
			$emailupdate1=$_POST['emailupdate1'];
			$random1=(rand(1000,10000000));
			$query="update Employee set Passwd='$random1' where Email='$emailupdate1'";
			mysqli_query($con,$query);
			//echo "updated your password is".$random1;
			require("email/PHPMailerAutoload.php");
		  

			  $mail = new PHPMailer;
			  $mail->isSMTP();//for online disable this line
			  /*$transport = Swift_SmtpTransport::newInstance('smtp.mail.yahoo.com', 465, 'ssl')*/
			  $mail->Host = "smtp.gmail.com";
			  $mail->Port = 587;
			  $mail->SMTPAuth = true;
			  $mail->SMTPSecure = "tls";
			  $mail->Username = "peertechapprove@gmail.com";
			  $mail->Password = "p@@rt@ch123";

			  //$mail->setFrom($_POST['email'],$_POST['name']); //u can pass email with name
			  $mail->setFrom("peertechapprove@gmail.com","Peertech");
			  $mail->addAddress($emailupdate1);
			  $mail->addReplyTo("peertechapprove@gmail.com");

			  // $mail->AddBCC($emailupdate1);
			  // $mail->AddBCC("frankvalngenzi@gmail.com");
			  // $mail->AddBCC("frankvalngenzi@yahoo.com");

			  $mail->isHTML(true);
			  $mail->Subject="Reset password:";
			  $mail->Body=$random1;

		  if (!$mail->send()) {
		    //echo "Something went wrong, please try again";
		    	header("location:index.php?");
				$_SESSION['pokea']=3;

		  }else{
		    //echo "Thank you for contacting us";
		     header("Location:index.php");
		     $_SESSION['pokea']=4;
		  }

		}
		else{
			header("Location:index.php");
	     	$_SESSION['pokea']=5;
		}




}
	

?>