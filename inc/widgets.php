<?php 

// Start widget for logo in footer
function golizard_widgets_init() {
    register_sidebar([
        'name' => __( 'Logo in footer', 'golizard-template' ),
        'id' => 'footer-logo',
        'description' => 'Place for logo in footer',
        'before_widget' => '<aside id="%1$s" class="%2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ]);
}
add_action('widgets_init', 'golizard_widgets_init');
// End widget for logo in footer

;?>