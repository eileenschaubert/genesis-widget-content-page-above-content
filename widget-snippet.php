<?php

/** Register widget areas */
	//Widget Area Above Content Area Excludes the Front Page
	genesis_register_sidebar( array(
	  'id' => 'content-page-above-content',
	  'name' => __( 'Content Page Above Content', 'es' ),
	  'description' => __( 'This is for content navigation', 'es' ),
	) );

	add_action ('genesis_after_header','es_content_page_above_content', 5);

	function es_content_page_above_content() {
		if (!is_front_page()){
	 		genesis_widget_area( 'content-page-above-content', array(
	    	  'before' => '<div id="content-page-above-content-container" class="content-page-above-content-container menu">',
	    	  'after' => '</div>',
			));
	}
	}
