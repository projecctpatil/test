




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