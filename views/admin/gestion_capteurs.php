<?php
include "../../views/header.php";
include "../../views/Mise_en_page.php";
include "../../views/tableau_colore.php";
?>

<body>
<div id="section_centrale">
    <h1>Gestion des capteurs</h1>
    <h2>Vous pouvez:</h2>
    <ul>
        <li>- Désactiver et (ré-)activer les capteurs</li>
        <li>- Supprimer les capteurs</li>
        <li>- Ajouter un capteur</li>
    </ul>
    <br>

    <table id="table_capteurs">
        <tr>
            <th class="color1">Nom du capteur</th>
            <th class="color2">Statut</th>
        </tr>
        <tr>
            <form action="" method="post" id="form_ajout_capteur">
                <td class="color1"><input type="text" placeholder="ajouter" name="nom_capteur"></td>
                <td class="color2">
                    <select name="statut_capteur" form="form_ajout_capteur">
                        <option value="1">Activé</option>
                        <option value="0">Désactivé</option>
                    </select>
                </td>
                <td><input type="submit" value="Ajouter" class="button_like"/></td>
            </form>
        </tr>
    </table>
</div>

<script>lister_capteurs()</script>
</body>
</html>
