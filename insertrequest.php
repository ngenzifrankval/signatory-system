<?php 
session_start();
include("connection.php");
$email = $_SESSION['email'];
$status=$_SESSION['status'];
$_SESSION['notification'] = 1;
$_SESSION['approve'] = 1;
$_SESSION['pay'] = 1;
$_SESSION['approveMD'] = 1;
$_SESSION['approveBDM'] = 1;
$_SESSION['approvePM'] = 1;
$_SESSION['dismissPM'] = 1;
$_SESSION['selectedClient'] = 'ok';
$_SESSION['search'] = 'ok';
$_SESSION['from'] = 'ok';
$_SESSION['to'] = 'ok';
 $_SESSION['ok']=1;
 $_SESSION['nice']=1;
 $_SESSION['tayari']=1;




if (isset($_POST['btnupdaterequest'])) {
	if ($status=='Accountant') {
			$idtake=$_POST['idtake'];
			//echo $idtake;
			header("Location:Request-Accountant.php");
			$sql="delete from orders where Order_ID='$idtake'";
			mysqli_query($con,$sql);
	}
		if ($status=='Project Manager') {
			$idtake=$_POST['idtake'];
			//echo $idtake;
			header("Location:Request-PM.php");
			$sql="delete from orders where Order_ID='$idtake'";
			mysqli_query($con,$sql);
	}
		if ($status=='Manager Directory') {
			$idtake=$_POST['idtake'];
			//echo $idtake;
			header("Location:Request-MD.php");
			$sql="delete from orders where Order_ID='$idtake'";
			mysqli_query($con,$sql);
	}
		if ($status=='Engineer') {
			$idtake=$_POST['idtake'];
			//echo $idtake;
			header("Location:Request-Engineer.php");
			$sql="delete from orders where Order_ID='$idtake'";
			mysqli_query($con,$sql);
	}
			if ($status=='Business Development Manager') {
			$idtake=$_POST['idtake'];
			//echo $idtake;
			header("Location:Request-BDM.php");
			$sql="delete from orders where Order_ID='$idtake'";
			mysqli_query($con,$sql);
	}
			if ($status=='Assistant Project Manager') {
			$idtake=$_POST['idtake'];
			//echo $idtake;
			header("Location:Request-APM.php");
			$sql="delete from orders where Order_ID='$idtake'";
			mysqli_query($con,$sql);
	}

}





if(isset($_POST['btnsearch'])){
	// $_SESSION['selectedClient'] = 'ok';
	// $_SESSION['search'] = 'ok';

		if ($status=='Project Manager') {

				if (isset($_POST['selectedProject'])) {
						$project = $_POST['selectedProject'];
						$_SESSION['search'] = $project;
					}else{
						$_SESSION['search'] = '';
					}

					if (isset($_POST['selectedClient'])) {
					$selectedClient = $_POST['selectedClient'];
					$_SESSION['selectedClient'] = $selectedClient;
					}else{
						$_SESSION['selectedClient'] = '';
					}					
					
					
					if (isset($_POST['from'])) {
					$from = $_POST['from'];
					$to = $_POST['to'];
						$_SESSION['from'] = $from;
						$_SESSION['to'] = $to;
					}else{
						$_SESSION['from'] = '';
						$_SESSION['to'] = '';
					}

				// $project = $_POST['selectedProject'];
				header("Location:report-PM.php");
				// $_SESSION['search'] = $project;
		}
		if ($status=='Manager Directory') {

					if (isset($_POST['selectedProject'])) {
						$project = $_POST['selectedProject'];
						$_SESSION['search'] = $project;
					}else{
						$_SESSION['search'] = '';
					}

					if (isset($_POST['selectedClient'])) {
					$selectedClient = $_POST['selectedClient'];
					$_SESSION['selectedClient'] = $selectedClient;
					}else{
						$_SESSION['selectedClient'] = '';
					}					
					
					
					if (isset($_POST['from'])) {
					$from = $_POST['from'];
					$to = $_POST['to'];
						$_SESSION['from'] = $from;
						$_SESSION['to'] = $to;
					}else{
						$_SESSION['from'] = '';
						$_SESSION['to'] = '';
					}

				// $project = $_POST['selectedProject'];
				header("Location:report-MD.php");
				// $_SESSION['search'] = $project;
		}
		if ($status=='Business Development Manager') {

					if (isset($_POST['selectedProject'])) {
						$project = $_POST['selectedProject'];
						$_SESSION['search'] = $project;
					}else{
						$_SESSION['search'] = '';
					}

					if (isset($_POST['selectedClient'])) {
					$selectedClient = $_POST['selectedClient'];
					$_SESSION['selectedClient'] = $selectedClient;
					}else{
						$_SESSION['selectedClient'] = '';
					}					
					
					
					if (isset($_POST['from'])) {
					$from = $_POST['from'];
					$to = $_POST['to'];
						$_SESSION['from'] = $from;
						$_SESSION['to'] = $to;
					}else{
						$_SESSION['from'] = '';
						$_SESSION['to'] = '';
					}


				header("Location:report-BDM.php");
				
				// $_SESSION['selectedClient']=$selectedClient;
		}
}

