
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tân Tam Quốc</title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/header.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/main.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/character.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/footer.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/w3.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<?php 
	include get_theme_file_path('/header/header.php');
	?>
	<?php 
	include get_theme_file_path('/character-system/character-system.php');
	?>
	<?php 
	include get_theme_file_path('/footer/footer.php');
	?>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/tabs.js">
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/slide-character.js">
	</script>
</body>
</html>
