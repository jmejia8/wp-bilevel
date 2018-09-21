<?php 
	get_header();

	while (have_posts()) :	the_post();
?>

<div class="content">

		<article>
			<?php
				the_title( "<h1>", "</h1>" );
			?>
			<?php the_content(); ?>
		</article>
</div>
<?php
	endwhile;	

	get_footer();
?>