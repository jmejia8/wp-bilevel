<?php
get_header(); ?>

<div class="post content">
<article>

<section class="section-post">

	<div class="error-container">
		<h1><?php _e( 'Contenido no encontrado.', 'report' ); ?></h1>
		<div class="error-no-found">404</div>
		<p>
			<?php
				_e( 'Contenido no disponible o borrado.', 'report' ); 
			?>
		</p>
	</div>
	<hr>

<center>
	<h1><span class="red">Más</span> Contenido</h1>
</center>


<?php 
$args = array(
		'post_type' => 'post',
		'posts_per_page' => 5
);
$loop = new WP_Query( $args );


	        while ( $loop->have_posts() ) {
	           $loop->the_post();
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
				<?php _e('Read more', 'gaming') ?>
			</a>
		</section>
	</div>

	<hr>

<?php } ?>

</section>
    <aside class="tools">
        <?php if ( is_active_sidebar( 'sidebar-posts' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-posts' ); ?>
        <?php endif; ?>  
    </aside>
</article>



</div>

<?php
get_footer(); ?>