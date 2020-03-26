<?php 
session_start();
include("connection.php");
	$_SESSION['ok']=1;
 	$_SESSION['nice']=1;
 	$_SESSION['tayari']=1;
 	$_SESSION['change'] = 1;
 	$status=$_SESSION['status'];



//if(isset($_POST['btnRegister'])){
$name = $_POST['name'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$phoneno = $_POST['phoneno'];
$repasswd = $_POST['repasswd'];
$status = $_POST['status'];
if (isset($_POST['btnregister1'])) {
$sql = "insert into employee(Name, Email, Passwd,Phone_No,Status) values('$name','$email', '$passwd','$phoneno','$status')";

	$insert = mysqli_query($con, $sql);
	if($insert){
		//header("Location:registration.html");
		//echo "Data is inserted successfully ..!";
		header("location:registration.php");
		$_SESSION['tayari']=2;
		
	}else{
		//header("Location:registration.html");
		//echo "Data is not inserted ..!";
		header("location:registration.php");
		$_SESSION['tayari']=3;

	}
}
//$id = $_POST['id'];

//}

	if (isset($_POST['btnsetting'])) {
		$passwd = $_POST['txtpasswd'];
		$repasswd = $_POST['txtrepasswd'];
		$phone = $_POST['txtphoneno'];
		$email = $_SESSION['email'];

		$status=$_SESSION['status'];


		if ($status=='Accountant') {
		if ($passwd == $repasswd) {
			$sql1 = "update employee set Passwd='$passwd' where Email='$email'";
			$sql2 = "update employee set Phone_No='$phone' where Email='$email'";

			mysqli_query($con, $sql1);
			mysqli_query($con, $sql2);
			$_SESSION['change'] = 2;
			header("location:setting-Accountant.php");
		}
		else{
			$_SESSION['change'] = 3;
			header("location:setting-Accountant.php");
		}
		}
		if ($status=='Project Manager') {
		if ($passwd == $repasswd) {
			$sql1 = "update employee set Passwd='$passwd' where Email='$email'";
			$sql2 = "update employee set Phone_No='$phone' where Email='$email'";

			mysqli_query($con, $sql1);
			mysqli_query($con, $sql2);
			$_SESSION['change'] = 2;
			header("location:setting-PM.php");
		}
		else{
			$_SESSION['change'] = 3;
			header("location:setting-PM.php");
		}
		}
		if ($status=='Engineer') {
		if ($passwd == $repasswd) {
			$sql1 = "update employee set Passwd='$passwd' where Email='$email'";
			$sql2 = "update employee set Phone_No='$phone' where Email='$email'";

			mysqli_query($con, $sql1);
			mysqli_query($con, $sql2);
			$_SESSION['change'] = 2;
			header("location:setting-Engineer.php");
		}
		else{
			$_SESSION['change'] = 3;
			header("location:setting-Engineer.php");
		}
		}
		if ($status=='Manager Directory') {
		if ($passwd == $repasswd) {
			$sql1 = "update employee set Passwd='$passwd' where Email='$email'";
			$sql2 = "update employee set Phone_No='$phone' where Email='$email'";

			mysqli_query($con, $sql1);
			mysqli_query($con, $sql2);
			$_SESSION['change'] = 2;
			header("location:setting-MD.php");
		}
		else{
			$_SESSION['change'] = 3;
			header("location:setting-MD.php");
		}
		}
		if ($status=='Business Development Manager') {
		if ($passwd == $repasswd) {
			$sql1 = "update employee set Passwd='$passwd' where Email='$email'";
			$sql2 = "update employee set Phone_No='$phone' where Email='$email'";

			mysqli_query($con, $sql1);
			mysqli_query($con, $sql2);
			$_SESSION['change'] = 2;
			header("location:setting-BDM.php");
		}
		else{
			$_SESSION['change'] = 3;
			header("location:setting-BDM.php");
		}
		}
		if ($status=='Assistant Project Manager') {
		if ($passwd == $repasswd) {
			$sql1 = "update employee set Passwd='$passwd' where Email='$email'";
			$sql2 = "update employee set Phone_No='$phone' where Email='$email'";

			mysqli_query($con, $sql1);
			mysqli_query($con, $sql2);
			$_SESSION['change'] = 2;
			header("location:setting-APM.php");
		}
		else{
			$_SESSION['change'] = 3;
			header("location:setting-APM.php");
		}
		}
	}

 ?>