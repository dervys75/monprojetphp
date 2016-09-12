<?php
function get_forfaits() {
    global $forfaits_data;
    return $forfaits_data;
}

function get_categories() {
    global $categories;
    return $categories;
}
function get_photo() {
    global $photo_categories;
    return $photo_categories;
}

define('FORF_NOM',          'nom');
define('FORF_CATEGORY',     'categorie');
define('FORF_DESCRIPTION',  'description');
define('FORF_DUREE',        'duree');
define('FORF_DEBUT_SAISON', 'debut_saison');
define('FORF_FIN_SAISON',   'fin_saison');
define('FORF_PRIX',         'prix');
define('FORF_PLACES_DISPO', 'places_dispo');
define('FORF_MAX_ANIMAUX',  'nbr_max_animaux');
define('FORF_PRIX_ANIMAL',  'prix_animal');
define('FORF_PHOTO1',       'photo1');
define('FORF_PHOTO2',       'photo2');

$categories = array("Cuba", "Mexique", "Peru");
$photo_categories = array(
    "Cuba" => 'images-modal/haba1.jpg',
    "Mexique" => 'images-modal/iguada4.jpg',
    "Peru" => 'images-modal/lamb3.jpg');

$forfaits_data = array(
    '05' => array(
        FORF_NOM => "Varadero",
        FORF_CATEGORY => "Cuba",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 14,
        FORF_DEBUT_SAISON => "2016-09-01",
        FORF_FIN_SAISON => "2017-05-31",
        FORF_PRIX => 7660,
        FORF_PLACES_DISPO => 98,
        FORF_MAX_ANIMAUX => 2,
        FORF_PRIX_ANIMAL => 99,
        FORF_PHOTO1 => "images-modal/varadero.jpg",
        FORF_PHOTO2 => "images-modal/varadero1.jpg",
    ),
    '12' => array(
        FORF_NOM => "Cayo Santa Maria",
        FORF_CATEGORY => "Cuba",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 18,
        FORF_DEBUT_SAISON => "2016-04-01",
        FORF_FIN_SAISON => "2016-10-31",
        FORF_PRIX => 8920,
        FORF_PLACES_DISPO => 105,
        FORF_MAX_ANIMAUX => 2,
        FORF_PRIX_ANIMAL => 156,
        FORF_PHOTO1 => "images-modal/santa_m.jpg",
        FORF_PHOTO2 => "images-modal/santa_m1.jpg",
    ),
    '13' => array(
        FORF_NOM => "Cayo Largo",
        FORF_CATEGORY => "Cuba",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 16,
        FORF_DEBUT_SAISON => "2016-04-01",
        FORF_FIN_SAISON => "2016-12-31",
        FORF_PRIX => 9230,
        FORF_PLACES_DISPO => 56,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "images-modal/cayo_larg.jpg",
        FORF_PHOTO2 => "images-modal/cayo_larg1.jpg",
    ),
    '14' => array(
        FORF_NOM => "La Habana",
        FORF_CATEGORY => "Cuba",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 12,
        FORF_DEBUT_SAISON => "2016-05-01",
        FORF_FIN_SAISON => "2016-11-30",
        FORF_PRIX => 9230,
        FORF_PLACES_DISPO => 322,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "images-modal/haba00.jpg",
        FORF_PHOTO2 => "images-modal/haba.jpg",
    ),
    '18' => array(
        FORF_NOM => "Riviera Maya",
        FORF_CATEGORY => "Mexique",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 1,
        FORF_DEBUT_SAISON => "2016-12-01",
        FORF_FIN_SAISON => "2017-04-30",
        FORF_PRIX => 199,
        FORF_PLACES_DISPO => 450,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "images-modal/riv_m3.jpg",
        FORF_PHOTO2 => "images-modal/riv_may1.jpg"
    ),
    '22' => array(
        FORF_NOM => "Cancun",
        FORF_CATEGORY => "Mexique",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 1,
        FORF_DEBUT_SAISON => "2016-12-01",
        FORF_FIN_SAISON => "2017-04-30",
        FORF_PRIX => 215,
        FORF_PLACES_DISPO => 341,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "images-modal/canc00.jpg",
        FORF_PHOTO2 => "images-modal/canc1.jpg",
    ),
    '23' => array(
        FORF_NOM => "Playa del Carmen",
        FORF_CATEGORY => "Mexique",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 1,
        FORF_DEBUT_SAISON => "2016-12-01",
        FORF_FIN_SAISON => "2017-04-30",
        FORF_PRIX => 255,
        FORF_PLACES_DISPO => 256,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "images-modal/pdc00.jpg",
        FORF_PHOTO2 => "images-modal/pdc.jpg",
    ),
    '31' => array(
        FORF_NOM => "Isle de Guadalupe",
        FORF_CATEGORY => "Mexique",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 1,
        FORF_DEBUT_SAISON => "2017-01-01",
        FORF_FIN_SAISON => "2017-03-31",
        FORF_PRIX => 389,
        FORF_PLACES_DISPO => 268,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "images-modal/iguada.jpg",
        FORF_PHOTO2 => "images-modal/iguada1.jpg"
    ),
    '32' => array(
        FORF_NOM => "Lima",
        FORF_CATEGORY => "Peru",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 8,
        FORF_DEBUT_SAISON => "2016-07-15",
        FORF_FIN_SAISON => "2016-09-15",
        FORF_PRIX => 3240,
        FORF_PLACES_DISPO => 82,
        FORF_MAX_ANIMAUX => 2,
        FORF_PRIX_ANIMAL => 176,
        FORF_PHOTO1 => "images-modal/lima00.jpg",
        FORF_PHOTO2 => "images-modal/lima2.jpg"
    ),
    '44' => array(
        FORF_NOM => "Lambayeque",
        FORF_CATEGORY => "Peru",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 7,
        FORF_DEBUT_SAISON => "2016-10-01",
        FORF_FIN_SAISON => "2017-05-31",
        FORF_PRIX => 2099,
        FORF_PLACES_DISPO => 102,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "images-modal/lamb00.jpg",
        FORF_PHOTO2 => "images-modal/lamb3.jpg",
    ),
    '46' => array(
        FORF_NOM => "Cajamarca",
        FORF_CATEGORY => "Peru",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 69,
        FORF_DEBUT_SAISON => "2016-01-01",
        FORF_FIN_SAISON => "2016-12-31",
        FORF_PRIX => 12150,
        FORF_PLACES_DISPO => 65,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "images-modal/cajam00.jpg",
        FORF_PHOTO2 => "images-modal/cajam.jpg",
    ),
    '47' => array(
        FORF_NOM => "Ayacucho",
        FORF_CATEGORY => "Peru",
        FORF_DESCRIPTION => "Le produit 1 bla bla bla...",
        FORF_DUREE => 15,
        FORF_DEBUT_SAISON => "2016-06-15",
        FORF_FIN_SAISON => "2016-09-15",
        FORF_PRIX => 5990,
        FORF_PLACES_DISPO => 34,
        FORF_MAX_ANIMAUX => 0,
        FORF_PRIX_ANIMAL => 0,
        FORF_PHOTO1 => "images-modal/ayac00.jpg",
        FORF_PHOTO2 => "images-modal/ayac.jpg",
    ),
);
