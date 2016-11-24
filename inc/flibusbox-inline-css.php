<?php

function my_styles_method() {

	$theme = get_option('flibusbox_button');

	$urlSnow = FLIBUSBOX_URL . '/assets/img/fancybox_sprite_1.png';
	$urlSnowx2 = FLIBUSBOX_URL . '/assets/img/fancybox_sprite@2x_1.png';

	$urlDark = FLIBUSBOX_URL . '/assets/img/fancybox_sprite_2.png';
	$urlDarkx2 = FLIBUSBOX_URL . '/assets/img/fancybox_sprite@2x_2.png';

	$urlStreet = FLIBUSBOX_URL . '/assets/img/fancybox_sprite_3.png';
	$urlStreetx2 = FLIBUSBOX_URL . '/assets/img/fancybox_sprite@2x_3.png';

	$urlOrigin = FLIBUSBOX_URL . '/assets/img/fancybox_sprite.png';
	$urlOriginx2 = FLIBUSBOX_URL . '/assets/img/fancybox_sprite@2x.png';

	$urlCustomns = get_option('custom_flibusbox_button');
	$urlCustomnr = get_option('custom_flibusbox_button_retina');


	wp_enqueue_style( 'custom-sprite', FLIBUSBOX_URL . 'assets/css/front/custom-sprite.css' );

    if( $theme == 'choose_snow' ) {

		$custom_sprite_css = ".fancybox-prev span, .fancybox-next span, .fancybox-close
								{ background-image: url('". $urlSnow ."');}
								
								@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
	   							only screen and (min--moz-device-pixel-ratio: 1.5),
	   							only screen and (min-device-pixel-ratio: 1.5){
	   							  .fancybox-prev span, .fancybox-next span, .fancybox-close{ background-image: url('". $urlSnowx2 ."');
	   							}

								";	
        wp_add_inline_style( 'custom-sprite', $custom_sprite_css );
    }

    if( $theme == 'choose_dark' ) {

		$custom_sprite_css = ".fancybox-prev span, .fancybox-next span, .fancybox-close
								{ background-image: url('". $urlDark ."');}

								@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
	   							only screen and (min--moz-device-pixel-ratio: 1.5),
	   							only screen and (min-device-pixel-ratio: 1.5){
	   							  .fancybox-prev span, .fancybox-next span, .fancybox-close{ background-image: url('". $urlDarkx2 ."');
	   							}

								";	
        wp_add_inline_style( 'custom-sprite', $custom_sprite_css );
    }

    if( $theme == 'choose_street' ) {

		$custom_sprite_css = ".fancybox-prev span, .fancybox-next span, .fancybox-close
								{ background-image: url('". $urlStreet ."');}

								@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
	   							only screen and (min--moz-device-pixel-ratio: 1.5),
	   							only screen and (min-device-pixel-ratio: 1.5){
	   							  .fancybox-prev span, .fancybox-next span, .fancybox-close{ background-image: url('". $urlStreetx2 ."');
	   							}

								";	
        wp_add_inline_style( 'custom-sprite', $custom_sprite_css );
    }

    if( $theme == 'choose_origin' ) {

		$custom_sprite_css = ".fancybox-prev span, .fancybox-next span, .fancybox-close
								{ background-image: url('". $urlOrigin ."');}

								@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
	   							only screen and (min--moz-device-pixel-ratio: 1.5),
	   							only screen and (min-device-pixel-ratio: 1.5){
	   							  .fancybox-prev span, .fancybox-next span, .fancybox-close{ background-image: url('". $urlOriginx2 ."');
	   							}

								";	
        wp_add_inline_style( 'custom-sprite', $custom_sprite_css );
    }

    if( $theme == 'choose_custom' ) {

		$custom_sprite_css = ".fancybox-prev span, .fancybox-next span, .fancybox-close
								{ background-image: url('". $urlCustomns ."');}

								@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
	   							only screen and (min--moz-device-pixel-ratio: 1.5),
	   							only screen and (min-device-pixel-ratio: 1.5){
	   							  .fancybox-prev span, .fancybox-next span, .fancybox-close{ background-image: url('". $urlCustomnr ."');
	   							}

								";	
        wp_add_inline_style( 'custom-sprite', $custom_sprite_css );
    }
}
add_action( 'wp_enqueue_scripts', 'my_styles_method', 20);