<?php 
	get_header();

	while (have_posts()) :	the_post();
?>
<div class="post content" >
	<article>
		<section class="section-post">
            <div class="banner">
                <div class="content-banner" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'featured'); ?>) no-repeat center; background-size: 100% auto;"></div>
            </div>


			<!-- <div class="report-content"> -->
				

			    <div class="center post-info">
                    <?php
					the_title( "<h1>", "</h1>" );
				?>
                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>" title="Author"><?php the_author(); ?></a>
                    on
                    <a href="<?php echo get_day_link( get_the_time('Y') , get_the_time('m') , get_the_time('d') ); ?>">
						<?php echo get_the_date(); ?>
					</a>
                </div>

				<div class="section-content">				
					<?php the_content(); ?>
				</div>
			<!-- </div> -->

			<div class="comment-container">
			 <?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			</div>
		</section>
		
		<aside class="tools">
			<?php if ( is_active_sidebar( 'sidebar-posts' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-posts' ); ?>
			<?php endif; ?>  
		</aside>
	</article>
</div>

<?php
	endwhile;	

	get_footer();
?>