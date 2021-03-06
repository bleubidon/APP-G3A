function lister_tests_psycho() {
    var xmlhttp = create_ajax_object();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var liste_tests_psycho = JSON.parse(xmlhttp.responseText)[0];
            var liste_capteurs = JSON.parse(xmlhttp.responseText)[1];

            var test_psycho;
            var ligne_table;

            var suite_table_nom_classe = "table_dynamique";
            var table_tests_psycho = document.getElementById("table_tests_psycho");

            // Suppression des anciennes données avant de charger les nouvelle
            var anciennes_donnees = document.getElementsByClassName(suite_table_nom_classe);
            while (anciennes_donnees[0]) {
                anciennes_donnees[0].parentNode.removeChild(anciennes_donnees[0]);
            }

            var innerHTML_string;
            for (test_psycho in liste_tests_psycho) {
                ligne_table = document.createElement("tr");
                ligne_table.className = suite_table_nom_classe;
                // Nom test psycho
                innerHTML_string =
                    "<td class='color1'>" + liste_tests_psycho[test_psycho]["nom_test_psycho"] + "</td>";

                // Capteurs associés au test psycho
                // On détermine quels capteurs sont associés à ce test
                var capteurs = liste_tests_psycho[test_psycho]["id_capteurs"].split(";");
                innerHTML_string += "<td class='color2'>";
                for (capteur in liste_capteurs) {
                    var nameString = liste_tests_psycho[test_psycho]["nom_test_psycho"].replace(/ /g, "_") + "_" + liste_capteurs[capteur]["nom_capteur"].replace(/ /g, "_");
                    innerHTML_string += "<label class='checkbox-label'>";
                    innerHTML_string += "<input type='checkbox' ";
                    if (liste_capteurs[capteur]["statut_capteur"] == "0" && !capteurs.includes(liste_capteurs[capteur]["id_capteur"])) {
                        innerHTML_string += " disabled=\"disabled\" ";
                    }
                    innerHTML_string += "id='" + nameString + "_checkbox'" +
                        "name='" + nameString + "'";
                    if (capteurs.includes(liste_capteurs[capteur]["id_capteur"])) {
                        innerHTML_string += " checked";
                    }

                    innerHTML_string += " onchange='modifier_capteurs_associes(\"" +
                        liste_tests_psycho[test_psycho]["nom_test_psycho"] + "\", \"" +
                        liste_capteurs[capteur]["id_capteur"] + "\", " +
                        'document.getElementById("' + nameString + "_checkbox" + '").checked' +
                        ")'";

                    innerHTML_string += ">" + liste_capteurs[capteur]["nom_capteur"] + "</label><br>";
                }
                innerHTML_string += "</td>";

                // Bouton de suppression
                innerHTML_string += "<td><button class='button_like' type='button' onclick='supprimer_test_psycho(\"" + liste_tests_psycho[test_psycho]["nom_test_psycho"] + "\")'>Supprimer</button></td>";

                ligne_table.innerHTML = innerHTML_string;
                table_tests_psycho.appendChild(ligne_table);
            }
        }
    };

    xmlhttp.open("POST", "../../views/gestionnaire/generer_table_tests_psycho.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}

function modifier_capteurs_associes(nom_test, id_capteur, nouveau_statut) {
    var xmlhttp = create_ajax_object();

    xmlhttp.open("POST", "../../models/gestionnaire/update_capteur_test_psycho.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("nom_test=" + nom_test + "&id_capteur=" + id_capteur + "&nouveau_statut=" + nouveau_statut);
}

function supprimer_test_psycho(nom_test_psycho) {
    var confirmation = confirm("Voulez-vous vraiment supprimer le test psychotechnique " + nom_test_psycho + " ?");
    if (!confirmation) {
        return;
    }
    var xmlhttp = create_ajax_object();
    xmlhttp.open("POST", "../../models/gestionnaire/supprimer_test_psycho.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("nom_test_psycho=" + nom_test_psycho);
    location.reload();
}
