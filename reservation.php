<?php
$user_is_logged = false;
var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_POST);
$validation = array(
    'nom' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'prenom' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'email' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'telephone' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),

   'adresse' => array(
    'is_valid' => false,
    'value' => null,
    'err_msg' => '',
    ),
    'participantes' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'animaux' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
);
// Champ lastname
$validation['nom']['value'] = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);


// Champ firstname
$validation['firstname']['value'] = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$validation['firstname']['is_valid'] = (1 === preg_match('/\w{2,}/', $validation['firstname']['value']));

// Champ email
$validation['email']['value'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$validation['email']['is_valid'] = false !== filter_var($validation['email']['value'], FILTER_VALIDATE_EMAIL);
//chargement du menu
require_once('views/page_top.php');// Inclusion des defines

?>
<div id="reservation">
    <h1>Formulaire de réservation</h1>
    <fieldset id="identite">
        <legend>Vous êtes :</legend>
        <form id="content" action="" method="post">
            <ul>
                <li>
                    <label for="nom">Votre Nom :</label>
                    <input type="text" id="nom" placeholder="nom" required="required" pattern="[A-Za-z]{2,}" autofocus/>
                </li>
                <li>
                    <label for="prenom">Votre Prénom :</label>
                    <input type="text" id="prenom" placeholder="prenom" required="required" pattern="[A-Za-z]{2,}"/>
                </li>
                <li>
                    <label for="email">Adresse d'Email :</label>
                    <input type="text" name="email" id="email" placeholder="Courriel"
                           class="<?php echo $validation['email']['is_valid'] ? '' : 'champ_invalide'; ?>"
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


