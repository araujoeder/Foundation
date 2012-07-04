<?php get_header(); ?>

<div class="row">
	
	<div class="eight columns">
		<div class="alert-box error">404</div>
		<h1>404!</h1>  
		<p>404's are such a lovely thing. But you know, I'm not going to leave you stranded.</p>
		<p>Why don't you try a search?</p>
	
		<?php get_search_form(); ?>
	
		<a href="<?php echo home_url( '/' ); ?>">&larr; Go Home?</a>
	
	</div>
	
	<aside class="four columns">
		<?php get_sidebar(); ?>
	</aside>
</div>
		
<?php get_footer(); ?>