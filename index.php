<?php

get_header();
?>
    
    <main id="primary">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
                the_content();
            endwhile; 
        else: 
            _e( 'Sorry, no pages matched your criteria.', 'empty-wp-theme' ); 
        endif; 
        ?>
    </main>

<?php
get_sidebar();
get_footer();
