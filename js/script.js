;(function($) {
	'use strict';

 	$(document).ready(function () {
        $(".initial").hover(function () {
            $(".name").addClass("show");
            $(".initial").addClass("shadow");
        });
        $(".initial").mouseleave(function () {
            $(".name").removeClass("show");
            $(".initial").removeClass("shadow");
        });
    });

    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 2000);
            return false;

          }
        }
      });
    });
	
})(window.jQuery);
