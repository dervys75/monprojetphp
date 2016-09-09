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

<main>
    <h1>Accueil</h1>
	<div>
		<h2>Pourquoi l'utiliser?</h2>
		<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).</p>
	</div>
	<div>
		<h3>Cuba</h3>
		<a href="catalog.php"><img src="images/images-modal/haba1.jpg"/></a>
	</div>
	<div>
		<h3>Mexique</h3>
		<a href="catalog.php"><img src="images/images-modal/canc1.jpg"/>
	</div>
	<div>
		<h3>Peru</h3>
		<a href="catalog.php"><img src="images/images-modal/lamb3.jpg"/></a>
	</div>
</main>



<?php
	require_once('views/page_bottom.php');// Inclusion des defines
?>




