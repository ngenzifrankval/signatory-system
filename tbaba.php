<?php
include("connection.php");
if(isset($_GET['univ'])){
	$univ_id = $_GET['univ'];
// $res=mysqli_query($con,"select distinct Client_Name from project");
            
?>

<select  class="custom-select my-1 mr-sm-2" name="college" id="college" onchange="loadCollege();">
	<option value="">Select project</option>
<?php           
                      include("connection.php");
                        $res=mysqli_query($con,"select Project_Name from project where Client_Name='$univ_id'");
                        while($row=mysqli_fetch_array($res))
                        {

?>            
<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>   

<?php  


}



echo "</select>";

}else if(!isset($_GET['univ'])){


?>

<select  class="custom-select my-1 mr-sm-2" name="college" id="college">
	<option value="">Select project</option>
<?php           
                      include("connection.php");
                        $res1=mysqli_query($con,"select Project_Name from project");
                        while($row1=mysqli_fetch_array($res1))
                        {

?>            
<option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

<?php
}
echo "</select>";

}

?>



