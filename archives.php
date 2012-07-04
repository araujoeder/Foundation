<?php 
/*
Template Name: Archives
*/

get_header();

?>

<!-- archives -->
<div class="row">

<div class="eight columns">

<!-- Skip Nav -->
<a id="content"></a>

	<?php the_post(); ?>
	<h2 class="entry-title"><?php the_title(); ?></h2>
				
	<h4 class="subheader">Archives by Month:</h4>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
		
	<h4 class="subheader">Archives by Subject:</h4>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

</div>

<aside class="four columns">
	<?php get_sidebar(); ?>
</aside>

</div>

<?php get_footer(); ?>

<!-- archives -->