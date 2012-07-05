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
	

// Orbit, for WordPress

add_action('init', 'Orbit');

function Orbit(){
	$Orbit_args = array(
		'label'	=> __('Orbit'),
		'singular_label' =>	__('Orbit'),
		'public'	=>	true,
		'show_ui'	=>	true,
		'capability_type'	=>	'post',
		'hierarchical'	=>	false,
		'rewrite'	=>	true,
		'supports'	=>	array('title', 'editor','page-attributes','thumbnail')
		);
		register_post_type('Orbit', $Orbit_args);
}

function SliderContent(){

	$args = array( 'post_type' => 'Orbit');
	$loop = new WP_Query( $args );
	
		while ( $loop->have_posts() ) : $loop->the_post();
		
			if(has_post_thumbnail()) {
			
				the_post_thumbnail();
				
			} else {
			
				echo '<div class="content" style="background:#FFF;">';
			
					the_title();
					the_content();
					
				echo '</div>';
			
			}
		
		endwhile;
		
}


	
 ?>
 
  