if (isset($_POST['btnpayrequest'])) {
	$DateAfter=date("y.m.d");
	$id=$_POST['id'];
	$updaterequest="update Orders set Payed='Yes' where Order_ID='$id'";
	$updaterequest2="update Orders set Date_After='$DateAfter' where Order_ID='$id'";
	mysqli_query($con,$updaterequest);
	mysqli_query($con,$updaterequest2);
	header("Location:Accepted-Request-Accountant.php");
	$_SESSION['pay'] = 2;

}
if(isset($_POST['btnsubmitrequest'])){
	$projectID = $_POST['selectedProject'];
	$orderDescription =mysqli_real_escape_string ($con,$_POST['txtArea']);
	$orderAmout = $_POST['cost'];
	$orderStatus = "Not checked";
	$orderReview = "Not accepted";
	$order_Review2="Not accepted";
	$Payed = "No";
	$orderComment = "No comment";
	$dateBefore = date("y.m.d");
	
	
	
		//echo "Request has been Sent successfully ..!";
		if ($status=='Accountant') {
			$file=$_FILES['file'];
		if ($_FILES['file']['name']) {
			//$_FILES['file']['name'];
	//random number so that similar files dont get replaced
			$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

			//temporale file name to store file
			$tname=$_FILES['file']['tmp_name'];

			//upload directory path
			$uploads_dir="images2/";

			//to move uploaded file to specific location
			move_uploaded_file($tname, $uploads_dir.$pname);
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-Accountant.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-Accountant.php?data=2");
				$_SESSION['nice']=3;
			}
			
		}
		else{
			$pname='';
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			//mysqli_real_escape_string
			$insert =mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-Accountant.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-Accountant.php?data=2");
				$_SESSION['nice']=3;
			}


		}
	
			
		}
		if ($status=='Project Manager') {
			$file=$_FILES['file'];
		if ($_FILES['file']['name']) {
			//$_FILES['file']['name'];
	//random number so that similar files dont get replaced
			$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

			//temporale file name to store file
			$tname=$_FILES['file']['tmp_name'];

			//upload directory path
			$uploads_dir="images2/";

			//to move uploaded file to specific location
			move_uploaded_file($tname, $uploads_dir.$pname);
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-PM.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-PM.php?data=2");
				$_SESSION['nice']=3;
			}
			
		}
		else{
			$pname='';
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-PM.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-PM.php?data=2");
				$_SESSION['nice']=3;
			}


		}
		}
		if ($status=='Engineer') {
			$file=$_FILES['file'];
		if ($_FILES['file']['name']) {
			//$_FILES['file']['name'];
	//random number so that similar files dont get replaced
			$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

			//temporale file name to store file
			$tname=$_FILES['file']['tmp_name'];

			//upload directory path
			$uploads_dir="images2/";

			//to move uploaded file to specific location
			move_uploaded_file($tname, $uploads_dir.$pname);
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-Engineer.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-Engineer.php?data=2");
				$_SESSION['nice']=3;
			}
			
		}
		else{
			$pname='';
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-Engineer.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-Engineer.php?data=2");
				$_SESSION['nice']=3;
			}


		}
		}
		if ($status=='Manager Directory') {
			$file=$_FILES['file'];
		if ($_FILES['file']['name']) {
			//$_FILES['file']['name'];
	//random number so that similar files dont get replaced
			$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

			//temporale file name to store file
			$tname=$_FILES['file']['tmp_name'];

			//upload directory path
			$uploads_dir="images2/";

			//to move uploaded file to specific location
			move_uploaded_file($tname, $uploads_dir.$pname);
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-MD.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-MD.php?data=2");
				$_SESSION['nice']=3;
			}
			
		}
		else{
			$pname='';
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-MD.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-MD.php?data=2");
				$_SESSION['nice']=3;
			}


		}
		}
		if ($status=='Business Development Manager') {
			$file=$_FILES['file'];
		if ($_FILES['file']['name']) {
			//$_FILES['file']['name'];
	//random number so that similar files dont get replaced
			$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

			//temporale file name to store file
			$tname=$_FILES['file']['tmp_name'];

			//upload directory path
			$uploads_dir="images2/";

			//to move uploaded file to specific location
			move_uploaded_file($tname, $uploads_dir.$pname);
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-BDM.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-BDM.php?data=2");
				$_SESSION['nice']=3;
			}
			
		}
		else{
			$pname='';
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-BDM.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-BDM.php?data=2");
				$_SESSION['nice']=3;
			}


		}
		}
		if ($status=='Assistant Project Manager') {
			$file=$_FILES['file'];
		if ($_FILES['file']['name']) {
			//$_FILES['file']['name'];
	//random number so that similar files dont get replaced
			$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

			//temporale file name to store file
			$tname=$_FILES['file']['tmp_name'];

			//upload directory path
			$uploads_dir="images2/";

			//to move uploaded file to specific location
			move_uploaded_file($tname, $uploads_dir.$pname);
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-APM.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-APM.php?data=2");
				$_SESSION['nice']=3;
			}
			
		}
		else{
			$pname='';
			$sql = "insert into Orders(Order_Description, Order_Amount, Order_Status, Order_Review,order_Review2,Payed, Order_Comment, Date_Before, Email, Project_ID,Attach) values('$orderDescription','$orderAmout', '$orderStatus','$orderReview','$order_Review2', '$Payed','$orderComment', '$dateBefore','$email', '$projectID','$pname')";
			$insert = mysqli_query($con, $sql);
			if($insert){
				header("Location:Request-APM.php?data=2");
				$_SESSION['nice']=2;
			}
			else{
				header("Location:Request-APM.php?data=2");
				$_SESSION['nice']=3;
			}


		}
		}
		
}

