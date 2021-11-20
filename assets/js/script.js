(function () {
    "use strict";
	
$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
	
	
	
	
	$('.counting').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  

});
	
	
	
	
    $("#sidebar_overlay").hide();
    if ($('[data-toggle="tooltip"]').length > 0) {
        $('[data-toggle="tooltip"]').tooltip();
    }
    if ($(".select").length > 0) {
        $(".select").select2({ minimumResultsForSearch: -1, width: "100%" });
    }
    if ($(".datetimepicker").length > 0) {
        $(".datetimepicker").datetimepicker({ format: "DD/MM/YYYY", icons: { up: "fa fa-angle-up", down: "fa fa-angle-down", next: "fa fa-angle-right", previous: "fa fa-angle-left" } });
    }
    $(window).on("load", function () {
        $("#loader").delay(100).fadeOut("slow");
        $("#loader-wrapper").delay(500).fadeOut("slow");
        $("body").delay(500).css({ overflow: "visible" });
    });
    $(document).on("click", "#open_navSidebar", function () {
        $("#offcanvas_menu").css("width", "250px");
        $("#sidebar_overlay").show();
        $(".inner-wrapper").css("overflow", "hidden");
    });
    $(document).on("click", "#close_navSidebar", function () {
        $("#offcanvas_menu").css("width", "0px");
        $("#sidebar_overlay").hide();
        $(".inner-wrapper").css("overflow", "scroll");
    });
    $(document).on("click", "#sidebar_overlay", function () {
        $("#offcanvas_menu").css("width", "0px");
        $("#sidebar_overlay").hide();
    });
    if ($(window).width() > 767) {
        if ($(".theiaStickySidebar").length > 0) {
            $(".theiaStickySidebar").theiaStickySidebar({ additionalMarginTop: 20 });
        }
    }
})();
