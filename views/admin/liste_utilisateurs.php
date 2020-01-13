<?php include "../../views/header.php" ?>

<body>
<?php
include "../../views/Mise_en_page.php";  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
$table_color1 = "#FF0000";
$table_color2 = "#00FF00";
?>

<div id="section_centrale">
    <h1>Backoffice</h1>
    <h2>Vous pouvez:</h2>
    <ul>
        <li>- Filtrer les utilisateurs par une recherche multi-critères</li>
        <li>- Modifier le statut d'un utilisateur</li>
        <li>- Supprimer un utilisateur</li>
        <li>- Ajouter un utilisateur</li>
        <li>- Bannir un utilisateur en lui donnant le statut "banni"</li>
    </ul>
    <br>

    <table id="table_utilisateurs">
        <tr>
            <th class="color1">Identifiant</th>
            <th class="color2">Statut</th>
            <th class="color1">Nom</th>
            <th class="color2">Prenom</th>
            <th class="color1">Date de naissance</th>
            <th class="color2">Téléphone</th>
            <th class="color1">Adresse email</th>
            <th class="color2">Emploi</th>
            <th class="color1">Genre</th>
            <th class="color2">Poids</th>
            <th class="color1">Taille</th>
            <th class="color2">Groupe sanguin</th>
            <th class="color1">Sommeil moyen</th>
            <th class="color2">Pathologie</th>
            <th class="color1">Nouveau mot de passe</th>
        </tr>

        <tr>
            <form action="" method="post">
                <td class="color1"><input type="text" placeholder="ajouter" name="identifiant"></td>
                <td class="color2"><input type="text" placeholder="ajouter" name="statut"></td>
                <td class="color1"><input type="text" placeholder="ajouter" name="nom"></td>
                <td class="color2"><input type="text" placeholder="ajouter" name="prenom"></td>
                <td class="color1"><input type="text" placeholder="ajouter" name="date_de_naissance"></td>
                <td class="color2"><input type="text" placeholder="ajouter" name="telephone"></td>
                <td class="color1"><input type="text" placeholder="ajouter" name="email"></td>
                <td class="color2"><input type="text" placeholder="ajouter" name="emploi"></td>
                <td class="color1"><input type="text" placeholder="ajouter" name="genre"></td>
                <td class="color2"><input type="text" placeholder="ajouter" name="poids"></td>
                <td class="color1"><input type="text" placeholder="ajouter" name="taille"></td>
                <td class="color2"><input type="text" placeholder="ajouter" name="groupe_sanguin"></td>
                <td class="color1"><input type="text" placeholder="ajouter" name="sommeil_moyen"></td>
                <td class="color2"><input type="text" placeholder="ajouter" name="pathologie"></td>
                <td class="color2"><input type="text" placeholder="ajouter" name="mot_de_passe"></td>
                <td><input type="submit" value="Ajouter" class="button_like"/></td>
            </form>
        </tr>

        <tr>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_identifiant"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_statut"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_nom"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_prenom"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_date_de_naissance"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_telephone"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_email"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_emploi"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_genre"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_poids"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_taille"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_groupe_sanguin"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_sommeil_moyen"
                                      onblur="lister_utilisateurs()"></td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_pathologie"
                                      onblur="lister_utilisateurs()"></td>
        </tr>
    </table>
</div>

<script>lister_utilisateurs()</script>
</body>
</html>
