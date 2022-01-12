




$(function () {
    var ctx = document.getElementById("Chart1").getContext("2d");
    var lineChart = new Chart(ctx, {
        type: "bar",
          data: {
            labels: ["2020/02/17", "", "2020/02/23", "", "2020/02/29", ""],
            datasets: [
              {
                type: "bar",
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderColor: "rgba(54, 162, 235, 1)",
                borderWidth: 1,
                data: [60, 49, 72, 90, 100, 60]
              },
              {
                type: "line",
                data: [25, 13, 30, 35, 25, 40],
                lineTension: 0,
                fill: true 
              }
            ]
          },
          options: { responsive: true, legend: { display: false } },
        });
	
	var ctx = document.getElementById("Chart2").getContext("2d");
    var lineChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "June"],
            datasets: [
                { label: "Developer", data: [60, 49, 72, 90, 100, 60], fill: false, borderColor: "rgba(54, 162, 235, 1)", backgroundColor: [
                "#a2d6c4",
                "#36A2EB",
                "#3e8787",
                "#579aac",
                "#7dcfe8",
                "#b3dfe7",
                "#CDDC39"], borderWidth: 1 },
            ],
        },
        options: { responsive: true, legend: { display: false } },
    });

    var ctx = document.getElementById("Chart3").getContext("2d");
    var lineChart = new Chart(ctx, {
          type: "line",
          data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May"],
            datasets: [
                { label: "Developer", data: [20, 10, 5, 5, 20], fill: false, borderColor: "rgba(54, 162, 235, 1)", backgroundColor: [
                "#a2d6c4",
                "#36A2EB",
                "#3e8787",
                "#579aac",
                "#7dcfe8",
                "#b3dfe7",
                "#CDDC39"
            ], borderWidth: 0 },
            ],
        },
        options: { responsive: true, legend: { display: false } },
        });
	
	var ctx = document.getElementById("Chart4").getContext("2d");
    var lineChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May"],
            datasets: [
                { label: "Developer", data: [20, 10, 5, 5, 20], fill: false, borderColor: "transparent", backgroundColor: [
                "#a2d6c4",
                "#36A2EB",
                "#3e8787",
                "#579aac",
                "#7dcfe8",
                "#b3dfe7",
                "#CDDC39"
            ], borderWidth: 0 },
            ],
        },
        options: { responsive: true, legend: { display: false } },
    });

    
	
});



$(".circle_percent").each(function() {
    var $this = $(this),
		$dataV = $this.data("percent"),
		$dataDeg = $dataV * 3.6,
		$round = $this.find(".round_per");
	$round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");	
	$this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
	$this.prop('Counter', 0).animate({Counter: $dataV},
	{
		duration: 2000, 
		easing: 'swing', 
		step: function (now) {
            $this.find(".percent_text").text(Math.ceil(now)+"%");
        }
    });
	if($dataV >= 51){
		$round.css("transform", "rotate(" + 360 + "deg)");
		setTimeout(function(){
			$this.addClass("percent_more");
		},1000);
		setTimeout(function(){
			$round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
		},1000);
	} 
});