<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />	
	
	  <!-- Included CSS Files -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/foundation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/app.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/ie.css">
    <![endif]-->

    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/modernizr.foundation.js"></script>

    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
	
	<!-- Start the main container -->
	<div id="container" class="container" role="document">
		
		<!-- Row for blog navigation -->
		<div class="row">
			<header class="twelve columns" role="banner">
				<div class="reverie-header">
					<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
					<h4 class="subheader"><?php bloginfo('description'); ?></h4>
				</div>
				<nav role="navigation">
					<?php /*
						You can use Foundation Tabs to get a better responsive design.
					    Our navigation menu. If one isn't filled out, wp_nav_menu falls
					    back to wp_page_menu. The menu assigned to the primary position is
					    the one used. If none is assigned, the menu with the lowest ID is
					    used. */
						
					    wp_nav_menu( array(
						'theme_location' => 'primary',
						
						//'container' =>'ul',
						//'container_class' => 'nav-bar'
						'menu_class' => 'nav-bar',
						
						//'before' => '',
						//'after' => '',
						//'link_before' => '',
						//'link_after' => '',
						//'depth' => 0,
						//'items_wrap' => '<dl class="nav hide-on-phones"><dt>Blog Menu:</dt>%3$s</dl>',
						)
					); ?>
				</nav>
			</header>
		</div>
		

