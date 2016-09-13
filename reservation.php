<?php
require_once(dirname(__FILE__) . '/defines.php');
require_once(dirname(__FILE__) . '/data/forfaits.php');
$forfaits_data = get_forfaits();
$photo_page = false;
// Si une catégorie est précisée dans la QueryString ET que sa valeur est connue
if (array_key_exists('forfait', $_GET) && in_array($_GET['forfait'], get_forfaits())) {
    $photo_page = $_GET['forfait'];
}
var_dump( $_GET);

//chargement du menu
require_once('views/page_top.php');// Inclusion des defines
?>
<div id="reservation">
    <?php
    foreach (get_forfaits() as $id => $forfait) {
        if ($forfait[FORF_NOM] == $photo_page ){
            var_dump($photo_page);
            echo "<h1>$forfait</h1>";
        }

    }?>
    <div id="payment">


    </div>
    <h1>Formulaire de réservation</h1>
    <fieldset id="identite">
        <legend>Vous êtes :</legend>
        <form id="content" action="" method="post">
            <ul>
                <li>
                    <label for="nom">Votre Nom :</label>
                    <input type="text" id="nom" placeholder="nom" required="required" pattern="[A-Za-z]{2,}" autofocus class="<?php echo $valid['firstname']['is_valid'] ? '' : 'champ_invalide'; ?>"
                           value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>"/>
                </li>
                <li>
                    <label for="prenom">Votre Prénom :</label>
                    <input type="text" id="prenom" placeholder="prenom" required="required" pattern="[A-Za-z]{2,}"/>
                </li>
                <li>
                    <label for="email">Adresse d'Email :</label>
                    <input type="text" name="email" id="email" placeholder="Courriel"
                           class="<?php echo $validar['email']['is_valid'] ? '' : 'champ_invalide'; ?>"
                </li>
                <li>
                    <label for="telephone">Numero de Téléphone :</label>
                    <input type="tel" id="telephone" pattern="^\(?\d{3}\)?(-|)?\d{3}(-| )?\d{2}(-|)?\d{2}"
                           placeholder="(xxx)-xxx-xxxx" required="required"/>
                </li>
                <li>
                    <label for="adr">Adresse :</label>
                    <input type="text" id="adresse" placeholder="Adresse" required="required" pattern="{2,}"/>
                </li>
                <li>
                    <label for="part">Nombre de Participants :</label>
                    <input type="number" id="participantes"  name="participantes" min="1"/>
                </li>
                <li>
                    <label for="animaux">Nombre d`animaux de compañia :</label>
                    <input type="number" id="animaux" name="animaux" min="1"/>
                </li>
                <li>
                    <label for="sex">Sexe :</label>
                    <input type="radio" name="gender" value="male"/> Homme
                    <input type="radio" name="gender" value="female"/>Femme<br>
                </li>
                <li>
                    <label for="date">Date de Departe :</label>
                    <input type="date" id="date" name="date"/>
                </li>

            </ul>
        </form>
                <div class="sub" id="sub">
            <form>
                <input type="submit" name="submit" value="Soumettre" id="soumettre"/>
            </form>
        </div>

    </fieldset>
</div>


<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>


