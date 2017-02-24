<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title; ?></title>
		<link href="blog_test.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
		<div class="registration">
			<h2>Welcome To our registratio page</h2>
		</div>
    	<div class="login">
			<h2>Register</h2>
        	<form method="post" action="login.php">
            <label for="name">Name:</label><br>
            <input type="text" name="name" placeholder="your email" id="name"><br>
			<label for="emal">Email:</label><br>
            <input type="text" name="email" placeholder="your email" id="emal"><br>
            <label for="pass">password:</label><br>
            <input type="password" name="pass" placeholder="your password" id="pass"><br>
            <input type="submit" name="email" value="LogIn" class="Submit">
			<p>Already Registerd?  <a href="login.php">Login</a></p>
        	</form>
		</div>


  	</body>

</html>