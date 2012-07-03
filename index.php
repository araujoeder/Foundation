
<?php get_header(); ?>



<div class="row">
  	 <div class="eight columns">
      	<?php
	  	/* Run the loop to output the posts.
	 	* If you want to overload this in a child theme then include a file
	 	* called loop-index.php and that will be used instead.
		*/
	 	get_template_part( 'loop', 'index' );
	  ?>
  	 </div>
  	 
  	 <div class="four columns">
         <?php get_sidebar(); ?>
     </div>
</div>


<?php get_footer(); ?>
