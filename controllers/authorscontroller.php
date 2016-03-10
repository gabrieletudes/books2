<?php

function index(){//on recupere les les livres et va se trouver dans la variable data

    include ('authors.php');

    $authors = getAuthors();

    $view = $GLOBALS['a'].'_'.$GLOBALS['e'].'.php';

    return ['authors'=>$authors, 'view'=>$view];//returne


}

function show()//les donnes pour afficher un livre

    {
        include ('authors.php');

    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        $author = getAuthor($id);

        $view = $GLOBALS['a'].'_'.$GLOBALS['e'].'.php';

        return ['author'=>$author, 'view'=>$view]; /*returne un livre et son nom*/


    }else{
        //rediriger vers une page d'erreur
        die('Il manque l indentifient de l’auteur');
    }
}
