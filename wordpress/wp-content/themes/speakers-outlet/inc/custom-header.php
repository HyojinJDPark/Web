<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package speakers outlet
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses speakers_outlet_header_style()
 */
function speakers_outlet_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'speakers_outlet_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'flex-height'            => true,
				'default-image'			=> get_theme_file_uri( '/img/bg-img.png' ),
		'wp-head-callback'       => 'speakers_outlet_header_style',
		) ) );
		register_default_headers( array( 
		'header-bg' => array(
			'url'           => get_theme_file_uri( '/img/bg-img.png' ),
			'thumbnail_url' => get_theme_file_uri( '/img/bg-img.png' ),
			'description'   => _x( 'Default', 'Default header image', 'speakers-outlet' )
			),	
		) );

}
add_action( 'after_setup_theme', 'speakers_outlet_custom_header_setup' );

if ( ! function_exists( 'speakers_outlet_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see speakers_outlet_custom_header_setup().
	 */
function speakers_outlet_header_style() {
	$header_text_color = get_header_textcolor();
	$header_image = get_header_image();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( empty( $header_image ) && $header_text_color == get_theme_support( 'custom-header', 'default-text-color' ) ){
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
		<style type="text/css">


	.site-title a,
		.site-description,
		.logofont {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}

	<?php if ( ! display_header_text() ) : ?>
	a.logofont {
		position: absolute;
		clip: rect(1px, 1px, 1px, 1px);
		display:none;
	}
	<?php endif; ?>

		<?php
		if ( ! display_header_text() ) :
			?>
		a.logofont{
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
			display:none;
		}
		<?php
		else :
			?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
		<?php endif; ?>
		</style>
		<?php
	}
	endif;