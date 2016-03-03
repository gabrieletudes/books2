<?php

function index(){//on recupere les les livres et va se trouver dans la variable data

    include ('books.php');

    $books = getBooks();

    $view = $GLOBALS['a'].'_'.$GLOBALS['e'].'.php';

    return ['books'=>$books, 'view'=>$view];//returne


}

function show()//les donnes pour afficher un livre

    {
        include ('books.php');

    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        $book = getBook($id);

        $view = $GLOBALS['a'].'_'.$GLOBALS['e'].'.php';

        return ['book'=>$book, 'view'=>$view]; /*returne un livre et son nom*/


    }else{
        //rediriger vers une page d'erreur
        die('Il manque l indentifient du livre');
    }
}
