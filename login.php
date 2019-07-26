<?php
$conn = mysqli_connect("localhost", "root", "", "chat");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>STUDENT LOGIN</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body >
	<div class="bg">
			<a href="../index.php"<button ><font color="black">HOME</font></button></a>
	<div class="container">

	<form id=i method="post" action="">
		<font color="white"> <center> Login Form</center> </font><br>
			<input type="text" name="email" placeholder="User Email" class="form-control"><br>
			<input type="password" name="password" placeholder="Password" class="form-control"><br>
			<center><button type="submit" class="btn btn-success" name="Submit"> Login</button></center>
				<div class="panel-footer">
					<?php
            if (isset($_GET['error'])) 
							{
		    echo "<font color='red'><p align='center'><b>".@$_GET['error']. "</b></p>";
							} 
			if (isset($_GET['logout'])) 
							{
		    echo "<font color='green'> <p align='center'><b>".@$_GET['logout']. "</b></p>";
							} 

			if (isset($_POST['Submit'])) {
			    
			    $email = $_POST['email'];
			    $password = $_POST['password'];

				$result = mysqli_query($conn , "SELECT * from user where email='$email' and password='$password'");
					while($row = mysqli_fetch_assoc($result))
					{
						$_SESSION['email'] = $row['email'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['name'] = $row['name'];
					}
					if(mysqli_num_rows($result)>0){			
						$query = mysqli_query($conn, "UPDATE user SET status = '1' WHERE email = '$email' ");
						header('location: index.php');
						}
					else {
						echo "<font color='red'><p align='center'>Incorrect Email or Password</p>";
						}	
                          }

                          ?>
				</div>
				<div class="panel-footer">
					<div align="center">
						Don't Have Account ? <a href="register.php"><font color="red"><b>Register Here</b></font></a>
					</div>
				</div>
	</form>
	</div>
	</div>
</body>
</html>
