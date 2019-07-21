<?php

use src\Routing;
use src\Entities\{Concert, Band, Organiser};
use src\Entities\Musicians\{
    Bassist, Guitarist,
    Singer, Drummer
};
use src\Controllers\ConcertController;

require "conf.php";

function myAutoloader($class) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
    $classModel = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
    if (file_exists($classPath)) {
        include $classPath;
    } else if (file_exists($classModel)) {
        include $classModel;
    }
}

// La fonction myAutoloader est lancé sur la classe appelée n'est pas trouvée
spl_autoload_register("myAutoloader");
// Récupération des paramètres dans l'url - Routing
$slug = explode("?", $_SERVER["REQUEST_URI"])[0];
$routes = Routing::getRoute($slug);
extract($routes);

$container = [
    Organiser::class => function () {
        return new Organiser();
    },
    Concert::class => function ($container) {
        $organiser = $container[Organiser::class]();
        return new Concert($organiser);
    },
    Band::class => function () {
        return new Band();
    },
    Singer::class => function () {
        return new Singer();
    },
    Guitarist::class => function () {
        return new Guitarist();
    },
    Bassist::class => function () {
        return new Bassist();
    },
    Drummer::class => function () {
        return new Drummer();
    },
    ConcertController::class => function ($container) {
        $organiser = $container[Organiser::class]();
        return new ConcertController($organiser);
    }
];

// Vérifie l'existence du fichier et de la classe pour charger le controlleur
if ( file_exists($cPath) ) {
    include $cPath;
    $c = 'src\\Controllers\\' . $c;
    if ( class_exists($c)) {
        //instancier dynamiquement le controller
        $cObject = $container[$c]($container);
        //vérifier que la méthode (l'action) existe
        if ( method_exists($cObject, $a) ) {
            //appel dynamique de la méthode
            $cObject->$a();
        } else {
            die("La methode ".$a." n'existe pas");
        }

    } else {
        die("La class controller ".$c." n'existe pas");
    }
} else {
    die("Le fichier controller ".$c." n'existe pas");
}
