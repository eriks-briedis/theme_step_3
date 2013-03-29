<?php
/*******************
* This is the main theme functions file
* Any custum functionality goes in here
*******************/

// Registering the sidebar
function custom_sidebars(){
	register_sidebar(array(
				'name' => __( 'Main Sidebar', 'theme_step_3' ), //name to be displayed for admin
		  		  'id' => 'main-sidebar', // name by which it can be activated
		 'description' => 'This is a main sidebar',
		'before_title' => '<h3 class="widget-title">', // wrap a h3 tag with a class around the widget title
		 'after_title' => '</h3>'
		));
}
add_action('widgets_init', 'custom_sidebars'); //adding the hook for registering the sidebar
?>