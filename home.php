<?php
require_once("./includes/config.php");
require_once("./includes/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php print_app_name(); ?> - Home</title>
<link rel="stylesheet" type="text/css" href="css/common.css" />
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>

<body id="dashboard_page">
	<div id="header">
		<div id="searchbar">
			<form action="<?php _e($_SERVER['REQUEST_URI']); ?>" method="post">
				<input type="text" name="q" id="q" placeholder="Search Documents" />
				<input type="button" id="searchbtn" class="button" value="Search" />
			</form>
		</div><!-- [/searchbar] -->
		
		<div id="userlog">
			<span>Mohammad Islam</span> |<a href="#">Settings</a>|<a href="#">Sign out</a>
		</div><!-- [/userlog] -->
		<div class="clear"></div>
	</div>
	
	<div id="main">
		<div id="sidebar">
			<ul>
				<li class="active"><a href="#">All Documents</a></li>
				<li><a href="#">Create New</a></li>
				<li><a href="#">Groups</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</div><!-- [/sidebar] -->
		
		<div id="content">
			<h1>All Documents</h1>
		</div><!-- [/content] -->	
	</div>
</body>
</html>