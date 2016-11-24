( function( $ ) {

$(document).ready(function($){ 
    var select = $('a[href$=".bmp"],a[href$=".gif"],a[href$=".jpg"],a[href$=".jpeg"],a[href$=".png"],a[href$=".BMP"],a[href$=".GIF"],a[href$=".JPG"],a[href$=".JPEG"],a[href$=".PNG"]'); // select image files
    select.attr('data-fancybox-group', 'gallery'); //data-fancybox-group is used instead of rel tag in html5
    select.attr('class', 'fancybox'); // ads class tag to image
    select.fancybox();  
 
$(".fancybox").fancybox({
     beforeShow: function () {
         this.title = $(this.element).find("img"); // shows alt tag as image title
    },
        padding:0, //  settings can be removed to use defaults  //
        margin  : 20,
        wrapCSS    : '',
        openEffect : flibusbox_op.openEffect,
        openSpeed  : flibusbox_op.openSpeed,
                arrows    : true,
            closeEffect : flibusbox_op.closeEffect,
                closeSpeed  : 250,
                closeBtn  : true,
            closeClick : false,
                nextClick  : false,
        prevEffect : flibusbox_op.prevEffect,
        prevSpeed  : 250,
        nextEffect : 'elastic',
        nextSpeed  : 250,
        pixelRatio: 1, // Set to 2 for retina display support
            autoSize   : true,
            autoHeight : false,
            autoWidth  : false,
            autoResize  : true,
            fitToView   : true,
        aspectRatio : false,
        topRatio    : 0.5,
        leftRatio   : 0.5,
        scrolling : 'auto', // 'auto', 'yes' or 'no'
            mouseWheel : true,
        autoPlay   : false,
            playSpeed  : 3000,
        preload    : 3,
            modal      : false,
        loop       : true,
           helpers : {
                title : {
                 type : 'inside', // outside
                },

                overlay : {
                    
                    css : { 
                        'background' : flibusbox_op.background,
                    }
                }
            }
    });                         
 
$(".fancybox-media")
    .fancybox({
        openEffect : 'none',
        closeEffect : 'none',
        prevEffect : 'none',
        nextEffect : 'none',
            arrows : false,
        helpers : {
            media : {},
            buttons : {}
        }
    });
});
	
} )( jQuery );