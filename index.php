<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>LOGIN PAGE</title>
<link rel="stylesheet" type="text/css" href="css/new.css" />
</head>
<body>
<div class="container">
	<section id="login">
		<form action="dbconfig/connect.php" method ="post">
			<h1>LOGIN HERE</h1>
			<div>
				<input type="text" name="user" placeholder="Username" required=""  />
			</div>
			<div>
				<input type="password" name="pass"  placeholder="Password" required="" />
			</div>
			<div>
				<input type="submit" name="login" value="Log In" />
				<a href="sign_up.html">Register</a>
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
