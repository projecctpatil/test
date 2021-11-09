$(function () {
    var ctx = document.getElementById("Chart1").getContext("2d");
    var lineChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May"],
            datasets: [
                { label: "Developer", data: [20, 10, 5, 5, 20], fill: false, borderColor: "#373651", backgroundColor: "#373651", borderWidth: 1 },
                { label: "Marketing", data: [2, 2, 3, 4, 1], fill: false, borderColor: "#E65A26", backgroundColor: "#E65A26", borderWidth: 1 },
                { label: "Marketing", data: [1, 3, 6, 8, 10], fill: false, borderColor: "#a1a1a1", backgroundColor: "#a1a1a1", borderWidth: 1 },
            ],
        },
        options: { responsive: true, legend: { display: false } },
    });
	
	var ctx = document.getElementById("Chart2").getContext("2d");
    var lineChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May"],
            datasets: [
                { label: "Developer", data: [20, 10, 5, 5, 20], fill: false, borderColor: "#373651", backgroundColor: "#373651", borderWidth: 1 },
                { label: "Marketing", data: [2, 2, 3, 4, 1], fill: false, borderColor: "#E65A26", backgroundColor: "#E65A26", borderWidth: 1 },
                { label: "Marketing", data: [1, 3, 6, 8, 10], fill: false, borderColor: "#a1a1a1", backgroundColor: "#a1a1a1", borderWidth: 1 },
            ],
        },
        options: { responsive: true, legend: { display: false } },
    });
	
	var ctx = document.getElementById("Chart3").getContext("2d");
    var lineChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May"],
            datasets: [
                { label: "Developer", data: [20, 10, 5, 5, 20], fill: false, borderColor: "#373651", backgroundColor: "#373651", borderWidth: 1 },
                { label: "Marketing", data: [2, 2, 3, 4, 1], fill: false, borderColor: "#E65A26", backgroundColor: "#E65A26", borderWidth: 1 },
                { label: "Marketing", data: [1, 3, 6, 8, 10], fill: false, borderColor: "#a1a1a1", backgroundColor: "#a1a1a1", borderWidth: 1 },
            ],
        },
        options: { responsive: true, legend: { display: false } },
    });
	
});


(function ($){

    $.fn.bekeyProgressbar = function(options){

        options = $.extend({
        	animate     : true,
          animateText : true
        }, options);

        var $this = $(this);
      
        var $progressBar = $this;
        var $progressCount = $progressBar.find('.ProgressBar-percentage--count');
        var $circle = $progressBar.find('.ProgressBar-circle');
        var percentageProgress = $progressBar.attr('data-progress');
        var percentageRemaining = (100 - percentageProgress);
        var percentageText = $progressCount.parent().attr('data-progress');
      
        //Calcule la circonférence du cercle
        var radius = $circle.attr('r');
        var diameter = radius * 2;
        var circumference = Math.round(Math.PI * diameter);

        //Calcule le pourcentage d'avancement
        var percentage =  circumference * percentageRemaining / 100;

        $circle.css({
          'stroke-dasharray' : circumference,
          'stroke-dashoffset' : percentage
        })
        
        //Animation de la barre de progression
        if(options.animate === true){
          $circle.css({
            'stroke-dashoffset' : circumference
          }).animate({
            'stroke-dashoffset' : percentage
          }, 3000 )
        }
        
        //Animation du texte (pourcentage)
        if(options.animateText == true){
 
          $({ Counter: 0 }).animate(
            { Counter: percentageText },
            { duration: 3000,
             step: function () {
               $progressCount.text( Math.ceil(this.Counter) + '%');
             }
            });

        }else{
          $progressCount.text( percentageText + '%');
        }
      
    };

})(jQuery);

$(document).ready(function(){
  
  $('.ProgressBar--animateNone').bekeyProgressbar({
    animate : false,
    animateText : false
  });
  
  $('.ProgressBar--animateCircle').bekeyProgressbar({
    animate : true,
    animateText : false
  });
  
  $('.ProgressBar--animateText').bekeyProgressbar({
    animate : false,
    animateText : true
  });
  
  $('.ProgressBar--animateAll').bekeyProgressbar();
  
})
