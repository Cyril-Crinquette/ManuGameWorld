<?php

$categories = isset($_COOKIE['categories']) ? json_decode($_COOKIE['categories']) : ['cat1','cat2','cat3'] ;


// $format et $categories ont une valeur par défaut
// si il y a du post ils prennent le post, parce que quand on est en post on change les cookies mais que pour la page d'apres encore, 
// sinon si y'a pas de post mais des cookies, ca veut dire qu'on est sur la page d'apres encore donc qu'ils sont à jour
if (isset($_POST['format'])) {
    $format = $_POST['format'];
} else if (isset($_COOKIE['format'])){
    $format = $_COOKIE['format'];
} else {
    $format = '9';
}

if (isset($_POST['categories'])) {
    $categories = $_POST['categories'];
} else if (isset($_COOKIE['categories'])){
    $categories = json_decode($_COOKIE['categories']);
} else {
    $categories = ['cat1','cat2','cat3'];
}

if (isset($_POST['mod'])) {
    $theme = 'dark';
} else if (isset($_COOKIE['mod'])){
    $theme = $_COOKIE['mod'];  //ce cookie devrait etre 'dark' ou 'light'
} else {
    $theme = 'light';
}



$arrayXML = [];

    foreach ($categories as $value) {
        switch ($value) {
            case 'cat1':
                array_push($arrayXML, (object) [
                    'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss'),
                    'nameCategory' => 'Actus'
                ]);
                break;
            case 'cat2':
                array_push($arrayXML, (object) [
                    'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/tests.rss'),
                    'nameCategory' => 'Tests'
                ]);
                break;
            case 'cat3':
                array_push($arrayXML, (object) [
                    'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/ps5.rss'),
                    'nameCategory' => 'PS5'
                ]);
                break;
            case 'cat4':
                array_push($arrayXML, (object) [
                    'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/xbox-series-x.rss'),
                    'nameCategory' => 'Xbox'
                ]);
                break;
            case 'cat5':
                array_push($arrayXML, (object)  [
                    'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/switch.rss'),
                    'nameCategory' => 'Switch'
                ]);
                break;
        }
    }