if (isset($_POST['btnsendrequest'])) {
		$id=$_POST['id'];
		if ($status=='Accountant') {
			$updateAccountant="update Orders set Order_Status='Checked' where Order_ID='$id'";
			mysqli_query($con,$updateAccountant);

require_once("email/PHPMailerAutoload.php");
  
$sql = "select Email from employee where status='Project Manager' or status='Business Development Manager' or status='Manager Directory'";

$query = mysqli_query($con, $sql);

while ($rows = mysqli_fetch_array($query)) {
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
  // $mail->addAddress($emailupdate1);
  $mail->addReplyTo("peertechapprove@gmail.com");

  $mail->AddBCC($rows[0]);

  $mail->isHTML(true);
  $mail->Subject="Approve request";
  $mail->Body="Your needed for approving request..!";

  if (!$mail->send()) {
    // echo "Something went wrong, please try again";
    	header("location:Approve-Request-Accountant.php");
		$_SESSION['notification']= 2;

  }else{
    // echo "Thank you for contacting us";
     header("Location:Approve-Request-Accountant.php");
     $_SESSION['notification']= 2;
  }
}



			//header("Location:Approve-Request-Accountant.php");
			//$_SESSION['notification']= 2;
		}

		if ($status=='Project Manager') {
			$Query1="select Order_Review,order_Review2,Email from orders where Order_ID='$id'";
			$query2=mysqli_query($con,$Query1);
			while ($rows=mysqli_fetch_array($query2)) {
			$review1=$rows[0];
			$review2=$rows[1];
			$newEmail = $rows[2];
			if($email != $newEmail){
				if ($review1=='Not accepted') {
				$updatereview1="update Orders set Order_Review='acceptedPM' where Order_ID='$id'";
				mysqli_query($con,$updatereview1);
				header("Location:Approve-Request-PM.php");
				$_SESSION['approvePM'] = 2;

			}
				else if ($review2=='Not accepted') {
					if($review1=='acceptedPM'){
						header("Location:Approve-Request-PM.php");
						$_SESSION['approvePM'] = 3;
					}
					else{
						$updatereview2="update Orders set order_Review2='acceptedPM' where Order_ID='$id'";
							mysqli_query($con,$updatereview2);
							header("Location:Approve-Request-PM.php");
							$_SESSION['approvePM'] = 2;
					}
				
			}
			}else{
				header("Location:Approve-Request-PM.php");
				$_SESSION['approvePM'] = 4;
			}
			
		}
	}

		if ($status=='Manager Directory') {
			$Query1="select Order_Review,order_Review2,Email from orders where Order_ID='$id'";
			$query2=mysqli_query($con,$Query1);
			while ($rows=mysqli_fetch_array($query2)) {
					$review1=$rows[0];
					$review2=$rows[1];
					$newEmail=$rows[2];
					//$email = $_SESSION['email'];
				if($email != $newEmail){
					if ($review1=='Not accepted') {
						$updatereview1="update Orders set Order_Review='acceptedMD' where Order_ID='$id'";
						mysqli_query($con,$updatereview1);
						header("Location:Approve-Request-MD.php");
						$_SESSION['approveMD'] = 2;

					}
					else if ($review2=='Not accepted') {
						if($review1=='acceptedMD'){
							header("Location:Approve-Request-MD.php");
							$_SESSION['approveMD'] = 3;
						}
						else{
							$updatereview2="update Orders set order_Review2='acceptedMD' where Order_ID='$id'";
								mysqli_query($con,$updatereview2);
								header("Location:Approve-Request-MD.php");
								$_SESSION['approveMD'] = 2;
						}
						
					}
				}
				else{
					header("Location:Approve-Request-MD.php");
					$_SESSION['approveMD'] = 4;
				}
			
		}
	}

		if ($status=='Business Development Manager') {
			$Query1="select Order_Review,order_Review2,Email from orders where Order_ID='$id'";
			$query2=mysqli_query($con,$Query1);
			while ($rows=mysqli_fetch_array($query2)) {
			$review1=$rows[0];
			$review2=$rows[1];
			$newEmail=$rows[2];
			if ($email != $newEmail) {
				if ($review1=='Not accepted') {
				$updatereview1="update Orders set Order_Review='acceptedBDM' where Order_ID='$id'";
				mysqli_query($con,$updatereview1);
				header("Location:Approve-Request-BDM.php");
				$_SESSION['approveBDM'] = 2;

			}
				else if ($review2=='Not accepted') {
				if($review1=='acceptedBDM'){
					header("Location:Approve-Request-BDM.php");
					$_SESSION['approveBDM'] = 3;
				}
				else{
					$updatereview2="update Orders set Order_Review2='acceptedBDM' where Order_ID='$id'";
						mysqli_query($con,$updatereview2);
						header("Location:Approve-Request-BDM.php");
						$_SESSION['approveBDM'] = 2;
				}
				
			}
			}
			else{
				header("Location:Approve-Request-BDM.php");
				$_SESSION['approveBDM'] = 4;
			}
			
		}
		}
}

