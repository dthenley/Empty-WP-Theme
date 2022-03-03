    <footer class="site-footer">
        <nav>

            <?php the_custom_logo(); ?>
            
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    
                )
            );
            ?>
            <ul class="social-media">
                <li>f</li>
                <li>I</li>
                <li>L</li>
                <li>T</li>
            </ul>
        </nav>
    </footer>
    <div class="site-info">
        <div class="copyright-info">&copy; <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?>
        <?php if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '<span class="sep"> | </span>' );
        } ?> 
        | <a href="https://hexcodedesigns.com/" target="_blank" <?php if ( ! is_front_page() ) { echo 'rel="nofollow"'; } ?> >Site by Hexcode Designs, LLC</a> </div>

    </div><!-- .copyright-info -->

    <?php wp_footer(); ?>
</body>
</html>