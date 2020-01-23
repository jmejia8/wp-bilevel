
    <footer>


        <div class="footer-msg">
            <b>
                &copy; <?php echo date("Y"); ?> Bi-level Optimization
            </b>
        </div>
        <div class="social-icons-bottom">
             <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?> 
        </div>
        <div class="menu-wraper-bottom">
        <?php
        wp_nav_menu(
            array(
            'theme_location' => 'bottom',
            'container' => 'div',
            'container_class' => 'menu-bottom',
            )
        );
         ?>
        <?php wp_footer(); ?>
        </div>

        <div style="clear: both;"></div>
    </footer>
</body>
<script type="text/javascript">
    var slideIndex = 1;
    initSlides();
</script>
</html>
