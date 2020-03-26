<?php
$file=$_POST['file'];

	//random number so that similar files dont get replaced
	$pname=rand(1000,100000000)."-".$_FILES['file']['name'];

	//temporale file name to store file
	$tname=$_FILES['file']['tmp_name'];

	//upload directory path
	$uploads_dir="/images";
?>