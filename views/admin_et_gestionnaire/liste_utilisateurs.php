<body>
<?php if ($_SESSION['statut_utilisateur_site'] == "gestionnaire") { ?>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php } ?>
<?php
include "../../views/Mise_en_page.php";  // Pour utiliser Mise_en_page.php, inclure la stylesheet "Stylesheet.css" depuis le json
include "../../views/tableau_colore.php";

$parametre_js_statut_utilisateur = $_SESSION['statut_utilisateur_site'] == "administrateur" ? true : false;
?>

<div id="section_centrale">
    <!--    Overlay données psycho utilisateur-->
    <div id="overlay" onclick="overlay_off()">
        <div id="userdata_tests_psycho"></div>
    </div>

    <?php if ($_SESSION['statut_utilisateur_site'] == "administrateur") { ?>
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
    <?php } else if ($_SESSION['statut_utilisateur_site'] == "gestionnaire") { ?>
        <h1>Moteur de recherche</h1>
        <h2>Vous pouvez filtrer les utilisateurs par une recherche multi-critères</h2>
        <h3>Cliquer sur un identifiant pour afficher un récapitulatif des données psychotechniques de cet
            utilisateur</h3>
        <br>
    <?php } ?>
    <table id="table_utilisateurs">
        <tr>
            <th class="color1">Identifiant</th>
            <th class="color2">Statut</th>
            <th class="color1">Nom</th>
            <th class="color2">Prénom</th>
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
            <?php if ($_SESSION['statut_utilisateur_site'] == "administrateur") { ?>
                <th class="color1">Nouveau mot de passe</th>
            <?php } ?>
        </tr>

        <?php if ($_SESSION['statut_utilisateur_site'] == "administrateur") { ?>
            <tr>
                <form action="" method="post" id="form_ajout_utilisateur">
                    <td class="color1"><input type="text" placeholder="ajouter" name="identifiant"></td>
                    <td class="color2">
                        <select name="statut" form="form_ajout_utilisateur">
                            <option value="administrateur">administrateur</option>
                            <option value="utilisateur">utilisateur</option>
                            <option value="gestionnaire">gestionnaire</option>
                            <option style="background-color:#FF5733" value="banni">banni</option>
                        </select>
                    </td>
                    <td class="color1"><input type="text" placeholder="ajouter" name="nom"></td>
                    <td class="color2"><input type="text" placeholder="ajouter" name="prenom"></td>
                    <td class="color1"><input type="text" placeholder="ajouter" name="date_de_naissance"></td>
                    <td class="color2"><input type="text" placeholder="ajouter" name="telephone"></td>
                    <td class="color1"><input type="email" placeholder="ajouter" name="email"></td>
                    <td class="color2"><input type="text" placeholder="ajouter" name="emploi"></td>
                    <td class="color1"><input type="text" placeholder="ajouter" name="genre"></td>
                    <td class="color2"><input type="number" placeholder="ajouter" name="poids"></td>
                    <td class="color1"><input type="number" placeholder="ajouter" name="taille"></td>
                    <td class="color2"><input type="text" placeholder="ajouter" name="groupe_sanguin"></td>
                    <td class="color1"><input type="number" placeholder="ajouter" name="sommeil_moyen"></td>
                    <td class="color2"><input type="text" placeholder="ajouter" name="pathologie"></td>
                    <td class="color2"><input type="password" placeholder="ajouter" name="mot_de_passe"></td>
                    <td><input type="submit" value="Ajouter" class="button_like"/></td>
                </form>
            </tr>
        <?php } ?>

        <tr>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_identifiant"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color2">
                <select name="statut" id="filtre_statut"
                        onchange="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
                    <option value="all">TOUS</option>
                    <option value="administrateur">administrateur</option>
                    <option value="utilisateur">utilisateur</option>
                    <option value="gestionnaire">gestionnaire</option>
                    <option style="background-color:#FF5733" value="banni">banni</option>
                </select>
            </td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_nom"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_prenom"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_date_de_naissance"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_telephone"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_email"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_emploi"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_genre"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_poids"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_taille"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_groupe_sanguin"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color1"><input type="text" placeholder="filtrer" id="filtre_sommeil_moyen"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
            <td class="color2"><input type="text" placeholder="filtrer" id="filtre_pathologie"
                                      onkeyup="lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)">
            </td>
        </tr>
    </table>
</div>

<script>lister_utilisateurs(<?php echo $parametre_js_statut_utilisateur ?>)</script>
</body>
</html>
