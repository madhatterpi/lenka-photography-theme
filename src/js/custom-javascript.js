
jQuery(document).ready(function() {

  
// jQuery(".msnry_item a").append("<div id='overlay'></div>");

// jQuery("div#overlay").css({
//         'opacity' : 0,
//         'position' : 'absolute',
//         'top' : '0',
//         'right' : '0',
//         'bottom' : '0',
//         'left' : '0',
//         'z-index' : 1,
//         'background' : 'black',
//         'cursor' : 'pointer',
//         'transition' : '0.3s'
//       });

      // jQuery( ".msnry_item a" ).hover(function() {
      //   console.log("add class");
      //   jQuery(this).append("<div id='overlay-hover'></div>"); 
      // }, function() {
      //   jQuery("#overlay-hover").remove(); 
      // });

    //   jQuery( ".msnry_item a" ).hover(function() {
    //     console.log("add class");
    //     jQuery(this).toggleClass("overlay-hover");
    //   });

        // jQuery('.psgal #overlay').hover(function() {
        //   jQuery('#overlay').css('opacity', '0.4');
        // }, function() {
        //   jQuery('#overlay').css('opacity', '0');
        // });

       // Slick slider
       jQuery('.my-slider').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 1,
          nextArrow: '<i class="fa fa-chevron-right"></i>',
          prevArrow: '<i class="fa fa-chevron-left"></i>'
        });

        // Category homepage
        jQuery(window).resize(function()  
{  
    var ratio = 3.4/4; // height / width  
    jQuery('.home-cat__image a').height( jQuery('.home-cat__image a').width() * ratio );  
});  
  
// When the page loads, trigger a window resize event  
// so our element gets resized by default. Saves having   
// to duplicate the same code on load too.  
jQuery(window).load(function()  
{  
    jQuery(window).trigger('resize');  
});  


        //Mobile navigation menu
        jQuery('.hamburger').click(function() {
          jQuery(this).toggleClass('is-active');
            jQuery('.menu-block').fadeToggle("fast", "linear");

        });

        jQuery('.menu-item-has-children').click(function() {
          jQuery(this).find('.sub-menu').toggle('fast');
        });
    

});

// Back to top
jQuery(document).ready(function($){
  if ($(window).width() >= 0) {
  if ($('#back-to-top').length) {
    var scrollTrigger =600, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}
}

}); // back to top




  