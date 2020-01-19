function lister_emplois_quels_tests() {
    var xmlhttp = create_ajax_object();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var liste_emplois_quels_tests = JSON.parse(xmlhttp.responseText)[0];
            var liste_tests_psycho = JSON.parse(xmlhttp.responseText)[1];

            var emploi_quels_tests;
            var ligne_table;

            var suite_table_nom_classe = "table_dynamique";
            var table_emplois_quels_tests = document.getElementById("table_emplois_quels_tests");

            // Suppression des anciennes données avant de charger les nouvelle
            var anciennes_donnees = document.getElementsByClassName(suite_table_nom_classe);
            while (anciennes_donnees[0]) {
                anciennes_donnees[0].parentNode.removeChild(anciennes_donnees[0]);
            }

            var innerHTML_string;
            for (emploi_quels_tests in liste_emplois_quels_tests) {
                ligne_table = document.createElement("tr");
                ligne_table.className = suite_table_nom_classe;
                // Nom emploi
                innerHTML_string =
                    "<td class='color1'>" + liste_emplois_quels_tests[emploi_quels_tests]["nom_emploi"] + "</td>";

                // Tests psycho associés à l'emploi
                // On détermine quels tests psycho sont associés à cet emploi
                var tests_psycho = liste_emplois_quels_tests[emploi_quels_tests]["id_tests_psycho"].split(";");
                innerHTML_string += "<td class='color2'>";
                for (test_psycho in liste_tests_psycho) {
                    var nameString = liste_emplois_quels_tests[emploi_quels_tests]["nom_emploi"].replace(/ /g, "_") + "_" + liste_tests_psycho[test_psycho]["nom_test_psycho"].replace(/ /g, "_");
                    innerHTML_string += "<label class='checkbox-label'>";
                    innerHTML_string += "<input type='checkbox' ";
                    innerHTML_string += "id='" + nameString + "_checkbox'" +
                        "name='" + nameString + "'";
                    if (tests_psycho.includes(liste_tests_psycho[test_psycho]["id_test_psycho"])) {
                        innerHTML_string += " checked";
                    }

                    innerHTML_string += " onchange='modifier_emplois_quels_tests(\"" +
                        liste_emplois_quels_tests[emploi_quels_tests]["nom_emploi"] + "\", \"" +
                        liste_tests_psycho[test_psycho]["id_test_psycho"] + "\", " +
                        'document.getElementById("' + nameString + "_checkbox" + '").checked' +
                        ")'";

                    innerHTML_string += ">" + liste_tests_psycho[test_psycho]["nom_test_psycho"] + "</label><br>";
                }
                innerHTML_string += "</td>";

                ligne_table.innerHTML = innerHTML_string;
                table_emplois_quels_tests.appendChild(ligne_table);
            }
        }
    };

    xmlhttp.open("POST", "../../views/gestionnaire/generer_table_emplois_quels_tests.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}

function modifier_emplois_quels_tests(nom_emploi, id_test_psycho, nouveau_statut) {
    var xmlhttp = create_ajax_object();

    xmlhttp.open("POST", "../../models/gestionnaire/update_emplois_quels_tests.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("nom_emploi=" + nom_emploi + "&id_test_psycho=" + id_test_psycho + "&nouveau_statut=" + nouveau_statut);
}
