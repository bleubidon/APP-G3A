function recup_historique_utilisateur(identifiant) {
    var xmlhttp = create_ajax_object();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // Suppression des anciennes données avant de charger les nouvelle
            document.getElementById("userdata_tests_psycho").innerHTML = "";

            var overlay = document.getElementById("userdata_tests_psycho");
            var historique = JSON.parse(xmlhttp.responseText);

            var nombre_entrees_historique = historique.length;
            if (nombre_entrees_historique == 0) {
                var p = document.createElement("p");
                p.setAttribute("style", "font-size: larger");
                p.innerHTML = "Cet utilisateur n'a passé aucun test";
                overlay.appendChild(p);
            } else {
                for (var i = 0; i < nombre_entrees_historique; i++) {
                    var entree_historique = historique[i];
                    var id = "chartContainer_" + i.toString();
                    var p = document.createElement("p");
                    p.innerHTML = entree_historique["nom_test"] + " (" + entree_historique["date_test"] + ")";
                    var div = document.createElement("div");
                    div.className = "chartContainer";
                    div.id = id;
                    overlay.appendChild(p);
                    overlay.appendChild(div);
                    render_chart(id, entree_historique["contenu_test"]);
                }
            }
        }
    };

    xmlhttp.open("POST", "../../models/recup_donnees_historique.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("identifiant=" + identifiant);
}

function display_userdata_overlay(identifiant) {
    recup_historique_utilisateur(identifiant);
    //log
    // TODO set html overlay to whatever we retrieved
    document.getElementById("overlay").style.display = "block";
}

function overlay_off() {
    document.getElementById("overlay").style.display = "none";
}
