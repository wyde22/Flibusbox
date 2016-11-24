( function( $ ) { 
    /*color-picker*/
    $(document).ready(function() {
        $('.color-field').wpColorPicker();
    });


    $(document).ready(function(){
        /*Uploader media*/
        $( '.custom_button, .custom_button_retina' ).click( function ( e ){

            var el = $(this).parent();
            var classButton = $(this).attr('class');

            e.preventDefault();
            
            var uploader = wp.media({
                title : flibusbox_alert.error_message7,
                button : {
                    text : 'Go'
                },
                multiple : false

            })

            uploader.on('select', function(){
                var selection = uploader.state().get('selection');
                var attachment = selection.first().toJSON();

                //array of dimensions of image of normal screen:
                var NormalScreen = {width: "44", height: "152"};

                //array of dimensions of image of retina screen:
                var RetinaScreen = {width: "88", height: "304"};


                if( classButton === 'custom_button' && ( attachment.height > NormalScreen.height || attachment.width > NormalScreen.width ) ){

                    /*** check the dimensions of image for a normal screen ***/
                    
                       alert(flibusbox_alert.error_message1 + attachment.width + flibusbox_alert.error_message2 + attachment.height + 
                        flibusbox_alert.error_message3 + NormalScreen.width + 
                        flibusbox_alert.error_message4 + NormalScreen.height + flibusbox_alert.error_message5);

                        $('.img-input-label').before('<div class="error-img-jquery">' + flibusbox_alert.error_message6 + '<span class="close">X</span></div>');

                } else if( classButton === 'custom_button_retina' && ( attachment.height > RetinaScreen.height || attachment.width > RetinaScreen.width ) ) {

                    /*** check the dimensions of image for a retina screen ***/
                    
                        alert(flibusbox_alert.error_message1 + attachment.width + flibusbox_alert.error_message2 + attachment.height + 
                        flibusbox_alert.error_message3 + NormalScreen.width + 
                        flibusbox_alert.error_message4 + NormalScreen.height + flibusbox_alert.error_message5);

                        $('.img-input-label-retina').before('<div class="error-img-jquery">' + flibusbox_alert.error_message6 + '<span class="close">X</span></div>');

                } else {

                    $('input', el).val(attachment.url);
                    $('img', el).attr('src', attachment.url); 
                }

                //delete error message
                $('.section-custom-button .error-img-jquery .close').on( 'click', function(e) {
                    e.preventDefault();
                    $('.error-img-jquery').fadeOut(100);
                });
                
            })

            uploader.open();

        })

    })   

} ) ( jQuery );