<?php
//requettes http

//se connecter a la base de donne
//PDO fait le travaille pour nous
//c'est une class
//Prototypes en javascrip

//new pour l'inteantacion
//stcocker dans une variable
/*Le constructeur est automatiquement executer quand on fait new

    Les parametres dsn (addrese base de donne, nom et password)
    query ne retourne pas le resultat
    On ne doit pas stocker

    sprintf; des jocker sprinte
*/


/*DEmmarrer la connection*/
/*chemin de inclusion*/

/*definition du chemain d'inlusion, pour faciliter les include*/

$viewsDir = __DIR__ . '/views';/*mon chemin plus mon dossier*/

$modelsDir = __DIR__ . '/models';

$controllersDir = __DIR__ . '/controllers';

$includePath = $viewsDir . PATH_SEPARATOR . $modelsDir . PATH_SEPARATOR . $controllersDir . PATH_SEPARATOR . get_include_path();

set_include_path($includePath);

spl_autoload_register(function ($class) {
    include($class . '.php');
});

/*// Faire en sorte de afficher les autheurs*/
include('routes.php');

$defaultRoute = $routes['default'];

$routeParts = explode('_', $defaultRoute);


/*var_dump($routeParts);*/

$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : $routeParts[0];//lister les livres

$e = isset($_REQUEST['e']) ? $_REQUEST['e'] : $routeParts[1];


if (!in_array($a . '_' . $e, $routes)) {/*proteger nos fichiers de notre utilisateurs*/

    //redirection 404
    die('ce que vous cherchez n’est pas ici');
}

/*mettre en majuscule la premier character*/
$controller_name = ucfirst($e) . 'Controller';

/*instancier*/
$controller = new $controller_name();

$data = call_user_func([$controller, $a]);//on recupere des donnes produit par la fonction sticke dans le controlleur

/*3) vue */
include('vieuw.php');
