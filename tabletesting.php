<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

</body>
</html>
<?php

include("connection.php");

$sql="select e.Name,e.Email,p.Project_Name,p.Project_Location,o.Order_Description,o.Order_Amount from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID and o.Order_Status='Not checked' and o.Order_Review='Not accepted' and o.Payed='No'";

$query = mysqli_query($con,$sql);

echo "<table class='table table-striped'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>Full Name</th>
      <th scope='col'>Email</th>
      <th scope='col'>Project Name</th>
      <th scope='col'>Project Location</th>
      <th scope='col'>Request Description</th>
      <th scope='col'>Total Cost</th>
      <th scope='col' class='text-right'>ACTION</th>
    </tr>
  </thead>
";
while($row=mysqli_fetch_array($query)){
	echo "
		<tr>
			<td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			<td>$row[5]</td>
			<td class='text-right'>
				<button class='btn btn-primary badge-pill' style='width: 80px'>SEND</button>
				<button class='btn btn-danger badge-pill' style='width: 80px'>DISMISS</button>
			</td>
		</tr>";

}
echo "</table>";

?>
