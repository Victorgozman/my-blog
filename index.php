<?php
	require_once './includes/database.php';
	require_once './includes/user.php';



$user= new User();
$user->find_by_sql("SELECT *from users where id=1");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title; ?></title>
		<link href="styles/style.css" rel="stylesheet" type="text/css" >
	</head>
	<body>

				<div class="container">
						<ul class="nav-menu">
							<li id="logo"><strong>VIC</strong></li>
							<li class="hov"><a href="index.php">Home<span class="arrow">&#9660;</span></a>
								<ul class="sub-menu">
									<li><a href="/"> Join Forum</a></li>
									<li><a href="#">E-books</a></li>
									<li><a href="#">Videos</a></li>
								</ul>
							</li>
							<li><a href="#">PHP</a></li>
							<li><a href="#">AJAX</a></li>
							<li><a href="#">Javascript</a></li>
							<li><a href="#">Contact Us</a></li>
							<div class="reg">
								<li><a href="Registration.php" target="_blank">Register</a></li>
								<li><a href="login.php?del=1" target="_blank">Sign In</a></li>
							</div>
						</ul>
				</div>
				<div class="clear">

				</div>
				<div class="wrap">
					<div class="blog-body">
					<div class="left-div">
						<p><h2 id="head" align="center"><b>Victor's Tutorial</b></h2>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>
							<p>CSS tutorial</p>

					</div>
					<div class="main-content">
							<h2>HTML Tutorial</h2>
								<div class="date"><p> February 23, 2017</p></div>
							<!-- dummy text -->
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
									Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
									pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
									In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
									Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
									Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.
									Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
								</p>

								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
									Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
									pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
									In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
									Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
									Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.
									Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
								</p>
						
						
						<div class="comment-area">
							<form action="" method="post">
								<label>Comment</label><br /><textarea name="message"  rows="5" class="textarea"></textarea><p>
								<input type="submit" name="submit" value="Post"  class="comment button" />
								<a href="" style="text-align: center">Like</a>
							</form>

						</div>
					</div>


					<div class="right-content">
						<h2>News</h2>
							<a href="wwww.unn.edu.ng" target="_blank" class="news">java developer needed</a>

							<a href="wwww.w3schools.com/css" target="_blank" class="news">Our first tutorial</a>
							<a href="wwww.gooogle.com" target="_blank" class="news">Our first tutorial</a>
							<a href="wwww.facebook.com" target="_blank" class="news">Our first tutorial</a>
					</div>
					</div>

		<div class="clear"></div>
		
		<div class="author">
			<img src="./images/goz.jpg" alt="Gozman">
			<p>Gozman Victor</p>
		</div>

		<div class="clear-m"></div>
		<div class="News-letter">
			<p style="text-align: center; padding: 5px 0px">News letter</p>
			<form action="" method="post">
				<label class="input-text">Name</label><input name="name" type="text" size="40" class="box-medium" value="" />
				<label class="input-text">Email</label><input name="email" type="text" size="40" class="box-medium" value="" placeholder="required, but never shown" />
				<p><label>&nbsp;</label><input type="submit" name="submit" value="Signup" class="button Signup"   />

			</form>
		</div>

		</div>
			<div class="clear"></div>
		<div class="footer">
			<ul class="footer-nav">
				<li><a href="">Home</a></li>
				<li><a href="">Help</a></li>
				<li><a href="">community</a></li>
				<li><a href="">Contact-Us</a></li>
			</ul>
			<p class="footer-text"><span >copyright victor-gozman &copy;2017</span></p>
		</div>

	</body>

<html/>
