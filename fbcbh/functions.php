<?php
	require_once(get_stylesheet_directory().'/custom/language.php'); */
	$cwk_thumbimg = array(200, 999); // size of featured image in archive/category blog
	$cwk_postimg = array(200, 999); // size of featured image on single post.
	add_image_size( 'cwk-slider', 1420, 447, true ); // Slider
	
	add_action('after_setup_theme', ea_setup);
	/**  ea_setup
	*  init stuff that we have to init after the main theme is setup.
	* 
	*/
	function ea_setup() {
	 /* do stuff ehre. */
	}

?>
