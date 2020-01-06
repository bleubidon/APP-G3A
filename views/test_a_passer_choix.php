<?php
// TODO integrer cette page quelque part
session_start();
include "../views/header.php"
?>


<body>
<?php
include('Mise_en_page.php');
?>

<div>
    <br><br><br>
    <h1> Vous désirez passer le test pour ?</h1>

    <div20 id="catégories">
        <p class="pilote"> Un pilote </p>
        <p class="personnelSol"> Personnel au sol </p>
        <p class="personnelNaviguant"> Personnel naviguant </p>
    </div20>

    <div21 id="liens">
        <br>
        <p><a id="selectionnerPilote" href=""> Sélectionner </a></p>
        <br>
        <p><a id="selectionnerPersSol" href=""> Sélectionner </a></p>
        <br>
        <p><a id="selectionnerPersNaviguant" href=""> Sélectionner </a></p>
    </div21>


</div>

</body>


