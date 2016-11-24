<?php
/*function PHP to convert hexadecimal values of a color picker en rgb*/

function hexOpa()
{

	//Value of color picker field
	$hex = get_option('flibusbox_color_field');

	//Value of opacity field
	$alpha = get_option('flibusbox_color_field_opacity');

	if( isset( $hex ) ){

		$hex = str_replace('#', '', $hex);
		   if ( strlen($hex) == 6 ) {
		      $rgb['r'] = hexdec(substr($hex, 0, 2));
		      $rgb['g'] = hexdec(substr($hex, 2, 2));
		      $rgb['b'] = hexdec(substr($hex, 4, 2));
		      $rgb['a'] = $alpha;
		   }
		   else if ( strlen($hex) == 3 ) {
		      $rgb['r'] = hexdec(str_repeat(substr($hex, 0, 1), 2));
		      $rgb['g'] = hexdec(str_repeat(substr($hex, 1, 1), 2));
		      $rgb['b'] = hexdec(str_repeat(substr($hex, 2, 1), 2));
		      $rgb['a'] = $alpha;
		   }
		   else {
		      $rgb['r'] = '0';
		      $rgb['g'] = '0';
		      $rgb['b'] = '0';
		      $rgb['a'] = $alpha;
		   }
		   
		   return implode('', array_keys($rgb)) . '(' . implode(', ', $rgb) . ')';
	}
}

/*check file type*/

function checkfiletypes_flibusbox($filename)
{
	//check if filename is empty or not
	if( ! empty($filename)){
		$sizeimage = getimagesize($filename);

		$maximum = array('width' => '44', 'height' => '152');
		$width = $sizeimage[0];
		$height = $sizeimage[1];

		$mimeTypes = array( 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'png' => 'image/png', 'bmp' => 'image/bmp', 'jpeg' => 'image/jpeg', 'jpe' => 'image/jpeg');
		$checkMt = $sizeimage['mime'];
		

		/**** check dimensions of images ****/

		if( $width > $maximum['width'] )
		{
			echo "<span class=\"error-upload-files\">" . sprintf( __('Image dimensions are wrong. Maximum width is %s px. Uploaded image width is %s px', 'flibusbox_textdomain'), $maximum['width'], $width ) . "</span><br />";
		}

		if ( $height > $maximum['height']  ) {

			echo "<span class=\"error-upload-files\">" . sprintf( __('Image dimensions are wrong. Maximum height is %s px. Uploaded image height is %s px', 'flibusbox_textdomain'), $maximum['height'], $height) . "</span><br />";
		}

		/**** check mimes type ****/

		if( ! in_array($checkMt, $mimeTypes) )
		{
			echo "<span class=\"error-upload-files\">" . __('bad extension. for a good use of this plugin, you must choose an images with this extension : jpg, jpeg, jpe, gif, png, bmp', 'flibusbox_textdomain') . "</span>";
		}

	}

}

function checkfiletypes_retina_flibusbox($filename_retina)
{
	//check if filename_retina is empty or not
	if( ! empty( $filename_retina ) ){
		$sizeimage = getimagesize($filename_retina);

		$maximum = array('width' => '88', 'height' => '304');
		$width = $sizeimage[0];
		$height = $sizeimage[1];

		$mimeTypes = array( 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'png' => 'image/png', 'bmp' => 'image/bmp', 'jpeg' => 'image/jpeg', 'jpe' => 'image/jpeg');
		$checkMt = $sizeimage['mime'];

		/**** check dimensions of images ****/

		if( $width > $maximum['width'] )
		{
			echo "<span class=\"error-upload-files\">" . sprintf( __('Image dimensions are wrong. Maximum width is %s px. Uploaded image width is %s px', 'flibusbox_textdomain'), $maximum['width'], $width ) . "</span><br />";

		}

		if ( $height > $maximum['height']  ) {

			echo "<span class=\"error-upload-files\">" . sprintf( __('Image dimensions are wrong. Maximum height is %s px. Uploaded image height is %s px', 'flibusbox_textdomain'), $maximum['height'], $height ) . "</span><br />";
		}

		/**** check mimes type ****/

		if( ! in_array($checkMt, $mimeTypes) )
		{
			echo "<span class=\"error-upload-files\">" . __('bad extension. for a good use of this plugin, you must choose an images with this extension : jpg, jpeg, jpe, gif, png, bmp', 'flibusbox_textdomain') . "</span>";
		}
	}

}