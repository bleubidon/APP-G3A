function lister_utilisateurs(administrateur = false) {
    var xmlhttp = create_ajax_object();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var liste_utilisateurs = JSON.parse(xmlhttp.responseText);
            var utilisateur;
            var ligne_table;

            var suite_table_nom_classe = "table_dynamique";
            var table_utilisateurs = document.getElementById("table_utilisateurs");

            // Suppression des anciennes données avant de charger les nouvelle
            var anciennes_donnees = document.getElementsByClassName(suite_table_nom_classe);
            while (anciennes_donnees[0]) {
                anciennes_donnees[0].parentNode.removeChild(anciennes_donnees[0]);
            }

            var innerHTML_string;
            var liste_statuts = ["utilisateur", "administrateur", "gestionnaire", "banni"];
            var statuts_alternatifs = [];
            for (utilisateur in liste_utilisateurs) {
                // Génération des status alternatifs pour l'utilisateur
                statuts_alternatifs = [];
                for (var i = 0; i < liste_statuts.length; i++) {
                    if (liste_utilisateurs[utilisateur]["statut"] != liste_statuts[i]) {
                        statuts_alternatifs.push(liste_statuts[i]);
                    }
                }

                ligne_table = document.createElement("tr");
                ligne_table.className = suite_table_nom_classe;
                if (administrateur) {
                    innerHTML_string =
                        "<td class='color1'>" + liste_utilisateurs[utilisateur]["identifiant"] + "</td>";
                } else {
                    innerHTML_string =
                        "<td class='color1' style='color: blue; cursor: pointer' onclick='display_userdata_overlay(\"" + liste_utilisateurs[utilisateur]["identifiant"] + "\")'>" + liste_utilisateurs[utilisateur]["identifiant"] + "</td>";
                }

                if (administrateur) {
                    innerHTML_string +=
                        "<td class='color2'><select id='choix_statut_" + liste_utilisateurs[utilisateur]["identifiant"] + "' onchange='modifier_statut_utilisateur(" +
                        "\"" + liste_utilisateurs[utilisateur]["identifiant"] + "\", " +
                        "document.getElementById(\"choix_statut_" + liste_utilisateurs[utilisateur]["identifiant"] + "\").value)" +
                        "'>" +
                        "<option value='" + liste_utilisateurs[utilisateur]["statut"] + "'>" + liste_utilisateurs[utilisateur]["statut"] + "</option>";

                    for (var i = 0; i < statuts_alternatifs.length; i++) {
                        innerHTML_string += "<option ";
                        if (statuts_alternatifs[i] == "banni") innerHTML_string += "style=\"background-color:#FF5733\" ";
                        innerHTML_string += "value=" + statuts_alternatifs[i] + ">" + statuts_alternatifs[i] + "</option>";
                    }
                    innerHTML_string += "</select></td>";
                } else {
                    innerHTML_string += "<td class='color2'>" + liste_utilisateurs[utilisateur]["statut"] + "</td>"
                }

                innerHTML_string +=
                    "<td class='color1'>" + liste_utilisateurs[utilisateur]["nom"] + "</td>" +
                    "<td class='color2'>" + liste_utilisateurs[utilisateur]["prenom"] + "</td>" +
                    "<td class='color1'>" + liste_utilisateurs[utilisateur]["date_de_naissance"] + "</td>" +
                    "<td class='color2'>" + liste_utilisateurs[utilisateur]["telephone"] + "</td>" +
                    "<td class='color1'><a style='color: blue' href='mailto:" + liste_utilisateurs[utilisateur]["email"] + "'>" + liste_utilisateurs[utilisateur]["email"] + "</a></td>" +
                    "<td class='color2'>" + liste_utilisateurs[utilisateur]["type_emploi"] + "</td>" +
                    "<td class='color1'>" + liste_utilisateurs[utilisateur]["genre"] + "</td>" +
                    "<td class='color2'>" + liste_utilisateurs[utilisateur]["poids"] + "</td>" +
                    "<td class='color1'>" + liste_utilisateurs[utilisateur]["taille"] + "</td>" +
                    "<td class='color2'>" + liste_utilisateurs[utilisateur]["groupe_sanguin"] + "</td>" +
                    "<td class='color1'>" + liste_utilisateurs[utilisateur]["sommeil_moyen"] + "</td>" +
                    "<td class='color2'>" + liste_utilisateurs[utilisateur]["pathologie"] + "</td>";
                if (administrateur) {
                    innerHTML_string += "<td><button class='button_like' type='button' onclick='supprimer_utilisateur(\"" + liste_utilisateurs[utilisateur]["identifiant"] + "\")'>Supprimer</button></td>";
                }

                ligne_table.innerHTML = innerHTML_string;
                table_utilisateurs.appendChild(ligne_table);
            }
        }
    };

    // Construction de la requête
    var identifiant = document.getElementById("filtre_identifiant").value;
    var statut = document.getElementById("filtre_statut").value;
    var nom = document.getElementById("filtre_nom").value;
    var prenom = document.getElementById("filtre_prenom").value;
    var date_de_naissance = document.getElementById("filtre_date_de_naissance").value;
    var telephone = document.getElementById("filtre_telephone").value;
    var email = document.getElementById("filtre_email").value;
    var emploi = document.getElementById("filtre_emploi").value;
    var genre = document.getElementById("filtre_genre").value;
    var poids = document.getElementById("filtre_poids").value;
    var taille = document.getElementById("filtre_taille").value;
    var groupe_sanguin = document.getElementById("filtre_groupe_sanguin").value;
    var sommeil_moyen = document.getElementById("filtre_sommeil_moyen").value;
    var pathologie = document.getElementById("filtre_pathologie").value;

    xmlhttp.open("POST", "../../views/admin_et_gestionnaire/generer_table_utilisateurs.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("identifiant=" + identifiant + "&statut=" + statut + "&nom=" + nom + "&prenom="
        + prenom + "&date_de_naissance=" + date_de_naissance + "&telephone=" + telephone + "&email=" + email +
        "&emploi=" + emploi + "&genre=" + genre + "&poids=" + poids + "&taille=" + taille + "&groupe_sanguin=" + groupe_sanguin
        + "&sommeil_moyen=" + sommeil_moyen + "&pathologie=" + pathologie);
}
