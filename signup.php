<?php
require_once("./includes/config.php");
require_once("./includes/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php print_app_name(); ?> - Sign up</title>
<link rel="stylesheet" type="text/css" href="css/common.css" />
</head>

<body id="reg_page">
	<div id="signreg_form">
		<form action="<?php _e($_SERVER['REQUEST_URI']); ?>" method="post">
			<h1><?php print_app_name(); ?></h1>
			<h2>Create an Account</h2>
			<div class="clear"></div>
			<label class="caption">Your full name</label>
			<input type="text" class="textbox" name="name" id="name" value="" />
			<label class="caption">Email address</label>
			<input type="text" class="textbox" name="email" id="email" value="" /><span>(You will use it to sign in)</span>
			<label class="caption">Choose a password</label>
			<input type="password" class="textbox" name="passwd1" id="passwd1" value="" /><span>(Minimum 8 character long)</span>
			<label class="caption">Re-enter password</label>
			<input type="password" class="textbox" name="passwd2" id="passwd2" value="" />
			<input type="submit" class="sbutton" name="signup" value="Sign up" />
		</form>
	</div>
</body>

</html>