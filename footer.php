

	<footer>
		<div class="row">
							
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets')) : ?>

			<h2>Have no widgets,please login to put some widgets here.</h2>
			
			<?php endif; // end footer widget area ?>

		</div>
		<div class="row">		
								
 			<div class="twelve columns">
    			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
 			

   				<?php do_action( 'twentyten_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>
 			</div>
		</div>
		
	</footer><!-- #colophon -->
	
</div>

<?php wp_footer(); ?>
  <!-- Included JS Files -->
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery-1.7.2.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.placeholder.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.foundation.alerts.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.foundation.accordion.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.foundation.buttons.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.foundation.tooltips.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.foundation.forms.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.foundation.tabs.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.foundation.reveal.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/app.js"></script>

</body>
</html>
