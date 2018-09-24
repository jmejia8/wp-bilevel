<?php 
// template for displaying author, etc

get_header();

?>

<div class="post content">
<article>

<section class="section-post">

<?php // http://www.example.com/category/custom-category
    if (is_category()) { ?>
    <h1 class="main-h1">
        <span class="red">
            <i class="fa fa-tags"></i>
            <?php _e('Category:', 'bilevel'); ?>
                
        </span>
        <?php single_cat_title(); ?>
    </h1>
    <?php } ?>

    <?php // http://www.example.com/tag/custom-tag
    if (is_tag()) { ?>
    <h1 class="main-h1">
        <span class="red">
            <i class="fa fa-tag"></i>
            <?php _e('Tag:', 'bilevel'); ?>
        </span> <?php single_tag_title(); ?>
    </h1>
    
    <?php } ?>

    <?php 
    if (is_author()) { 
    ?>

        <div class="vcard">
            <h2 class="name main-h1"><?php
                        the_author_meta('user_firstname');
                        echo " ";
                        the_author_meta('user_lastname'); ?></h2>
            <div class="profile-info">
                <div class="img" style="background: url(<?php echo get_avatar_url( get_the_author_meta('ID'), array("size"=>200)); ?>) no-repeat center; background-size: 100% auto;"></div>
                
                <div class="text">
                    <ul class="fa-ul">
                        <li><span class="fa-li" ><i class="fas fa-school"></i></span>
                            <a href="<?php echo get_the_author_meta('url') ?>"><?php echo get_the_author_meta('url') ?></a>
                        </li>
                        <li><span class="fa-li" ><i class="fas fa-envelope"></i></span> 
                            <?php echo get_the_author_meta('email') ?>
                        </li>
                     <!--    <li><span class="fa-li" ><i class="fas fa-map-marker-alt"></i></span> 
                        </li> -->
                    </ul>
                    </div>
            </div>
            <div class="section-content">
                <p><?php the_author_meta('description'); ?></p>
            </div>
        </div>

        <h1 class="main-h1">Latest Posts</h1>

    
    <?php } ?>

    <?php // http://www.example.com/2017/05
    if (is_date()) { ?>
    <h1 class="main-h1">
        <span class="red">
            <i class="fa fa-calendar"></i>
            <?php _e('Entries from ', 'bilevel'); ?>
        </span>

        <?php 
        
        $year = get_query_var('year');
        $month = get_query_var('monthnum');
        $day = get_query_var('day');

        if ($year > 0) { echo $year; }
        if ($month > 0) { echo '-' . str_pad($month, 2, 0, STR_PAD_LEFT); }
        if ($day > 0) { echo '-' . str_pad($day, 2, 0, STR_PAD_LEFT); }

    ?></h1>
    <?php } ?>

    <div>
        <div class="section-content" >
            <?php
            // start loop 
            while (have_posts()) : the_post();
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
                            <?php _e('Read more...', 'bilevel') ?>
                        </a>
                    </section>
                </div>

                <hr>
            <?php 
            // end loop
            endwhile;
            ?>
        </div>
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

get_footer();
?>