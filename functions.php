<?php 

//register nav menus
register_nav_menus( array(
	'primary' => 'Primary Menu',
	
) );


//register sidebar
 if (function_exists('register_sidebar'))  
  
    register_sidebar(array(  
    'name'=>'Right Widgets',  

    ));  
      
    register_sidebar(array(  
    'name'=>'Footer Widgets',  
    'before_widget'=>'<div class="three columns">',
    'after_widget' =>'</div>'
    ));  
	
 ?> 