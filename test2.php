<?php
 
$dataPoints = array( 
	array("y" => 51,"label" => "Herbert" ),
	array("y" => 1,"label" => "Daniel" ),
	array("y" => 4,"label" => "Veronica" ),
	array("y" => 3,"label" => "Max" ),
	array("y" => 8,"label" => "Luise" )
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Verzehrte Döner im Januar 2023"
	},
	axisY: {
		title: "Auswertung: Herbert war besonders hungrig.", 
		includeZero: true,
        viewportMinimum: 0,
        viewportMaximum: 100,
        interval: 20
	},
    
    
	data: [{
		type: "bar",
		
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 60vh; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>            