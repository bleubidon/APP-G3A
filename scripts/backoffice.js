function modifier_statut_utilisateur(identifiant, nouveau_statut) {
    var xmlhttp = create_ajax_object();
    xmlhttp.open("POST", "../../models/admin/update_statut_utilisateur.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("identifiant=" + identifiant + "&nouveau_statut=" + nouveau_statut);
}

function supprimer_utilisateur(identifiant) {
    var confirmation = confirm("Voulez-vous vraiment supprimer l'utilisateur " + identifiant + " ?");
    if (!confirmation) {
        return;
    }
    var xmlhttp = create_ajax_object();
    xmlhttp.open("POST", "../../models/admin/supprimer_utilisateur.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("identifiant=" + identifiant);
    location.reload();
}
