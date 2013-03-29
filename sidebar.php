<?php
/****************
This is a sidebar
*****************/
?>

<?php if(is_active_sidebar('main-sidebar')) : //let's check if the widget area is defined in functions.php ?>
	<div class="sidebar">
		<?php dynamic_sidebar('main-sidebar'); //including the widget area ?>
	</div>
<?php endif; ?>