if (isset($_POST['btnsendcomment'])) {
		if ($status=='Accountant') {
			$id = $_POST['idDismiss'];
			$txtArea = $_POST['txtArea'];
			/*echo $id;
			echo "<br />";
			echo $txtArea;*/
			$sql = "update orders set Order_Comment='$txtArea' where Order_ID='$id'";
			$slq_run = mysqli_query($con, $sql);
			if ($slq_run) {
				//echo "Data updated successfully..!";
				header("Location:Approve-Request-Accountant.php");
				$_SESSION['dismissPM'] = 2;
			}else{
				//echo "Data not updated..!";
				header("Location:Approve-Request-Accountant.php");
				$_SESSION['dismissPM'] = 3;
			}
			
		}

		if ($status=='Project Manager') {
			$id = $_POST['idDismiss'];
			$txtArea = $_POST['txtArea'];
			/*echo $id;
			echo "<br />";
			echo $txtArea;*/
			$sql = "update orders set Order_Comment='$txtArea' where Order_ID='$id'";
			$slq_run = mysqli_query($con, $sql);
			if ($slq_run) {
				//echo "Data updated successfully..!";
				header("Location:Approve-Request-PM.php");
				$_SESSION['dismissPM'] = 2;
			}else{
				//echo "Data not updated..!";
				header("Location:Approve-Request-PM.php");
				$_SESSION['dismissPM'] = 3;
			}
		}
		if ($status=='Manager Directory') {
			$id = $_POST['idDismiss'];
			$txtArea = $_POST['txtArea'];
			/*echo $id;
			echo "<br />";
			echo $txtArea;*/
			$sql = "update orders set Order_Comment='$txtArea' where Order_ID='$id'";
			$slq_run = mysqli_query($con, $sql);
			if ($slq_run) {
				//echo "Data updated successfully..!";
				header("Location:Approve-Request-MD.php");
				$_SESSION['dismissPM'] = 2;
			}else{
				//echo "Data not updated..!";
				header("Location:Approve-Request-MD.php");
				$_SESSION['dismissPM'] = 3;
			}
		}
		if ($status=='Business Development Manager') {
			$id = $_POST['idDismiss'];
			$txtArea = $_POST['txtArea'];
			/*echo $id;
			echo "<br />";
			echo $txtArea;*/
			$sql = "update orders set Order_Comment='$txtArea' where Order_ID='$id'";
			$slq_run = mysqli_query($con, $sql);
			if ($slq_run) {
				//echo "Data updated successfully..!";
				header("Location:Approve-Request-BDM.php");
				$_SESSION['dismissPM'] = 2;
			}else{
				//echo "Data not updated..!";
				header("Location:Approve-Request-BDM.php");
				$_SESSION['dismissPM'] = 3;
			}
		}

}

 ?>