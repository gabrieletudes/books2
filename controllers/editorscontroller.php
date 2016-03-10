<?php

function index(){//on recupere les les livres et va se trouver dans la variable data

    include ('editors.php');

    $editors = getEditors();

    $view = $GLOBALS['a'].'_'.$GLOBALS['e'].'.php';

    return ['editors'=>$editors, 'view'=>$view];//returne


}

function show()//les donnes pour afficher un livre

    {
        include ('editors.php');

    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        $editor = getEditor($id);

        $view = $GLOBALS['a'].'_'.$GLOBALS['e'].'.php';

        return ['editor'=>$editor, 'view'=>$view]; /*returne un livre et son nom*/


    }else{
        //rediriger vers une page d'erreur
        die('Il manque l indentifient de l’editeur');
    }
}
