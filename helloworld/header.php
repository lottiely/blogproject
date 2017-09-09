<?php
	/*Header Template*/
?>

<!doctype html>

<html lang="en">
</html>

<head>
<!--you can improve this someday, for now we're keeping it simple!-->
	<meta charset="utf-8">
	<?php wp_head();?>
</head>

<body>
<div class="header">
	<nav>
		<?php
			wp_nav_menu($arg = array(
				'menu_class' => 'nav',
				'theme_location' => 'primary'));
		?>
	</nav>
</div>
