<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_empty-wp-theme' ); ?></a>

    <header>
        <nav></nav>
    </header>
    
    <main id="primary">
        <?php the_content(); ?>
    </main>

    <footer></footer>
</body>
</html>