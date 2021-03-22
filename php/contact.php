<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/reset.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="icon" href="img/logo.ico" type="image/x-icon">
	<title>Piroll Design</title>
</head>
<body>
	<header>
			<div class="container">
				<nav>
					<div class="nav_block">
						<div class="logo"><img src="../img/logo.png" alt=""></div>
						<div class="header_burger">
							<span></span>
						</div>
						<ul>
							<li><a href="../">home</a></li>
							<li><a href="about_us.php">about</a></li>
							<li><a href="homePage.php">work</a></li>
							<li><a href="contact.php">contact</a></li>
						</ul>
					</div>
				</nav>
			</div>
	</header>

	<div class="contact_info_block">
		<div class="project_form">
			<div class="container">
				<div class="form_row_block2">
					<div class="contact_info">
						<div class="contact_info_title">Contact Info:</div>
						<div class="contact_info_text">
							To give give beginning divide, cattle. Give moving
							won't, there the abundantly she'd she'd brought air
							upon. Light hath subdue. Life days creature upon
							first heaven gathering dry.
						</div>
						<div class="contact_info_phone">
							<b>Address:</b>  10111 Santa Monica Boulevard, LA <br>
							<b>Phone:</b>  +44 987 065 908 <br>
							<b>Email:</b>  info@Example.com <br>
							<b>Fax:</b> +44 987 065 909 <br>
						</div>
					</div>
					<div class="form_block2">
						<form class="form_row2" action="emale_form.php" method="post">
							<input class="name" name="name" type="text" placeholder="Your Name">
							<input class="emale" name="mail" type="text" placeholder="Your Emale">
							<input class="title" type="text" placeholder="Your Title">
							<textarea class="message" name="message" maxlength = "1100" placeholder="Your Comment"></textarea>
							<br>
							<input type="submit" class="form_btn" value="send message">
						<p class="ms">
							<?php
							error_reporting(0);
								 if ($_SESSION["ms"]) {
								 	echo $_SESSION["ms"];
								 }
								 unset($_SESSION["ms"]);
							?>
						</p>
						</form>

					</div>
				</div>
				<div class="map_block">
					<div class="maps">
					</div>
				</div>
			</div>
		</div>
	</div>







	<?php include "footer.php"?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="../js/slick.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>