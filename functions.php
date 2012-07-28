<?php 

// Disable WordPress version reporting as a basic protection against attacks
function remove_generators() {
	return '';
}		

add_filter('the_generator','remove_generators');

// Add thumbnail support
add_theme_support( 'post-thumbnails' );

// Add theme support for Automatic Feed Links
add_theme_support( 'automatic-feed-links' );

//register nav menus
register_nav_menus( array(
	'primary' => 'Primary Menu',	
) );


//register sidebar
 if (function_exists('register_sidebar'))  
  
    register_sidebar(array(  
    'name'=>'Right Widgets',  
    'before_widget'=>'<div>',
    'after_widget'=>'</div>',

    ));  
      
    register_sidebar(array(  
    'name'=>'Footer Widgets',  
    'before_widget'=>'<div class="three columns">',
    'after_widget' =>'</div>'
    ));  


?>
 
  
