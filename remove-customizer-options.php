/* Remove customizer options by uncommenting lines

function majestic_remove_customizer_options( $wp_customize ) {
    // $wp_customize->remove_section( 'static_front_page' );
    // $wp_customize->remove_section( 'title_tagline' );
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'background_image' );
    // $wp_customize->remove_section( 'nav' );
    // $wp_customize->remove_section( 'themes' );
    // $wp_customize->remove_section( 'featured_content' );
    // $wp_customize->remove_panel( 'widgets' );
}
add_action( 'customize_register', 'majestic_remove_customizer_options', 30);
