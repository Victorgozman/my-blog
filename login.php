<?php
	$page_title="Gozman's-blog";
if(isset($_GET['del'])){
	
	echo "welcome Sir";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title; ?></title>
		<link href="styles/style.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
    	<div class="login">
			<h2>LOG IN</h2>
        	<form method="post" action="login.php">
            <label for="emal">Email:</label><br>
            <input type="text" name="email" placeholder="your email" id="emal"><br>
            <label for="pass">password:</label><br>
            <input type="password" name="pass" placeholder="your password" id="pass"><br>
            <input type="submit" name="email" value="LogIn" class="Submit">
			<p>Not Registered?  <a href="Registration.php">Register</a></p>
        	</form>
		</div>


  	</body>

</html>
