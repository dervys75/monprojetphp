<?php
require_once(dirname(__FILE__) . '/defines.php');
require_once(dirname(__FILE__) . '/data/forfaits.php');
$forfait_data = null;
// Si un forfait est précisée dans la QueryString ET que sa valeur est connue
if (array_key_exists('forfait', $_GET) && array_key_exists($_GET['forfait'], get_forfaits())) {
    $forfait_data = get_forfaits()[$_GET['forfait']];
}
var_dump($_POST);
?>
<?php
//chargement du menu
require_once('views/page_top.php');// Inclusion des defines
?>
<?php if ($forfait_data !== null) {
    $valid = [
        'firstname' => ['is_valid' => false],
        'prenom' => ['is_valid' => false],
        'email' => ['is_valid' => false],
        'telephone' => ['is_valid' => false]
    ];

    if (array_key_exists('firstname', $_POST)) {
        if (strlen($_POST['firstname']) >= 2 && preg_match("[A-Za-z]{2,}", $_POST['firstname'])) {
            $valid['firstname']['is_valide'] = true;
        }
    } else {
        $valid['firstname']['is_valide'] = true;
    };
    if (array_key_exists('prenom', $_POST)) {
        if (strlen($_POST['prenom']) >= 2 && preg_match("[A-Za-z]{2,}", $_POST['firstname'])) {
            $valid['prenom']['is_valide'] = true;
        }
    } else {
        $valid['prenom']['is_valide'] = true;
    };
// Validité totale du questionnaire : On passe en revue les valeurs 'is_valid' de tous les champs
    $formulaire_valide = true;
    foreach ($valid as $field) {
        if (! $field['is_valid']) {
            $formulaire_valide = false;
            break;
        }
    }

// Si le questionnaire est valide, on affiche un résumé (ou une redirection vers une autre page)
    if ($formulaire_valide) {
        // Enregistrement ou traitement des données
        // Eventuellement affichage récapitulatif des données
        // Eventuellement redirection avec header('location: apresFormulaire.php');
        exit();
    }

    ?>
    <div id="payment">
        <h1>Formulaire de réservation</h1>
        <h2><?= $forfait_data[FORF_CATEGORY] ?></h2>
        <img src="<?= IMG_PATH . $forfait_data[FORF_PHOTO2] ?>" alt=""/>
        <p><strong><?= $forfait_data[FORF_NOM] ?></strong></p>
        <p>Prix : <?= $forfait_data[FORF_PRIX] ?> $</p>
    <fieldset>
        <legend>Vous êtes : </legend>
        <form name="reservation" id="formulaire-reservation" action="" method="post" novalidate="novalidate">
            <ul>
                <li>
                    <label for="nom">Votre Nom :</label>
                    <input
                        name="firstname" type="text" id="nom" placeholder="nom"
                        required="required" pattern="[A-Za-z]{2,}" autofocus
                        class="<?php echo $valid['firstname']['is_valid'] ? '' : 'champ-invalide'; ?>"
                        value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>"
                    />
                    <?php if (!$valid['firstname']['is_valid']) { ?>
                        <span>** Invlide</span>
                    <?php } ?>
                </li>
                <li>
                    <label for="prenom">Votre Prénom : </label>
                    <input
                        name="prenom" type="text" id="prenom"
                        placeholder="prenom" required="required" pattern="[A-Za-z]{2,}"
                        class="<?php echo $valid['prenom']['is_valid'] ? '' : 'champ-invalide'; ?>"
                        value="<?php echo isset($_POST['prenom']) ? $_POST['prenom'] : ''; ?>"
                    />
                    <?php if (!$valid['prenom']['is_valid']) { ?>
                        <span>** Invlide</span>
                    <?php } ?>
                </li>
                <li>
                    <label for="email">Adresse d'Email :</label>
                    <input
                        name="email" type="text" id="email"
                        placeholder="Courriel" required="required" pattern="[A-Za-z]{2,}"
                        class="<?php echo $valid['email']['is_valid'] ? '' : 'champ_invalide'; ?>"
                        value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"
                    />
                    <?php if (!$valid['email']['is_valid']) { ?>
                        <span>** Invlide</span>
                    <?php } ?>
                </li>
                <li>
                    <label for="telephone">Numero de Téléphone :</label>
                    <input
                        name="telephone" type="tel" id="telephone"
                        placeholder="(xxx)-xxx-xxxx" required="required"
                        pattern="^\(?\d{3}\)?(-|)?\d{3}(-| )?\d{2}(-|)?\d{2}"
                        class="<?php echo $valid['telephone']['is_valid'] ? '' : 'champ_invalide'; ?>"
                        value="<?php echo isset($_POST['telephone']) ? $_POST['telephone'] : ''; ?>"
                    />
                    <?php if (!$valid['telephone']['is_valid']) { ?>
                        <span>** Invlide</span>
                    <?php } ?>
                </li>
                <li>
                    <label for="adr">Adresse :</label>
                    <input type="text" id="adresse" placeholder="Adresse" required="required" pattern="{2,}"/>
                </li>
                <li>
                    <label for="part">Nombre de Participants :</label>
                    <input type="number" id="participantes" name="participantes" min="1"/>
                </li>
                <li>
                    <label for="animaux">Nombre d`animaux de compañia :</label>
                    <input type="number" id="animaux" name="animaux" max="2"/>
                    <p>(Prix pour chaque animaux : <?= $forfait_data[FORF_PRIX_ANIMAL] ?>)</p>
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
                <li>
                    <label for="dure">Sejour :l</label>
                    <input type="number" id="dure" name="dure" min="5" max="14"/>
                </li>

            </ul>

            <input type="submit" name="submit" value="Soumettre" id="soumettre"/>
        </form>

    </fieldset>
    </div>

<?php } else { ?>

    <mark> *** Selectionez un forfait valide *** </mark>

<?php } ?>


<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>


