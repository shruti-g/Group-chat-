<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>STUDENT REGISTRATION</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body >
	<div class="bg">
	<div class="container">
        <form id="i" method="POST" action="register.php">
			<label>User name</label>
			<input type="text" name="name" placeholder="User Name" class="form-control">
			<label>Email</label>
			<input type="text" name="email" placeholder="User Email" class="form-control">
			<label>Country</label>
			<select name="country" class="form-control">
			<option disabled selected >Choose Country</option>
			<option value="Pakistan">Germany</option>
			<option value="India">India</option>
			<option value="Australia">Australia</option>
			<option value="England">England</option>
		    </select>
			<label>Gender</label><br>
			Male  <input type="radio" name="gender" value="male">&nbsp;
			    Female <input type="radio" name="gender" value="female"><br>
			<label>Password</label>
			<input type="password" name="password" placeholder="Password" class="form-control">
				    <button type="submit" class="btn btn-success" name="Submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Register </button>
					<button type="reset" class="btn btn-danger" style="float: right;"> <span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;Reset</button>
					<div align="center"><font color="red">
						Already Registered ?</font> <a href="login.php"><font color="green"><b>Login Here</b></font></a>
					</div>
	    </form>
	</div>
</div>
</body>
</html>

<?php

if (isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];

	$query = "INSERT INTO user SET name='$name', email='$email', country='$country', gender='$gender', password='$password', status='0' ";
	$run = mysqli_query($con, $query);
	if ($run) {
		header('location: login.php');
	}
	else{
		echo "Error Occured";
	}
}