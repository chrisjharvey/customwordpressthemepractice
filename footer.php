<footer>
    <?php 
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'after' => '<span class="seperator"> | </span>',
                
            );
            wp_nav_menu($args);
            ?>
    <p>
        8179 Bay Avenue, Mountain View, CA 94043
    </p>

    <p>Phone Number: +1-92-456-7890</p>
    <p class="copyright">All Rights Reserved &copy; <?php echo date('Y')?></p>
</footer>
<?php wp_footer(); ?>
</body>

</html>