// Affichage dynamique du nom de la photo de profil choisie par l'utilisateur du site
function fichierSelectionne() {
    var a = document.getElementById('PhotoProfilId');
    if (a.value == "") {
        PhotoProfilLabel.innerHTML = "Choose file";
    } else {
        var theSplit = a.value.split('\\');
        PhotoProfilLabel.innerHTML = theSplit[theSplit.length - 1];
    }
}

function placeHolder(nom_photo_profil) {
    PhotoProfilLabel.innerHTML = nom_photo_profil;
}
