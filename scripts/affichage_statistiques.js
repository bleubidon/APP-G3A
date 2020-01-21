window.onload = function () {
    var xmlhttp = create_ajax_object();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var tableau_statistiques = JSON.parse(xmlhttp.responseText);
            // console.log(tableau_statistiques);
            var cles_donnees_tests = Object.keys(tableau_statistiques);

            // Nombre de fois que chaque type de test a été passé
            var dps_frequences_tests = [];
            for (var i = 0; i < cles_donnees_tests.length; i++) {
                dps_frequences_tests.push({
                    y: tableau_statistiques[cles_donnees_tests[i]].length,
                    label: cles_donnees_tests[i]
                });
            }
            var chart = new CanvasJS.Chart("chartContainer1", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Fréquence des tests"
                },
                axisY: {
                    title: "Nombre de passages"
                },
                data: [{
                    type: "column",
                    showInLegend: true,
                    legendMarkerColor: "grey",
                    legendText: "fréquence de passage de chaque test psychotechnique",
                    dataPoints: dps_frequences_tests
                }]
            });
            chart.render();

            // Données statistques pour chaque type de test
            var dps_stats_tests = [];
            var cle_donnees_type_test;
            var y_list = [];
            var contenu_test;
            for (var i = 0; i < cles_donnees_tests.length; i++) {
                y_list = [];
                cle_donnees_type_test = cles_donnees_tests[i];
                // Récupération de la liste des valeurs y des mesures issues des tests
                for (var j = 0; j < tableau_statistiques[cle_donnees_type_test].length; j++) {
                    contenu_test = JSON.parse(tableau_statistiques[cle_donnees_type_test][j]);
                    for (var k = 0; k < contenu_test.length; k++) {
                        y_list.push(contenu_test[k]["y"]);
                    }
                }
                dps_stats_tests.push({
                    y: [arr.min(y_list), arr.quartile25(y_list), arr.quartile75(y_list), arr.max(y_list), arr.median(y_list)],
                    label: cle_donnees_type_test
                });
            }

            var chart = new CanvasJS.Chart("chartContainer2", {
                animationEnabled: true,
                title: {
                    text: "Statistiques sur les données des tests"
                },
                axisY: {
                    title: "Données psychotechniques"
                },
                data: [{
                    type: "boxAndWhisker",
                    dataPoints: dps_stats_tests
                }]
            });
            chart.render();
        }
    };

    xmlhttp.open("POST", "../../controllers/gestionnaire/generation_tableau_pour_statistiques.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
};
