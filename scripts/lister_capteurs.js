function lister_capteurs() {
    var xmlhttp = create_ajax_object();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var liste_capteurs = JSON.parse(xmlhttp.responseText);
            var capteur;
            var ligne_table;

            var suite_table_nom_classe = "table_dynamique";
            var table_capteurs = document.getElementById("table_capteurs");

            // Suppression des anciennes données avant de charger les nouvelle
            var anciennes_donnees = document.getElementsByClassName(suite_table_nom_classe);
            while (anciennes_donnees[0]) {
                anciennes_donnees[0].parentNode.removeChild(anciennes_donnees[0]);
            }

            var innerHTML_string;
            var liste_statuts = ["1", "0"];
            var statuts_alternatifs = [];
            for (capteur in liste_capteurs) {
                // Génération des status alternatifs pour l'utilisateur
                statuts_alternatifs = [];
                for (var i = 0; i < liste_statuts.length; i++) {
                    if (liste_capteurs[capteur]["statut_capteur"] != liste_statuts[i]) {
                        statuts_alternatifs.push(liste_statuts[i]);
                    }
                }

                ligne_table = document.createElement("tr");
                ligne_table.className = suite_table_nom_classe;
                // Nom capteur
                innerHTML_string =
                    "<td class='color1'>" + liste_capteurs[capteur]["nom_capteur"] + "</td>";

                // Statut capteur
                innerHTML_string +=
                    "<td class='color2'><select id='choix_statut_" + liste_capteurs[capteur]["nom_capteur"] + "' onchange='modifier_statut_capteur(" +
                    "\"" + liste_capteurs[capteur]["nom_capteur"] + "\", " +
                    "document.getElementById(\"choix_statut_" + liste_capteurs[capteur]["nom_capteur"] + "\").value)" +
                    "'>" +
                    "<option value='" + liste_capteurs[capteur]["statut_capteur"] + "'>" + liste_capteurs[capteur]["statut_capteur"] + "</option>";

                for (var i = 0; i < statuts_alternatifs.length; i++) {
                    innerHTML_string += "<option ";
                    innerHTML_string += "value=" + statuts_alternatifs[i] + ">" + statuts_alternatifs[i] + "</option>";
                }
                innerHTML_string += "</select></td>";

                // Bouton de suppression
                innerHTML_string += "<td><button class='button_like' type='button' onclick='supprimer_capteur(\"" + liste_capteurs[capteur]["nom_capteur"] + "\")'>Supprimer</button></td>";

                ligne_table.innerHTML = innerHTML_string;
                table_capteurs.appendChild(ligne_table);
            }
        }
    };

    xmlhttp.open("POST", "../../views/admin/generer_table_capteurs.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}

function modifier_statut_capteur(nom_capteur, nouveau_statut) {
    var xmlhttp = create_ajax_object();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == "modification_statut_refusee") {
                alert("Opération refusée: il doit toujours y avoir au moins un administrateur");
                location.reload();
            }
        }
    };

    xmlhttp.open("POST", "../../models/admin/update_statut_capteur.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("nom_capteur=" + nom_capteur + "&nouveau_statut=" + nouveau_statut);
}

function supprimer_capteur(nom_capteur) {
    var confirmation = confirm("Voulez-vous vraiment supprimer le capteur " + nom_capteur + " ?");
    if (!confirmation) {
        return;
    }
    var xmlhttp = create_ajax_object();
    xmlhttp.open("POST", "../../models/admin/supprimer_capteur.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("nom_capteur=" + nom_capteur);
    location.reload();
}
