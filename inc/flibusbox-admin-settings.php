<?php

/*********************************************************************************************
************************ ADDING CUSTOM OPTIONS SETTINGS *************************************
**********************************************************************************************/

function flibusbox_initialize_plugin_options() {

	/*---------------------------------------------------*
	* first section
	*----------------------------------------------------*/

	//register a section
	add_settings_section( 
		'flibusbox_section', 
		__('Open / Close', 'flibusbox_textdomain'),
		'flibusbox_section_callback',
		'flibusbox_render_page' 
	);

		/*---------------------------------------------------*
		* first section callbacks
		*----------------------------------------------------*/

		function flibusbox_section_callback() {
			echo '<p>' . __('<em>Settings open and close effect of fancybox</em>', 'flibusbox_textdomain') . '</p>';
		}

		/*---------------------------------------------------*
		* first fields
		*----------------------------------------------------*/

		//register a field : open effect
		add_settings_field(
			'flibusbox_openeffect_field',
			__('Open effect', 'flibusbox_textdomain'),
			'flibusbox_openeffect_field_callback',
			'flibusbox_render_page',
			'flibusbox_section'
		);

		/*---------------------------------------------------*
		* register first settings
		*----------------------------------------------------*/

		register_setting( 'flibusbox_render_page', 'flibusbox_openeffect_field' );

		/*---------------------------------------------------*
		* first fields callbacks
		*----------------------------------------------------*/

		function flibusbox_openeffect_field_callback() {
			echo '<select name="flibusbox_openeffect_field" >';
			echo '<option value="elastic" '. selected(get_option('flibusbox_openeffect_field'), "elastic") .'>elastic</option>';
			echo '<option value="fade" '. selected(get_option('flibusbox_openeffect_field'), "fade") .'>fade</option>';
			echo '<option value="none" '. selected(get_option('flibusbox_openeffect_field'), "none") .'>none</option>';
			echo '</select>';
		}


		/*---------------------------------------------------*
		* second fields
		*----------------------------------------------------*/

		//register a field : open speed
		add_settings_field(
			'flibusbox_openspeed_field',
			__('Open speed', 'flibusbox_textdomain'),
			'flibusbox_openspeed_field_callback',
			'flibusbox_render_page',
			'flibusbox_section'
		);

		/*---------------------------------------------------*
		* register second settings
		*----------------------------------------------------*/

		register_setting( 'flibusbox_render_page', 'flibusbox_openspeed_field' );

		/*---------------------------------------------------*
		* second fields callbacks
		*----------------------------------------------------*/

		function flibusbox_openspeed_field_callback() {
			echo '<select name="flibusbox_openspeed_field" >';
			echo '<option value="slow" '. selected(get_option('flibusbox_openspeed_field'), "slow") .'>slow</option>';
			echo '<option value="normal" '. selected(get_option('flibusbox_openspeed_field'), "normal") .'>normal</option>';
			echo '<option value="fast" '. selected(get_option('flibusbox_openspeed_field'), "fast") .'>fast</option>';
			echo '</select>';
		}

		/*---------------------------------------------------*
		* third fields
		*----------------------------------------------------*/

		//register a field : close effects
		add_settings_field(
			'flibusbox_closeffects_field',
			__('Close effects', 'flibusbox_textdomain'),
			'flibusbox_closeffects_field_callback',
			'flibusbox_render_page',
			'flibusbox_section'
		);

		/*---------------------------------------------------*
		* register third settings
		*----------------------------------------------------*/

		register_setting( 'flibusbox_render_page', 'flibusbox_closeffects_field' );

		/*---------------------------------------------------*
		* third fields callbacks
		*----------------------------------------------------*/

		function flibusbox_closeffects_field_callback() {
			echo '<select name="flibusbox_closeffects_field" >';
			echo '<option value="elastic" '. selected(get_option('flibusbox_closeffects_field'), "elastic") .'>elastic</option>';
			echo '<option value="fade" '. selected(get_option('flibusbox_closeffects_field'), "fade") .'>fade</option>';
			echo '<option value="none" '. selected(get_option('flibusbox_closeffects_field'), "none") .'>none</option>';
			echo '</select>';
		}


		/*---------------------------------------------------*
		* four fields
		*----------------------------------------------------*/

		//register a field : prev effects
		add_settings_field(
			'flibusbox_preveffects_field',
			__('Prev effects', 'flibusbox_textdomain'),
			'flibusbox_preveffects_field_callback',
			'flibusbox_render_page',
			'flibusbox_section'
		);

		/*---------------------------------------------------*
		* register four settings
		*----------------------------------------------------*/

		register_setting( 'flibusbox_render_page', 'flibusbox_preveffects_field' );

		/*---------------------------------------------------*
		* four fields callbacks
		*----------------------------------------------------*/

		function flibusbox_preveffects_field_callback() {
			echo '<select name="flibusbox_preveffects_field" >';
			echo '<option value="elastic" '. selected(get_option('flibusbox_preveffects_field'), "elastic") .'>elastic</option>';
			echo '<option value="fade" '. selected(get_option('flibusbox_preveffects_field'), "fade") .'>fade</option>';
			echo '<option value="none" '. selected(get_option('flibusbox_preveffects_field'), "none") .'>none</option>';
			echo '</select>';
		}

	/*---------------------------------------------------*
	* second section
	*----------------------------------------------------*/

	//register a section
	add_settings_section( 
		'flibusbox_overlay_section', 
		'Overlay',
		'flibusbox_overlay_section_callback',
		'flibusbox_render_page' 
	);

		/*---------------------------------------------------*
		* first field
		*----------------------------------------------------*/

		//register a field : color picker
		add_settings_field(
			'flibusbox_color_field',
			'Color picker',
			'flibusbox_color_field_callback',
			'flibusbox_render_page',
			'flibusbox_overlay_section'
		);

		/*---------------------------------------------------*
		* second section callbacks
		*----------------------------------------------------*/

		function flibusbox_overlay_section_callback() {
			echo '<p>' . __('<em>Settings fancybox overlay</em>', 'flibusbox_textdomain') . '</p>';
		}

		/*---------------------------------------------------*
		* register first field settings
		*----------------------------------------------------*/

		register_setting( 'flibusbox_render_page', 'flibusbox_color_field' );

		/*---------------------------------------------------*
		* first fields callbacks
		*----------------------------------------------------*/

		function flibusbox_color_field_callback() {
			echo '<input type="text" class="color-field" id="flibusbox_color_field" name="flibusbox_color_field" value=' . get_option('flibusbox_color_field') . '>';
		}

		/*---------------------------------------------------*
		* second field
		*----------------------------------------------------*/

		//register a field : color picker
		add_settings_field(
			'flibusbox_color_field_opacity',
			'Opacity',
			'flibusbox_color_field_opacity_callback',
			'flibusbox_render_page',
			'flibusbox_overlay_section'
		);

		/*---------------------------------------------------*
		* register second field settings
		*----------------------------------------------------*/

		register_setting( 'flibusbox_render_page', 'flibusbox_color_field_opacity' );


		/*---------------------------------------------------*
		* second fields callbacks
		*----------------------------------------------------*/

		function flibusbox_color_field_opacity_callback() {
			echo '<input type="number" class="color-field_opacity" min="0" max="1" step="0.01"name="flibusbox_color_field_opacity" value=' . get_option('flibusbox_color_field_opacity') . '>';
		}

	/*---------------------------------------------------*
	* third section
	*----------------------------------------------------*/

	//register a section
	add_settings_section( 
		'flibusbox_button_section', 
		__('Buttons', 'flibusbox_textdomain'),
		'flibusbox_button_section_callback',
		'flibusbox_render_page' 
	);

		/*---------------------------------------------------*
		* third section callbacks
		*----------------------------------------------------*/

		function flibusbox_button_section_callback() {
			echo '<p>' . __('<em>Settings buttons navigation</em>', 'flibusbox_textdomain') . '</p>';
		}

		/*---------------------------------------------------*
		* first field
		*----------------------------------------------------*/

		//register a field : change theme
		add_settings_field(
			'flibusbox_button',
			__('Theme', 'flibusbox_textdomain'),
			'flibusbox_button_callback',
			'flibusbox_render_page',
			'flibusbox_button_section'
		);

		/*---------------------------------------------------*
		* register first field settings
		*----------------------------------------------------*/

		register_setting( 'flibusbox_render_page', 'flibusbox_button' );

		/*---------------------------------------------------*
		* first fields callbacks
		*----------------------------------------------------*/

		function flibusbox_button_callback() {
			echo '<div class="wrap-option-css">';
				echo '<div class="options-css">';
				echo '<label for="toggle" class="thematique">Thème snow</label>';
				echo '<input type="radio" name="flibusbox_button" value="choose_snow" ' . checked( "choose_snow", get_option('flibusbox_button'), false ) . '>';
				echo '<span class="presentation-theme snow"></span>';
				echo '<img src="' . FLIBUSBOX_URL . '/assets/img/fancybox_sprite_1.png" />';
				echo '</div>';

				echo '<div class="options-css">';
				echo '<label for="toggle" class="thematique">Thème dark</label>';
				echo '<input type="radio" name="flibusbox_button" value="choose_dark" ' . checked( "choose_dark", get_option('flibusbox_button' ),  false) . '>';
				echo '<span class="presentation-theme dark"></span>';
				echo '<img src="' . FLIBUSBOX_URL . '/assets/img/fancybox_sprite_2.png" />';
				echo '</div>';

				echo '<div class="options-css">';
				echo '<label for="toggle" class="thematique">Thème street art</label>';
				echo '<input type="radio" name="flibusbox_button" value="choose_street" ' . checked( "choose_street", get_option('flibusbox_button' ),  false) . '>';
				echo '<span class="presentation-theme street"></span>';
				echo '<img src="' . FLIBUSBOX_URL . '/assets/img/fancybox_sprite_3.png" />';
				echo '</div>';

				echo '<div class="options-css">';
				echo '<label for="toggle" class="thematique">Thème origin</label>';
				echo '<input type="radio" name="flibusbox_button" value="choose_origin" ' . checked( "choose_origin", get_option('flibusbox_button' ),  false) . '>';
				echo '<span class="presentation-theme origin"></span>';
				echo '<img src="' . FLIBUSBOX_URL . '/assets/img/fancybox_sprite.png" />';
				echo '</div>';

				echo '<div class="options-css">';
				echo '<label for="toggle" class="thematique">Custom thème</label>';
				echo '<input type="radio" name="flibusbox_button" value="choose_custom" ' . checked( "choose_custom", get_option('flibusbox_button' ),  false) . '>';
				echo '<span class="presentation-theme custom"></span>';
				echo '</div>';
			echo '</div>';
		}

		/*---------------------------------------------------*
		* second field
		*----------------------------------------------------*/

		//register a field : change theme
		add_settings_field(
			'custom_flibusbox_button',
			__('Custom theme for normal screen', 'flibusbox_textdomain'),
			'flibusbox_custom_button_callback',
			'flibusbox_render_page',
			'flibusbox_button_section'
		);

		/*---------------------------------------------------*
		* register second field settings
		*----------------------------------------------------*/

		register_setting( 'flibusbox_render_page', 'custom_flibusbox_button' );

		/*---------------------------------------------------*
		* second field callbacks
		*----------------------------------------------------*/

		function flibusbox_custom_button_callback() {
			echo '<div class="section-custom-button">';
			echo '<label class="label-input-url">' . __('choose your theme for navigation of fancybox on normal screen', 'flibusbox_textdomain') . '</label>';
			echo '<em>' . __('for a good use of this plugin, you must choose an image with this dimension : width -> 44px and height -> 152px', 'flibusbox_textdomain') . '</em>';
			echo '<img src="' . get_option('custom_flibusbox_button') . '" class="img-input-label">';
			echo '<input type="text" name="custom_flibusbox_button" class="input-url" value="' . get_option('custom_flibusbox_button') . '">';
			echo '<button class="custom_button" >' . __('Choose your custom theme', 'flibusbox_textdomain') . '</button>';
			echo '</div>';

			//variable img
			$filename = get_option('custom_flibusbox_button');

			//check file
			checkfiletypes_flibusbox($filename);
		}

		/*---------------------------------------------------*
		* third field
		*----------------------------------------------------*/

		//register a field : change theme
		add_settings_field(
			'custom_flibusbox_button_retina',
			__('Custom theme for retina screen', 'flibusbox_textdomain'),
			'flibusbox_custom_button_retina_callback',
			'flibusbox_render_page',
			'flibusbox_button_section'
		);

		/*---------------------------------------------------*
		* register third field settings
		*----------------------------------------------------*/

		register_setting( 'flibusbox_render_page', 'custom_flibusbox_button_retina' );

		/*---------------------------------------------------*
		* third field callbacks
		*----------------------------------------------------*/

		function flibusbox_custom_button_retina_callback() {
			echo '<div class="section-custom-button">';
			echo '<label class="label-input-url">' . __('choose your theme for navigation of fancybox on retina screen', 'flibusbox_textdomain') . '</label>';
			echo '<em>' . __('for a good use of this plugin, you must choose an image with this dimension : width -> 88px and height -> 304px', 'flibusbox_textdomain') . '</em>';
			echo '<img src="' . get_option('custom_flibusbox_button_retina') . '" class="img-input-label-retina">';
			echo '<input type="text" name="custom_flibusbox_button_retina" class="input-url" value="' . get_option('custom_flibusbox_button_retina') . '">';
			echo '<button class="custom_button_retina" >' . __('Choose your custom theme', 'flibusbox_textdomain') . '</button>';
			echo '</div>';

			//variable img
			$filename_retina = get_option('custom_flibusbox_button_retina');

			//check file
			checkfiletypes_retina_flibusbox($filename_retina);
		}
}
add_action( 'admin_init', 'flibusbox_initialize_plugin_options' );