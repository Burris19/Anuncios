(function($) {
"use strict";

/* ==============================================
ACCORDION -->
=============================================== */

    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('fa-angle-down fa-angle-right');
    }
    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    $('#accordion').on('shown.bs.collapse', toggleChevron);

/* ---------------------------------------------
WINDOWS HEIGHT JS -->
 --------------------------------------------- */

    $(".js-height-full").height($(window).height());
        $(".js-height-parent").each(function(){
        $(this).height($(this).parent().first().height());
    });

/* ==============================================
FUN -->
=============================================== */

    function count($this){
        var current = parseInt($this.html(), 10);
        current = current + 10;
        $this.html(++current);
        if(current > $this.data('count')){
        $this.html($this.data('count'));
        } 
        else {    
        setTimeout(function(){count($this)}, 10);
        }
        }        
        $(".stat-count").each(function() {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('0');
        count($(this));
    });

/* ==============================================
ANIMATION -->
=============================================== */

    new WOW({
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       false,       // default
      live:         true        // default
    }).init();

/* ==============================================
PROGRESS -->
=============================================== */

	$('.progress .progress-bar').progressbar({transition_delay: 800});

/* ==============================================
LIGHTBOX -->
=============================================== */

	jQuery('a[data-gal]').each(function() {
        jQuery(this).attr('rel', jQuery(this).data('gal')); });     
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:true,overlay_gallery: true,social_tools:false,deeplinking:false});

})(jQuery);