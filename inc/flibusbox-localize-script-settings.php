<?php

function flibusbox_array_localize() {

	//array settings values
	$array_settings = array (
		'openEffect'		=> get_option('flibusbox_openeffect_field'),
		'openSpeed'			=> get_option('flibusbox_openspeed_field'),
		'closeEffect'		=> get_option('flibusbox_closeffects_field'),
		'prevEffect'		=> get_option('flibusbox_preveffects_field'),
		'background'		=> hexOpa(),
		);

	//array defaults values
	$array_defaults = array (
		'openEffect' 	    => 'elastic',
		'openSpeed'	 	    => 250,
        'closeEffect' 	    => 'elastic',
        'prevEffect'	    => 'elastic',
		);

	//wp parse args
	$op = wp_parse_args( $array_settings, $array_defaults );

	//wp localize scripts
	wp_localize_script( 'flibusbox-front-js', 'flibusbox_op', $op );

}

function flibusbox_array_translation() {
	$translation_array = array(

			//array of errors messages for alert js
			'error_message1' 	=> __('Oups!!...the dimension of your image are incorrect. you are taking an image with a width ', 'flibusbox_textdomain'),
			'error_message2'	=> __(' px and a height ', 'flibusbox_textdomain'),
			'error_message3'	=> __(' px. For a good use of this plugin you must choose an image with this dimension: width ', 'flibusbox_textdomain'),
            'error_message4'	=> __(' px, height ', 'flibusbox_textdomain'),
            'error_message5'	=> __(' px. ', 'flibusbox_textdomain'),
            'error_message6'	=> __('Oups...!! Try again with another image', 'flibusbox_textdomain'),
            'error_message7'	=> __('Media upload for choose your custom theme', 'flibusbox_textdomain')
		);

	//wp localize scripts for translation
	wp_localize_script( 'flibusbox-admin-js', 'flibusbox_alert', $translation_array );
}