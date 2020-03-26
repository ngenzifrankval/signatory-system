<?php
	$host 	= "localhost";
	$user 	= "root";
	$passwd = "";
	$db		= "signatory";

	$con = mysqli_connect($host, $user, $passwd, $db);

	if($con){
		//echo "Connection Successful...!!";
	}else{
		//echo "Connection fail...!!";
	}
	
?>