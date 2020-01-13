<?php include "header.php" ?>

<body>
<?php
include "Mise_en_page.php";  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
?>



<html>
<head>
    <script>
        window.onload = function () {

            var dps = []; // dataPoints
            var chart = new CanvasJS.Chart("chartContainer", {
                title :{
                    text: "Dynamic Data"
                },
                axisY: {
                    includeZero: false
                },
                data: [{
                    type: "line",
                    dataPoints: dps
                }]
            });

            var xVal = 0;
            var yVal = 100;
            var updateInterval = 1000;
            var dataLength = 50; // number of dataPoints visible at any point

            var updateChart = function (count) {

                count = count || 1;

                for (var j = 0; j < count; j++) {
                    yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
                    dps.push({
                        x: xVal,
                        y: yVal
                    });
                    xVal++;
                }

                if (dps.length > dataLength) {
                    dps.shift();
                }

                chart.render();
            };

            updateChart(dataLength);
            setInterval(function(){updateChart()}, updateInterval);

        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>

</body>
</html>






