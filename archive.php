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
            <?php _e('Categoría:', 'gaming'); ?>
                
        </span>
        <?php single_cat_title(); ?>
    </h1>
    <?php } ?>

    <?php // http://www.example.com/tag/custom-tag
    if (is_tag()) { ?>
    <h1 class="main-h1">
        <span class="red">
            <i class="fa fa-tag"></i>
            <?php _e('Etiqueta:', 'gaming'); ?>
        </span> <?php single_tag_title(); ?>
    </h1>
    
    <?php } ?>

    <?php // http://www.example.com/tag/custom-tag
    if (is_author()) { 
    // $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

        <div class="vcard">
            <h2 class="name main-h1"><?php
                        the_author_meta('user_firstname');
                        echo " ";
                        the_author_meta('user_lastname'); ?></h2>
            <div class="profile-info">
                <div class="img" style="background: url(<?php echo get_avatar_url( get_the_author_meta('ID'), 100); ?>) no-repeat center; background-size: 100% auto;"></div>
                
                <div class="text">
                    <ul class="fa-ul">
                        <li><span class="fa-li" ><i class="fas fa-school"></i></span> University of Memeology</li>
                        <li><span class="fa-li" ><i class="fas fa-envelope"></i></span> benito@camelo.com</li>
                        <li><span class="fa-li" ><i class="fas fa-map-marker-alt"></i></span> Africam Safary</li>
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
            <?php _e('Entradas del ', 'gaming'); ?>
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
                <div>
                    <div class="imsc">
                        <?php echo get_the_post_thumbnail($loop->ID, 'gaming-featured-image');?>
                    </div>
                    <div class="abstract">
                        <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php the_excerpt(); ?></p>

                    </div>
                </div>
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