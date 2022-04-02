<?php
// Tableau des erreurs
$error = [];

if($_SERVER['REQUEST_METHOD']== 'POST'){ //permet de ne pas afficher les messages d'erreurs apres avoir envoyer le formulaitre

// 
    // Nettoyage et validation : checkboxes
    define('CATEGORIES',['cat1', 'cat2', 'cat3', 'cat4', 'cat5']);
    $selectedCategories = filter_input(INPUT_POST, 'categories', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];

    if (count(array_intersect((CATEGORIES), $selectedCategories)) != count($selectedCategories)){
        $error['categories'] = 'Veuillez choisir 3 catégories';
    } else {
        if (count($selectedCategories) != 3) {
            $error['categories'] = 'Veuillez choisir 3 catégories';
        } else {
            setcookie('categories', json_encode($selectedCategories), time() + 60*60*24*3); // pour 3 jours
        }
    }

    // Nettoyage et validation : radio : booleen
    define('FORMAT',['6', '9', '12']);
    $selectedFormat = filter_input(INPUT_POST, 'format', FILTER_SANITIZE_NUMBER_INT) ?? '';

    if (!in_array($selectedFormat, FORMAT)){
        $error['format'] = 'choisissez le nombre d\'articles que vous voulez afficher';
    } else {
        setcookie('format', $selectedFormat, time() + 60*60*24*3); // pour 3 jours
    }


    // Nettoyage et validation : dark mod
    $mod = empty($_POST['mod']) ? 'light' : 'dark';
    setcookie('mod',$mod , time() + 60*60*24*3); // pour 3 jours








}


// récupération et affichage des cookies/posts pour la modificaion du formulaire
function isChecked($input){

    // $format et $categories ont une valeur par défaut donc on peut pas les utiliser, mais on va basiquement faire la meme chose
    if (isset($_POST['format'])) {
        $fo = $_POST['format'];
    } else if (isset($_COOKIE['format'])){
        $fo = ($_COOKIE['format']);
    } else {
        $fo = 'firstTimers';
    }

    if (isset($_POST['categories'])) {
        $ca = $_POST['categories'];
    } else if (isset($_COOKIE['categories'])){
        $ca = json_decode($_COOKIE['categories']);
    } else {
        $ca = ['firstTimers'];
    }


    if (in_array($input, $ca) === true || $input == $fo) {
        return "checked";
    } 
    // in_array Retourne true si needle(1er parametre) est trouvé dans le tableau haystack(second parametre), false sinon.
}
