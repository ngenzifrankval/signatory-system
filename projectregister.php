<?php
	session_start();
	$_SESSION['ok']=1;
 	$_SESSION['nice']=1;
	include("connection.php");
	$projectname=$_POST['projectname'];
	$projectlocation=$_POST['projectlocation'];
	$email=$_SESSION["email"];
	$projectdesc=$_POST['projectdesc'];
	$clientname=$_POST['clientname'];
	$startdate=$_POST['startdate'];
	$enddate=$_POST['enddate'];

	
		//random number so that similar files dont get replaced

	// $pname;



	if(isset($_POST['btnSavePM'])){
		if (($_FILES['file']['name'])) {
				$file=$_FILES['file'];
				$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

				//temporale file name to store file
				$tname=$_FILES['file']['tmp_name'];

				//upload directory path
				$uploads_dir="images/";

				//to move uploaded file to specific location
				move_uploaded_file($tname,$uploads_dir.$pname);
		
				//$pname=rand(1000,100000000)."-".$_FILES['file']['name'];
				$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date,po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate','$pname')";

	$insert=mysqli_query($con,$sql);
	if($insert){
		header("location:Project-registration-PM.php");
		$_SESSION['ok']=2;


	}
	else{
		header("location:Project-registration-PM.php");
		$_SESSION['ok']=3;
	}
	
	}
	else{
			$pname='';
			//$pname=rand(1000,100000000)."-".$_FILES['file']['name'];
			$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date,po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate','$pname')";

		$insert=mysqli_query($con,$sql);
		if($insert){
			header("location:Project-registration-PM.php");
			$_SESSION['ok']=2;


		}
		else{
			header("location:Project-registration-PM.php");
			$_SESSION['ok']=3;
		}

	}


	}

	if(isset($_POST['btnSaveMD'])){
			if (($_FILES['file']['name'])) {
				$file=$_FILES['file'];
				$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

				//temporale file name to store file
				$tname=$_FILES['file']['tmp_name'];

				//upload directory path
				$uploads_dir="images/";

				//to move uploaded file to specific location
				move_uploaded_file($tname, $uploads_dir.$pname);
		
				//$pname=rand(1000,100000000)."-".$_FILES['file']['name'];
				$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date,po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate','$pname')";

	$insert=mysqli_query($con,$sql);
	if($insert){
		header("location:Project-registration-MD.php");
		$_SESSION['ok']=2;


	}
	else{
		header("location:Project-registration-MD.php");
		$_SESSION['ok']=3;
	}
	
	}
	else{
			$pname='';
			//$pname=rand(1000,100000000)."-".$_FILES['file']['name'];
			$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date,po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate','$pname')";

		$insert=mysqli_query($con,$sql);
		if($insert){
			header("location:Project-registration-MD.php");
			$_SESSION['ok']=2;


		}
		else{
			header("location:Project-registration-MD.php");
			$_SESSION['ok']=3;
		}

	}

	}

	if(isset($_POST['btnSaveBDM'])){
			if (($_FILES['file']['name'])) {
				$file=$_FILES['file'];
				$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

				//temporale file name to store file
				$tname=$_FILES['file']['tmp_name'];

				//upload directory path
				$uploads_dir="images/";

				//to move uploaded file to specific location
				move_uploaded_file($tname, $uploads_dir.$pname);
		
				//$pname=rand(1000,100000000)."-".$_FILES['file']['name'];
				$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date,po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate','$pname')";

	$insert=mysqli_query($con,$sql);
	if($insert){
		header("location:Project-registration-BDM.php");
		$_SESSION['ok']=2;


	}
	else{
		header("location:Project-registration-BDM.php");
		$_SESSION['ok']=3;
	}
	
	}
	else{
			$pname='';
			//$pname=rand(1000,100000000)."-".$_FILES['file']['name'];
			$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date,po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate','$pname')";

		$insert=mysqli_query($con,$sql);
		if($insert){
			header("location:Project-registration-BDM.php");
			$_SESSION['ok']=2;


		}
		else{
			header("location:Project-registration-BDM.php");
			$_SESSION['ok']=3;
		}

	}


	}

	if(isset($_POST['btnSaveAPM'])){
			if (($_FILES['file']['name'])) {
				$file=$_FILES['file'];
				$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

				//temporale file name to store file
				$tname=$_FILES['file']['tmp_name'];

				//upload directory path
				$uploads_dir="images/";

				//to move uploaded file to specific location
				move_uploaded_file($tname, $uploads_dir.$pname);
		
				//$pname=rand(1000,100000000)."-".$_FILES['file']['name'];
				$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date,po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate','$pname')";

	$insert=mysqli_query($con,$sql);
	if($insert){
		header("location:Project-registration-APM.php");
		$_SESSION['ok']=2;


	}
	else{
		header("location:Project-registration-APM.php");
		$_SESSION['ok']=3;
	}
	
	}
	else{
			$pname='';
			//$pname=rand(1000,100000000)."-".$_FILES['file']['name'];
			$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date,po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate','$pname')";

		$insert=mysqli_query($con,$sql);
		if($insert){
			header("location:Project-registration-APM.php");
			$_SESSION['ok']=2;


		}
		else{
			header("location:Project-registration-APM.php");
			$_SESSION['ok']=3;
		}

	}
	}

	if(isset($_POST['btnSaveAccountant'])){
			if (($_FILES['file']['name'])) {
				$file=$_FILES['file'];
				$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

				//temporale file name to store file
				$tname=$_FILES['file']['tmp_name'];

				//upload directory path
				$uploads_dir="images/";

				//to move uploaded file to specific location
				move_uploaded_file($tname, $uploads_dir.$pname);
		
				//$pname=rand(1000,100000000)."-".$_FILES['file']['name'];
				$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date,po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate','$pname')";

	$insert=mysqli_query($con,$sql);
	if($insert){
		header("location:Project-registration-Accountant.php");
		$_SESSION['ok']=2;


	}
	else{
		header("location:Project-registration-Accountant.php");
		$_SESSION['ok']=3;
	}
	
	}
	else{
			$pname='';
			//$pname=rand(1000,100000000)."-".$_FILES['file']['name'];
			$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date,po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate','$pname')";

		$insert=mysqli_query($con,$sql);
		if($insert){
			header("location:Project-registration-Accountant.php");
			$_SESSION['ok']=2;


		}
		else{
			header("location:Project-registration-Accountant.php");
			$_SESSION['ok']=3;
		}

	}

	}

	// if(isset($_POST['btnSaveAPM'])){
	// 		$sql="insert into project(Project_Name,Project_Location,Email,Client_Name,Project_Desc,Start_Date,End_Date, po) values('$projectname','$projectlocation','$email','$clientname','$projectdesc','$startdate','$enddate', '$pname')";

	// $insert=mysqli_query($con,$sql);
	// if($insert){
	// 	header("location:Project-registration-APM.php?suc=2");
	// 	$_SESSION['ok']=2;

	// }
	// else{
	// 	header("location:Project-registration-APM.php?suc=3");
	// 	$_SESSION['ok']=3;
	// }

	// }
	
?>
