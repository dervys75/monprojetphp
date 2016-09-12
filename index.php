<?php
require_once(dirname(__FILE__) . '/defines.php');
require_once(dirname(__FILE__) . '/data/forfaits.php');
$photo_categories = get_forfaits();
$categorie_page = false;
// Si une catégorie est précisée dans la QueryString ET que sa valeur est connue
if (array_key_exists('categorie', $_GET) && in_array($_GET['categorie'], get_categories())) {
    $categorie_page = $_GET['categorie'];
}
//var_dump($_GET);
?>

<?php
require_once('views/page_top.php');// Inclusion des defines
?>

<main id="main">
    <h1>Accueil</h1>
    <div id="p_accueil">
        <h2>***Un Peux d`histoire***</h2>
        <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de
            distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un
            texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou
            moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles
            de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une
            recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de
            construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent
            intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).</p>
    </div>
    <div id="choix_forf">
    <div class="choix_forf" ">
        <h3>Cuba</h3>
        <figure>
            <a href="catalog.php"><img src="images/images-modal/haba1.jpg"/></a>
            <figcaption>**Soleil et plage à Cuba...</figcaption>
            <p>Recettes du temps des sucres du bon vieux temps dont la préparation et la cuisson sont faites à notre cabane à sucre.</p>
        </figure>
    </div>
    <div class="choix_forf">
        <h3>Mexique</h3>
        <figure>
                <a href="catalog.php"><img src="images/images-modal/canc1.jpg"/></a>
                <figcaption>**Mexique, voyage avec un seul clic...</figcaption>
                <p>Nous vous invite à déguster un repas aux saveurs d’autrefois et à redécouvrir le plaisir de la tradition. Du sirop d'érable est servi avec tous nos plats.</p>
        </figure>
    </div>
    <div class="choix_forf">
        <h3>Peru</h3>
        <figure>
            <a href="catalog.php"><img src="images/images-modal/lamb3.jpg"/></a>
            <figcaption>**Peru, jamais cesser de voyager...</figcaption>
            <p>Les enfants ne sont pas oubliés chez-nous. Tout ce qu'il faut pour faire de la fête d'anniversaire de votre enfant un moment qu'il n'oubliera jamais.</p>
        </figure>
    </div>
    </div>
</main>


<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>




