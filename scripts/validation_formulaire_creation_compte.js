function validation_formulaire_creation_compte() {
    if (document.form1.Prenom.value == "") {
        // alert("vous n'avez pas saisi votre Prenom");
        document.form1.Prenom.value = "NON!";
    } else if (document.form1.Nom.value == "")
        alert("vous n'avez pas saisi votre Nom");
    form1.checkValidity()
}
