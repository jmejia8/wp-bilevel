
    <footer>


        <div class="footer-msg">
            <b>
                &copy; <?php echo date("Y"); ?> Bi-level Optimization
            </b>
        </div>


        <div class="menu-wraper-bottom">
        <?php
        wp_nav_menu(
            array(
            'theme_location' => 'footer',
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
