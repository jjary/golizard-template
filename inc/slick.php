<?php 

// Slick carousel
function my_theme_enqueue_styles() {
    // Slick CSS & JS files
	wp_register_style('slick-css', get_template_directory_uri() .'/assets/css/slick.css');
	wp_register_style('slick-theme-css', get_template_directory_uri() .'/assets/css/slick-theme.css');
	wp_enqueue_script('jquery-min-js', get_template_directory_uri().'/scripts/jquery-1.11.0.min.js', array(), '1.11.0');		
	wp_enqueue_script('slick-min-js', get_template_directory_uri().'/scripts/slick.min.js');		

	wp_enqueue_script('custom-js', get_template_directory_uri().'/scripts/custom-js.js', array(), '1.0.0');
    
	// Enqueue all CSS & JS files
	wp_enqueue_style('slick-css');
	wp_enqueue_style('slick-theme-css');
	wp_enqueue_script('jquery-min-js');
	wp_enqueue_script('slick-min-js');
	wp_enqueue_script('custom-js');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function register_shortcodes() {
    add_shortcode( 'collaboration_slider', 'collaboration_slick_slider' );
    add_shortcode( 'reference_slider', 'reference_slick_slider' );
}
add_action( 'init', 'register_shortcodes' );

// Slider for reference
function reference_slick_slider ( $atts ) {
    global $wp_query, $post;

    $posts = new WP_Query( array(
    'post_type' => 'reference', 
    'post_status' => 'publish',  
    'orderby' => 'date', 
    'order' => 'ASC'
	) );

    if( ! $posts->have_posts() ) {
		return false;
    }
 
    $output = '<div class="reference_slider">';

    while( $posts->have_posts() ) {
		$posts->the_post();
		$ref_author = get_field('ref_author');
		$ref_date = get_field('ref_date');
		$ref_content = get_field('ref_content');

		$output .= '<div>';
		$output .= 		'<div>';
		$output .= 			'<div>';
		$output .= 				"<h3>{$ref_author}</h3>";								
		$output .= 				"<p>{$ref_date}</p>";
		$output .= 				"<p>{$ref_content}</p>";								
		$output .= 			'</div>';
		$output .= 		'</div>';
		$output .= '</div>';		
	}

    $output .= '</div>';

  return $output;
}
// Slider for reference

// Slider for collaboration
function collaboration_slick_slider ( $atts ) {
    global $wp_query, $post;

    $posts = new WP_Query( array(
    'post_type' => 'collaboration', 
    'post_status' => 'publish',  
    'orderby' => 'date', 
    'order' => 'ASC'
	) );

    if( ! $posts->have_posts() ) {
		return false;
    }
 
    $output = '<div class="collaboration_slider">';

    while( $posts->have_posts() ) {
		$posts->the_post();
		$col_img = get_field('logo_collaboration')['url'];

		$output .= '<div>';
		$output .= 		'<div>';
		$output .= 			'<div>';
		$output .= 				"<img src='{$col_img}'>";
		$output .= 			'</div>';
		$output .= 		'</div>';
		$output .= '</div>';		
	}

    $output .= '</div>';

  return $output;
}
// Slider for reference

;?>