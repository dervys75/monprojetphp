<?php
require_once(dirname(__FILE__) . '/defines.php');
require_once(dirname(__FILE__) . '/data/forfaits.php');
$forfaits_data = get_forfaits();
$categorie_page = false;
// Si une catégorie est précisée dans la QueryString ET que sa valeur est connue
if (array_key_exists('categorie', $_GET) && in_array($_GET['categorie'], get_categories())) {
    $categorie_page = $_GET['categorie'];
}
//var_dump($categorie_page);
?>
<?php
require_once('views/page_top.php');// Inclusion des defines
?>
<div id="catalog">
    <h1>Cataloge</h1>
    <?php
    foreach (get_categories() as $categorie) { // por afiche les 3 categorie
        if (($categorie_page === false) || ($categorie_page === $categorie)) {
            echo "<h2>$categorie</h2>";
            foreach ($forfaits_data as $id => $forfait) {
                // On affiche le forfait si il n'y a pas de categorie de page
                // ou bien si le forfait appartient à la categorie demandée
                if ($forfait[FORF_CATEGORY] == $categorie) {
                    ?>
                    <div class="forfait">
                        <h3><?= $forfait[FORF_NOM] ?></h3>
                        <p><?= $forfait[FORF_DESCRIPTION] ?></p>
                        <img src="<?= IMG_PATH . $forfait[FORF_PHOTO2] ?>" alt=""/>
                        <a href="reservation.php?forfait=<?=$id?>">Reservez</a>;
                    </div>
                    <?php
                } // if forfait
            }; // foreach forfait
        }  // if categorie
    }; // foreach categorie
    ?>

</div>
<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>



