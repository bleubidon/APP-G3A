<?php
include "header.php";
?>
<body>
<h1> Conditions Générales d'Utilisation</h1>

<h2>Articel 1: Mentions légales</h2>
Ce site est édité par la société Captimove.<br>
Siège social : Captimove, 28 rue Notre Dame des Champs<br>
Capital social : 10000 euros<br>
Téléphone : +33 (0)4.74.00.00.00<br>

<h2>Articel 2: Informatique et liberté</h2>
<p align="left"> Aucune information personnelle n'est collectée à votre insu. Les informations que vous nous communiquez
    lors d’une demande de devis,
    de renseignements ou d’inscription à la newsletter par courrier, par téléphone, par e-mail ou par formulaire sont
    uniquement
    destinées au traitement administratif et commercial de votre demande par la société Captimove. Elles ne font l'objet
    d'aucune
    cession à des tiers. Captimove traite les informations qui vous concernent avec la plus grande confidentialité.
    Conformément à la
    loi « Informatique et Libertés » n°78-17 du 6 janvier 1978, vous disposez d'un droit d'accès, de rectification et
    d'opposition aux données
    personnelles vous concernant. Pour l'exercer, il suffit de nous en faire la demande par écrit aux coordonnées
    suivantes : Captimove, 28 rue Notre Dame Des Champs, Paris. </p>


<h2>Articel 3: Droit d'auteur / copyright</h2>
<p align="left">L'ensemble du contenu du présent site Internet, y compris nom de domaine, marques, logo, texte… est la
    propriété de la société Captimove,
    il est protégé par les lois en vigueur de la législation française sur la propriété intellectuelle.
    Aucun élément de ce site ne peut être copié, reproduit, détourné ou dénaturé, et ce, sur quelque support que ce
    soit,
    sans constituer un acte de contrefaçon au sens des articles L 335-2 et suivants du code de la propriété
    intellectuelle. </p>


<h2>Articel 4: Accès au site </h2>
<p align="left">L'utilisateur de ce site reconnaît disposer de la compétence et des moyens nécessaires pour accéder et
    utiliser ce site.
    Captimove ne saurait être tenu responsable des éléments en dehors de son contrôle et des dommages
    qui pourraient éventuellement être subis par l'environnement technique de l'utilisateur et notamment, ses
    ordinateurs,
    logiciels, équipements réseaux et tout autre matériel utilisé pour accéder ou utiliser le service et/ou les
    informations.
    Il est rappelé que le fait d'accéder ou de se maintenir frauduleusement dans un système informatique, d'entraver ou
    de fausser
    le fonctionnement d'un tel système, d'introduire ou de modifier frauduleusement des données dans un système
    informatique
    constitue des délits passibles de sanctions pénales. </p>


<h2> Articel 5: Limitation de responsabilité </h2>
<p align="left"> Captimove s'attache à transmettre des informations régulièrement mises à jour, notamment sur les
    actualités ainsi que sur le contenu des articles. Toutefois des informations erronées ou des omissions peuvent être
    constatées, suite notamment à des erreurs de saisie ou
    de mise en page. Si vous en faisiez le constat nous vous invitons à nous le signaler pour que nous puissions
    procéder à
    leur rectification. Nous nous réservons par ailleurs le droit de modifier les informations ou les éventuelles offres
    commerciales fournies par le présent site, dans le cadre de nos opérations d'actualisation et de mise à jour des
    données,
    et ce sans préavis. De même que la société Captimove ne pourra en aucune façon être tenue pour responsable des sites
    ayant un lien hypertexte avec le présent site et décline toute responsabilité quant à leur contenu et à leur
    utilisation. </p>

<?php
$retour = isset($_GET['retour']) ? $_GET['retour'] : "/";
?>
<button id="bouton_retour" onclick="window.location.href = '<?php echo $retour ?>'">Retour</button>
</body>
</html>
