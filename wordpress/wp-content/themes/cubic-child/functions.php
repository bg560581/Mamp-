add_action( 'wp_enqueue_scripts', 'cubic_enqueue_styles' );

function cubic_enqueue_styles() {
    wp_enqueue_style( 'cubic-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('cubic-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('cubic-style')
    );
}