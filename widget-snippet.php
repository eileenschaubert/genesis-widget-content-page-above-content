<?php

// Code snippet but with Mai theme specifics
// Run after Mai Theme.
//This is the trick for Mai Themes - must be done after theme setup
add_action( 'after_setup_theme', function() {

	/** Register widget areas */
	//Widget Area to Create Custom Navigation Above Content Area
	genesis_register_sidebar( array(
	  'id' => 'content-page-above-content',
	  'name' => __( 'Content Page Above Content', 'jr' ),
	  'description' => __( 'This is for content navigation', 'jr' ),
	) );

	add_action ('genesis_after_header','jr_content_page_above_content', 5);

	function jr_content_page_above_content() {
		if (!is_front_page()){
	 		genesis_widget_area( 'content-page-above-content', array(
	    	  'before' => '<div id="content-page-above-content-container" class="content-page-above-content-container menu">',
	    	  'after' => '</div>',
			));
	}
	}

});
