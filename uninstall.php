<?php

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

	$option_name_1 = 'flibusbox_openeffect_field';
    $option_name_2 = 'flibusbox_openspeed_field';
    $option_name_3 = 'flibusbox_closeffects_field';
    $option_name_4 = 'flibusbox_preveffects_field';
    $option_name_5 = 'flibusbox_color_field';
    $option_name_6 = 'flibusbox_color_field_opacity';
    $option_name_7 = 'flibusbox_button';
    $option_name_8 = 'custom_flibusbox_button';
    $option_name_9 = 'custom_flibusbox_button_retina';
 
    delete_option( $option_name_1 );
    delete_option( $option_name_2 );
    delete_option( $option_name_3 );
    delete_option( $option_name_4 );
    delete_option( $option_name_5 );
    delete_option( $option_name_6 );
    delete_option( $option_name_7 );
    delete_option( $option_name_8 );
    delete_option( $option_name_9 );