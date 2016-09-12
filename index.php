<?php
require_once(dirname(__FILE__) . '/defines.php');
require_once(dirname(__FILE__) . '/data/forfaits.php');
$photo_categories = get_photo();
var_dump($photo_categories);
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
    <div id="choix_forf" class="choix_forf">
        <?php
        foreach (get_categories() as $categorie) { // por afiche les 3 categorie
//            var_dump($photo_categories[$categorie]);
            echo "<h2>$categorie</h2>";
            $file_name= IMG_PATH . $photo_categories[$categorie];
            echo "<img src='$file_name'/>";
            echo "<a href='catalog.php'>Nous Forfait</a>";
        }; // foreach categorie
        ?>
    </div>
</main>
<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>




