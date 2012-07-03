

	<footer>
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
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.reveal.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.orbit-1.4.0.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.customforms.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.placeholder.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery.tooltips.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/app.js"></script>

</body>
</html>