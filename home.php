<?php
if (isset($_POST['save']))
{
	print_r($_POST);
	exit();
}

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
<!-- Load TinyMCE -->
<script type="text/javascript" src="js/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript">
	$().ready(function() {
		$('textarea.tinymce').tinymce({
			// Location of TinyMCE script
			script_url : 'js/tiny_mce/tiny_mce.js',

			// General options
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

			// Theme options
			theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,|,forecolor,backcolor",
			theme_advanced_buttons3 : "",
			theme_advanced_buttons4 : "",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_resizing : true,

			// Example content CSS (should be your site CSS)
			content_css : "css/common.css",

			// Drop lists for link/image/media/template dialogs
			template_external_list_url : "lists/template_list.js",
			external_link_list_url : "lists/link_list.js",
			external_image_list_url : "lists/image_list.js",
			media_external_list_url : "lists/media_list.js"

		});
	});
</script>
<!-- /TinyMCE -->
</head>

<body id="dashboard_page">
	<div id="header">
		<div id="searchbar">
			<form action="<?php _e($_SERVER['REQUEST_URI']); ?>" method="post">
				<input type="text" name="q" id="q" placeholder="Search Documents" />
				<input type="button" id="search_btn" class="button" value="Search" />
				<div id="search_opt" class="clear">
					<input type="radio" name="q_opt" id="q_opt1" value="doc" checked /><label for="q_opt1">Docs</label>
					<input type="radio" name="q_opt" id="q_opt2" value="ppl" /><label for="q_opt2">People</label>
				</div>
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
				<li class="active"><a name="SB_MyDocs" href="#">My Documents</a></li>
				<li><a name="SB_CreateNew" href="#">Create New</a></li>
				<li><a name="SB_Upload" href="#">Upload</a></li>
				<li><a name="SB_Groups" href="#">Groups</a></li>
				<li><a name="SB_Settings" href="#">Settings</a></li>
			</ul>
		</div><!-- [/sidebar] -->
		
		<div id="content">
			<?php
			//include(dirname(__FILE__) . "/tpl/mydocs.php");
			?>
			<h1>Untitled Document</h1>
			<form method="post" action="<?php _e($_SERVER['REQUEST_URI']); ?>">
				<div>
					<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
					<div>
						<textarea id="elm1" name="elm1" rows="15" cols="80" style="width:100%" class="tinymce">
							&lt;p&gt;
								This is some example text that you can edit inside the &lt;strong&gt;TinyMCE editor&lt;/strong&gt;.
							&lt;/p&gt;
							&lt;p&gt;
							Nam nisi elit, cursus in rhoncus sit amet, pulvinar laoreet leo. Nam sed lectus quam, ut sagittis tellus. Quisque dignissim mauris a augue rutrum tempor. Donec vitae purus nec massa vestibulum ornare sit amet id tellus. Nunc quam mauris, fermentum nec lacinia eget, sollicitudin nec ante. Aliquam molestie volutpat dapibus. Nunc interdum viverra sodales. Morbi laoreet pulvinar gravida. Quisque ut turpis sagittis nunc accumsan vehicula. Duis elementum congue ultrices. Cras faucibus feugiat arcu quis lacinia. In hac habitasse platea dictumst. Pellentesque fermentum magna sit amet tellus varius ullamcorper. Vestibulum at urna augue, eget varius neque. Fusce facilisis venenatis dapibus. Integer non sem at arcu euismod tempor nec sed nisl. Morbi ultricies, mauris ut ultricies adipiscing, felis odio condimentum massa, et luctus est nunc nec eros.
							&lt;/p&gt;
						</textarea>
					</div>
					
					<div id="doctype">
						<input type="radio" name="doctype_opt" id="doctype_private" value="private" checked /><label for="doctype_private">Private</label>
						<input type="radio" name="doctype_opt" id="doctype_restricted" value="restricted" /><label for="doctype_restricted">Restricted</label>
						<input type="radio" name="doctype_opt" id="doctype_public" value="doc" /><label for="doctype_public">Public</label>
					</div>

					<br />
					<input type="button" class="button" id="btnSave" name="btnSave" value="Save" />
					<input type="button" class="button" id="btnSaveFinish" name="btnSaveFinish" value="Save &amp; Finish" />
				</div>
			</form>
			
		</div><!-- [/content] -->
	</div>
</body>
</html>