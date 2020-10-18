<?php
/*-----------------------------------------------------------------------------------*/
/* Sidebar functions
/*-----------------------------------------------------------------------------------*/

function landair_register_sidebars() {
	register_sidebar(array(
		'id' => 'header',
		'name' => 'Header',
		'description' => '',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));

	register_sidebar(array(
		'id' => 'footer',
		'name' => 'Footer',
		'description' => '',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));

	register_sidebar(array(
		'id' => 'copyright',
		'name' => 'Copyright',
		'description' => '',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));

	register_sidebar(array(
		'id' => 'page-sidebar',
		'name' => 'Page Sidebar',
		'description' => '',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));
}
add_action( 'widgets_init', 'landair_register_sidebars' );
