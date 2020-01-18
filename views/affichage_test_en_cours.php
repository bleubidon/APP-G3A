<?php include "header.php" ?>

<?php
include "Mise_en_page.php";  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
?>
<head>
    <script>
        window.onload = function () {

            var dps = [];
            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Test en cours"
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
            var dataLength = 20;

            var updateChart = function (count) {

                count = count || 1;

                for (var j = 0; j < count; j++) {
                    yVal = yVal + Math.round(5 + Math.random() * (-5 - 5));
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
            setInterval(function () {
                updateChart()
            }, updateInterval);

        }
    </script>
</head>
<body>


<div id="chartContainer" style="height: 300px; width: 70%;display: block "></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


</body>
</html>
