<?php 
// template for displaying author, etc

get_header();

?>

<div class="post content">
<article>

<section class="section-post">

<!-- <center>
	<h1><span class="red">Professional</span> Search</h1>
</center> -->


<?php
	// get_search_form();

	$s=get_search_query();
	$args = array('post_type' => ['post', 'bilevel_code'],
	                's' =>$s
	            );
	
	// The Query
	$the_query = new WP_Query( $args );
	
	if ( strlen($s) != 0 & $the_query->have_posts() ) {
	        _e("<center><h2><span class='red'>Search Results for: </span> ".get_query_var('s')."</h2></center>");

?>

<div>
	<div class="section-content" >


<?php
	        while ( $the_query->have_posts() ) {
	           $the_query->the_post();
?>


	<div <?php post_class('row') ?>>
		<div class="imsc">
            <?php echo get_the_post_thumbnail($loop->ID, 'bilevel-featured-image');?>
        </div>
		<section>
			<a href="<?php echo get_permalink(); ?>">
				<h2>
					<?php the_title(); ?>
				</h2>
			</a>

			<div class="post-info">
				<a href="<?php echo get_day_link( get_the_time('Y') , get_the_time('m') , get_the_time('d') ); ?>">
					<i class="fa fa-calendar"></i>
					<?php echo get_the_date(); ?>
				</a>

				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>">
					<i class="fa fa-user"></i>
					<?php the_author(); ?>
				</a>
			</div>

			<?php the_excerpt(); ?>
			<a href="<?php echo get_permalink(); ?>" class="btn-default">
				<?php _e('Read more', 'bilevel') ?>
			</a>
		</section>
	</div>

	<hr>


<?php
}

}elseif (strlen($s) == 0) {
	
	}else{
?>

<center>
	<h2>Nothing Found</h2>

	<div class="searchform">
		<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
	</div>
</center>


<?php 
} ?>

</section>
    <aside class="tools">
        <?php if ( is_active_sidebar( 'sidebar-posts' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-posts' ); ?>
        <?php endif; ?>  
    </aside>
</article>



</div>

<?php 

get_footer();
?>
