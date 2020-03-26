<html>
	<head>
		
		<script type="text/javascript" src="tbaba.js"></script>
	</head>
	<body>
		<form name="register">
			<table>
				<!--tr>
					<td>Username</td>
					<td><input name="user" type="text" id="user" onkeyup="validateUser();"></td>
					<td><div id="userStatus"></div></td>
				</tr-->
				<tr>
					<td>client name</td>
					<td colspan="2">

					<form method="POST" action="#">
                	<div class="form-group">
                  
                    <select  class="custom-select my-1 mr-sm-2" name="selectedClient" id="university" onchange="loadCollege();">
                    <option value="">Select client</option>
                      <?php
                      include("connection.php");
                        $res=mysqli_query($con,"select distinct Client_Name from project ");
                        while($row=mysqli_fetch_array($res))
                        {

                        ?>

                        <option value="<?php echo $row['Client_Name']?>"><?php echo $row["Client_Name"]; ?></option>
                        <?php
                        }

                        ?>

                    </select>
                  </div>
                  </form>	
				</td>
				</tr>
				<tr>
					<td>project</td>
					<td colspan="2">
						<div id="collegeDiv">
							<!--select name="college" id="college">
								<option value=''>Select project</option>
							</select-->


					<select  class="custom-select my-1 mr-sm-2" id="collage" name="selectedProject">
                    <option value="">Select project</option>
                      <?php
                      include("connection.php");
                        $res=mysqli_query($con,"select Project_Name from project ");
                        while($row=mysqli_fetch_array($res))
                        {

                        ?>

                        <option value="<?php echo $row['Project_Name']?>"><?php echo $row["Project_Name"]; ?></option>
                        <?php
                        }

                        ?>

                    </select>


						</div>
					</td>
				</tr>


				

			</table>
		</form>
	</body>
</html>