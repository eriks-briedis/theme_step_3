<?php
/****************
This is a sidebar
*****************/
?>

<?php if(is_active_sidebar('sidebar-main')) : //let's check if the widget area is defined in functions.php ?>
	<div class="sidebar">
		<?php dynamic_sidebar('sidebar-main'); //including the widget area ?>
	</div>
<?php endif; ?>