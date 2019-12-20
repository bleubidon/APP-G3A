// Fonctions et variables générales
var messageErreur;
var checkRadio;
var field;

var identifiantDisponible_callback = function (field, mode) {
    returned_data = this.responseText;
    var messageErreur;
    if (returned_data == 1) messageErreur = "none";
    else messageErreur = "Identifiant indisponible";

    if (mode == "instant") handleMessageErreur(messageErreur, field);
    else if (mode == "submit") {
        if (!handleMessageErreur(messageErreur, field)) formOk = false;
    }
};

function identifiantDisponible(callback, field, mode) {
    if (window.XMLHttpRequest) {
        var xmlhttp = new XMLHttpRequest();
    } else {
        if (window.ActiveXObject)
            try {
                var xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    return NULL;
                }
            }
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) callback.apply(xmlhttp, [field, mode]);
    }
    xmlhttp.open("POST", "../models/verif_disponibilite_identifiant.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("identifiant=" + document.getElementById("identifiant").value + "&verbose");
}

function handleMessageErreur(messageErreur, field) {
    if (messageErreur != "none") {
        field.setAttribute("aria-invalid", "true");
        document.getElementById(field.getAttribute("name") + "_erreur").innerHTML = messageErreur;
        return false;
    } else {
        field.setAttribute("aria-invalid", "false");
        document.getElementById(field.getAttribute("name") + "_erreur").innerHTML = "";
        return true;
    }
}

function testUnChamp(field) {
    // Définition du message d'erreur. Dépend du type de champ
    if (field.getAttribute("name") != "emplois" && field.getAttribute("name") != "genre") {
        if (field.getAttribute("required") && !field.value) messageErreur = "Ce champ est obligatoire";
        else if (field.getAttribute("pattern") &&
            field && !new RegExp(field.getAttribute("pattern")).test(field.value)) messageErreur = "Veuillez respecter le format demandé";
        else if (field.getAttribute("name") == "validePassword" && !confirmationMdpOk()) {
            messageErreur = "La confirmation du mot de passe ne correspond pas au mot de passe";
        } else messageErreur = "none";
        // Cas particulier pour l'identifiant qui nécessite éventuellement une requête au serveur
        if (field.getAttribute("name") == "identifiant" && messageErreur == "none") {
            identifiantDisponible(identifiantDisponible_callback, field, "submit");
        }
    } else if (field.getAttribute("name") == "emplois") {
        checkRadio = document.querySelector("input[name='emplois']:checked");
        messageErreur = (checkRadio == null) ? "Ce champ est obligatoire" : "none";
    } else if (field.getAttribute("name") == "genre") {
        checkRadio = document.querySelector("input[name='genre']:checked");
        messageErreur = (checkRadio == null) ? "Ce champ est obligatoire" : "none";
    }
}

// Validation du formulaire en temps réel
function addEvent(node, type, callback) {
    if (node.addEventListener) {
        node.addEventListener(
            type,
            function (e) {
                callback(e, e.target);
            },
            false
        );
    } else if (node.attachEvent) {
        node.attachEvent("on" + type, function (e) {
            callback(e, e.srcElement); // TODO fix deprecated
        });
    }
}

function confirmationMdpOk() {
    return document.getElementById("password").value === document.getElementById("validePassword").value;
}

function shouldBeValidated(field) {
    return (
        !(field.getAttribute("readonly") || field.readonly) &&
        !(field.getAttribute("disabled") || field.disabled) &&
        (field.getAttribute("pattern") || field.getAttribute("required") ||
            field.getAttribute("name") == "emplois" || field.getAttribute("name") == "genre")
    );
}

function instantValidation(field) {
    testUnChamp(field);
    handleMessageErreur(messageErreur, field);
}

var fields = document.getElementsByTagName("input");  // On prend en compte toutes les balises "input"
for (var a = fields.length, i = 0; i < a; i++) {
    field = fields[i];
    if (field.getAttribute("type") != "submit" &&
        field.getAttribute("name") != "PhotoProfil" &&
        shouldBeValidated(field)) {  // S'il faut vérifier la validité du champ

        addEvent(field, "change", function (e, target) {
            instantValidation(target);
        });
    }
}

// Validation du formulaire au moment du submit
function validationFormulaire() {
    var formOk = true;
    for (var a = fields.length, i = 0; i < a; i++) {
        field = fields[i];

        if (field.getAttribute("type") != "submit" &&
            field.getAttribute("name") != "PhotoProfil" &&
            shouldBeValidated(field)) {  // S'il faut vérifier la validité du champ

            console.log(field.getAttribute("name"));
            testUnChamp(field);
            if (!handleMessageErreur(messageErreur, field)) formOk = false;
        }
    }
    return formOk;
}
