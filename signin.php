<?php
require_once("./includes/config.php");
require_once("./includes/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php print_app_name(); ?> - Sign in</title>
<link rel="stylesheet" type="text/css" href="css/common.css" />
</head>

<body id="signin_page">
	<div id="signreg_form">
		<form action="<?php _e($_SERVER['REQUEST_URI']); ?>" method="post">
			<h1><?php print_app_name(); ?></h1>
			<h2>Sign in</h2>
			<div class="clear"></div>
			<label class="caption">Email</label>
			<input type="text" class="textbox" name="username" id="username" value="" />
			<label class="caption">Password</label>
			<input type="password" class="textbox" name="passwd" id="passwd" value="" />
			<div class="remember"><input type="checkbox" name="remember" id="remember" />
				<label for="remember">Stay signed in</label>
				<span style="float:right"><a href="#">Sign up</a> for a new account.</span>
				<div class="clear"></div>
			</div>
			<input type="button" class="button" name="signin" value="Sign in" />
		</form>
	</div>
</body>

</html>