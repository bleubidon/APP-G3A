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
        }],
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    var xVal = 0;
    var yVal = 100;
    var updateInterval = 1000;
    var dataLength = 20;
    var testDuration = 10000;  // On imagine que le test dure 10 secondes
    var goon = true;

    var date_debut_test = new Date();
    var date_test_enreg = date_debut_test.getDate() + "-" + (date_debut_test.getMonth() + 1) + "-" + date_debut_test.getFullYear() + ", " + date_debut_test.getHours() + ":" + date_debut_test.getMinutes() + ":" + date_debut_test.getSeconds();
    var startTime = Date.now();  // Pour la simulation d'un test

    var updateChart = function (count) {
        if (Date.now() - startTime < testDuration) {
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
        } else {
            if (goon) {
                goon = false;
                // Enregistrement des points de mesure associés à l'utilisateur dans la BDD
                var xmlhttp = create_ajax_object();
                xmlhttp.open("POST", "../../models/gestionnaire/insertion_donnees_test.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("identifiant=" + document.getElementById("identifiant").innerHTML + "&nom_test=" + document.getElementById("nom_test").innerHTML + "&donnees_test="
                    + JSON.stringify(dps) + "&date_test=" + date_test_enreg);
            }

            document.getElementById("test_fini").innerHTML = "Test fini !";
        }
    };

    updateChart(dataLength);
    setInterval(function () {
        updateChart()
    }, updateInterval);
};
