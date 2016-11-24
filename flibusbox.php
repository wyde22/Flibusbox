<?php     
/*
Plugin Name: FlibusBox
Plugin URI: http://dewy.fr/
Description: A wordpress plugin for manage the famous fancybox directly of your adminstration pannel.
Author: Dewy Mercerais
Author URI: http://dewy.fr/
Version: 1.0.0
License: GPL2
Text Domain: flibusbox_textdomain
Domain Path: /languages
*/


if( ! defined( 'ABSPATH' ) ){
    exit;
}

/*********************************************************************************************
************************** LANGUAGES *********************************************************
**********************************************************************************************/

add_action( 'init', 'flibusbox_load_textdomain' );
function flibusbox_load_textdomain() {
  load_plugin_textdomain( 'flibusbox_textdomain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

/*********************************************************************************************
************************ CONSTANTES *********************************************************
**********************************************************************************************/

define( 'FLIBUSBOX_URL', plugin_dir_url ( __FILE__ ) );
define( 'FLIBUSBOX_DIR', plugin_dir_path( __FILE__ ) );
define( 'FLIBUSBOX_BASENAME', plugin_basename( __FILE__ ) );
define( 'FLIBUSBOX_VERSION', '1.0' );

/*********************************************************************************************
************************ REQUIRE ************************************************************
**********************************************************************************************/

require_once FLIBUSBOX_DIR . '/inc/flibusbox-admin-settings.php';
require_once FLIBUSBOX_DIR . '/inc/flibusbox-admin-options-page.php';
require_once FLIBUSBOX_DIR . '/inc/flibusbox-localize-script-settings.php';
require_once FLIBUSBOX_DIR . '/inc/flibusbox-inline-css.php';
require_once FLIBUSBOX_DIR . '/lib/functions.php';

/*********************************************************************************************
************************ ADDING MENU ********************************************************
**********************************************************************************************/


function flibusbox_add_submenu() {
    $my_page = add_submenu_page( 'tools.php', 'Options FlibusBox', 'FlibusBox', 'manage_options', 'flibusbox', 'flibusbox_admin_page_callback');

    //load script only on this pages
    add_action( 'load-' . $my_page, 'load_admin_css' );
    add_action( 'load-' . $my_page, 'load_admin_js' );
}
add_action( 'admin_menu', 'flibusbox_add_submenu' );


/*********************************************************************************************
************************ SCRIPTS ************************************************************
**********************************************************************************************/

    /*---------------------------------------------------*
    * admin script
    *----------------------------------------------------*/

        function load_admin_css() {
            add_action( 'admin_enqueue_scripts', 'flibusbox_admin_css' );
        }

        function load_admin_js() {
            add_action( 'admin_enqueue_scripts', 'flibusbox_admin_js' );
        }


        function flibusbox_admin_css() {

            wp_register_style( 'flibusbox-admin-css', FLIBUSBOX_URL . 'assets/css/admin/flibusbox-admin.css', false, '1.0', false );
            wp_enqueue_style( 'flibusbox-admin-css' );

        }

        function flibusbox_admin_js() {
            wp_enqueue_media();
            wp_enqueue_style( 'wp-color-picker' );
            wp_enqueue_script( 'wp-color-picker');
            wp_enqueue_script('flibusbox-admin-js', FLIBUSBOX_URL . 'assets/js/wp-cp.js', array( 'wp-color-picker' ),'1.0', true);

            /*add function wp_localize_script for translation of string in alert js*/
            flibusbox_array_translation();
        }

    /*---------------------------------------------------*
    * front script
    *----------------------------------------------------*/

        function flibusbox_front_script() {

            wp_register_script( 'flibusbox-front-js', FLIBUSBOX_URL . 'assets/js/flibusbox-script.js', array( 'jquery' ), '1.0', true );
            wp_enqueue_script( 'flibusbox-front-js' );

            /*add function wp_localize_script*/
            flibusbox_array_localize();

            /*original script and style of fancybox*/
            /*wp_enqueue_style("jquery.fancybox",FLIBUSBOX_URL ."source/jquery.fancybox.css",false,"2.1.5");
            wp_enqueue_script("jquery");
            wp_enqueue_script("jquery.fancybox", FLIBUSBOX_URL ."source/jquery.fancybox.pack.js", array("jquery"), "2.1.5",1);
            wp_enqueue_script("jquery.fancyboxmousewheel", FLIBUSBOX_URL ."lib/jquery.mousewheel-3.0.6.pack.js", "3.0.6",1); 
            wp_enqueue_script("jquery.fancyboxmedia", FLIBUSBOX_URL ."source/helpers/jquery.fancybox-media.js", array("jquery"), "1.0.6",1);*/

            wp_enqueue_style("jquery.fancybox", FLIBUSBOX_URL . "assets/css/front/flibusbox-fancybox.css",false,"2.1.5");
            wp_enqueue_script("jquery");
            wp_enqueue_script("jquery.fancybox", FLIBUSBOX_URL . "assets/js/jquery.fancybox.pack.js", array("jquery"), "2.1.5",1);
            wp_enqueue_script("jquery.fancyboxmousewheel", FLIBUSBOX_URL . "assets/js/jquery.mousewheel-3.0.6.pack.js", "3.0.6",1); 
            wp_enqueue_script("jquery.fancyboxmedia", FLIBUSBOX_URL . "assets/js/jquery.fancybox-media.js", array("jquery"), "1.0.6",1);

        }
        add_action( 'wp_enqueue_scripts', 'flibusbox_front_script' );