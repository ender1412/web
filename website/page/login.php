<?php include "../db.php";?>

<!DOCTYPE html>
<html lang="kr" dir="ltr">
<head>
	<meta charset="utf-8" />
	<title>Login</title>

	<link rel="stylesheet" href="../css/login/style.css">
</head>
<body>
	<form class="box" method="post" action="../member/login_check.php">
	<h1>Login</h1>
	<input type="text" name="userid" placeholder="ID">
	<input type="password" name="userpw" placeholder="PASSWORD">
	<a name="forgotbtn" href="">forgot password?</a>
<div>
	<button type="submit" name="loginbtn">Login</button>
	<button type="button" name="registerbtn" onclick="location.href='register.php'">Register</button>
	<!--�����±�-->
</div>
	</form>
</body>
</html>
