<?php

function flibusbox_admin_page_callback() {

?>

<div class="wrap">
	<h2><?php echo get_admin_page_title(); ?></h2>

	<?php settings_errors(); ?>

	<form method="post" action="options.php">

 		<?php
 			do_settings_sections( 'flibusbox_render_page' ); //section
 		 	settings_fields( 'flibusbox_render_page' ); //settings
         	submit_button( __('save', 'flibusbox_textdomain') ); 
        ?>

    </form>

</div>

<?php

}