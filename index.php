<?php 

get_header();
?>

<div class="content">

<?php 
$args = array(
    'post_type' => 'bilevel_slider',
    'posts_per_page' => 3
);

$loop = new WP_Query( $args );

if ($loop->have_posts()) : 
    ?>

    <div class="banner" id="slider">
        
        <?php 
        $l = $loop->post_count;

        for ($i=0; $loop->have_posts(); $i++) {
            $loop->the_post();
        ?>

            <div class="content-banner" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'bilevel-featured-image'); ?>) no-repeat center; background-size: 100% auto;">
                <!-- get_the_post_thumbnail($loop->ID, 'bilevel-featured-image'); -->
                <div class="text"> 
                    <div>
                        <?php the_title( "<h2>", "</h2>" ); ?>
                        <p><?php the_content(); ?></p>
                        <a href="#" class="btn-default">Go for it!</a>
                    </div>
                </div>
            </div>
 
        <?php 
        }
        ?>
    </div>


<?php
endif;
?>





<!-- ================================================= -->
<!-- ================================================= -->



<article>
    <section class="section-code">
        <?php

        $args = array(
            'post_type' => 'bilevel_code',
            'posts_per_page' => 6
        );

        $loop = new WP_Query( $args );

        if ($loop->have_posts()) : 
        ?>
        <h1 class="main-h1">Latest Algorithms</h1>

        <div class="cards">

            <?php
            ////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////

            // start loop 
            for ($i=0; $loop->have_posts(); $i++) {
                $loop->the_post();
            ?>
            
                <div class="card">
                    <div class="img" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'bilevel-code-image'); ?>) no-repeat center; background-size: 100% auto;"></div>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <a class="btn-green" href="<?php echo get_permalink(); ?>">Download</a>
                </div>

            <?php 
            ////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////
            // end loop
            };
            ?>


        </div>

        <div class="center">
            <a class="btn-light" href="#">See all</a>
        </div>

        <?php
        endif;
        ?>
        
    </section>

    <section class="section-tutorials">
        <h1 class="main-h1">Latest Tutorials</h1>

        <?php
        // start loop 
        while (have_posts()) : the_post();
        ?>
            <div class="card-post">
                <div class="img">
                    <?php echo get_the_post_thumbnail($loop->ID, 'bilevel-tutorial-image');?>
                </div>
                <div class="abstract">
                    <h4><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                    <div class="center">
                        <a class="btn-default" href="<?php echo get_permalink(); ?>">read more...</a>
                    </div>
                </div>
            </div>
        <?php 
        // end loop
        endwhile;
        ?>


        <div class="center">
            <a class="btn-light" href="#">See all</a>
        </div>
    </section>

    <section class="section-community">
        <h1 class="main-h1">Community</h1>
        
        <div class="card-profile">
            <div class="img" style="background: url(img/profile.jpg) no-repeat center; background-size: 100% auto;"></div>
            <h3>Benito Camelo</h3>
            <p>
            Lorem ipsum dolor sit amet, conse actetur adipisicing elit. Tenetur sed quod ratione voluptatem recusandae.
            </p>
            <a href="#" class="btn-light" title="The profile">See profile</a>
        </div>


        <div class="center">
            <a class="btn-light" href="#">See all</a>
        </div>
    </section>
</article>
</div>
<!-- ================================================= -->
<!-- ================================================= -->

<?php 
    get_footer();
?>
