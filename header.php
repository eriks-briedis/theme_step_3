<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
<?php wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css' ); 
?>
</head>
<body>
