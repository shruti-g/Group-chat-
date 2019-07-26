<?php
include "db.php";
$id = $_GET['id'];

$query = "SELECT * from user WHERE  id = '$id' ";
$run = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run, MYSQLI_BOTH)) {
	$name = $row['name'];
	$email = $row['email'];
	$country = $row['country'];
	$gender = $row['gender'];

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<style type="text/css">
		body{
			font-size: 18px;
		}
	</style>
</head>
<body >
	<div class="bg">
	<div class="container">
		<div class="panel-heading" align="center">
			<?php echo "Profile of ". $name ?>
		</div>
		<div class="i">
			<label>User name</label>
			<input type="text" name="name" value="<?php echo $name ?>" class="form-control" readonly>
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email ?>" class="form-control" readonly>
			<label>Country</label>
			<input type="text" name="email" value="<?php echo $country ?>" class="form-control" readonly>
			<label>Gender</label>
			<input type="text" name="email" value="<?php echo $gender ?>" class="form-control" readonly><br>
			<a href="index.php"><button class="btn btn-success btn-sm">Go Back</button></a>
		</div>
	</div>
	</div>
</body>
</html>
