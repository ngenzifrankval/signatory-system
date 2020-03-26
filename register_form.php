<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
			<form method="POST" action="register.php">
		
				
					<label>Email</label>
					<input type="email" name="email" class="form-control" required="required"/>
			
					<button name="register" class="btn btn-primary btn-block">Sign up</button>	
			</form>
		</div>
	</div>
</body>
</html>