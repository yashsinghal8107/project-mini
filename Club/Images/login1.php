<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'adm';
$conn= mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit']))
{
	$uname=$_POST['Username'];
	$pasword=$_POST['psw'];

	$sql = "SELECT * FROM `login_club` WHERE Username='$uname' AND password='$pasword'";
	$result=mysqli_query($conn, $sql);
	$num=mysqli_num_rows($result);
	if ($num==1) 
	{
		header('Location:index.php');
		exit();
	}
	else{
		$message = "You have entered wrong username or password";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CLUB LOGIN</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background-color: #000;
			background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("Images/9.jpg");
			width: 100%;
			height: 100vh;
			color: #fff;
			background-position: top;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}
		* {
			box-sizing: border-box;
			font-family: Arial, Helvetica, sans-serif;
		}
		h1{
			font-size: 35px;
		}
		.container {
			position: absolute;
			top: 4%;
			margin: 20px;
			max-width: 420px;
			padding: 40px;
			background-color: rgba(0,0,0,0.5);
			box-shadow: 0 20px 50px 30px #3B3D3E ;
			border-radius: 20px;
		}
		input[type=text], input[type=password] {
			width: 100%;
			padding: 8px;
			border-radius: 30px;
			margin: 6px 0 20px 0;
			background: #f1f1f1;
		}
		input[type=text]:focus, input[type=password]:focus {
			background-color: #ddd;
			outline: none;
		}
		.btn {
			background-color: rgba(0,0,0,0.7);
			color: white;
			padding: 14px 18px;
			border-color: #10BCCD ;
			cursor: pointer;
			border-radius: 30px;
			font-size: 18px;
			width: 100%;
		}
		.btn:hover {
			background-color: #10BCCD;
			border:2px solid rgba(0,0,0,0.7) ;
			color: rgba(0,0,0,0.9);
	</style>
</head>
<body>
	
		<form action="login1.php" class="container" method="post">
			<h1>Login</h1>
			<label for="Username"><b>Username</b></label>
			<input type="text" placeholder="Username" name="Username" required>
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>
			<?php if (isset($message)) {
			echo '<label style="color:red; font-size:12px;">'.$message.'</label><br>';
			}
			?>
			<button type="submit" name="submit" class="btn">Login</button>
		</form>
</body>
</html>
<?php

?>