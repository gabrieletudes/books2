<?php

function getBooks(){
    /**/
    $sqlBooks = 'SELECT * FROM books';

    $pdoSt = $GLOBALS['cn']->query($sqlBooks);//on accede avec $Globals

    $books = $pdoSt->fetchAll();

    $view = 'allbooks.php';

    return ['books'=>$books, 'view'=>$view];
}

function getBook($id){

    $sqlBook = 'SELECT * FROM books WHERE id = :id';

    $pdoSt = $GLOBALS['cn']->prepare($sqlBook);

    $pdoSt->execute([':id' => $id]);

    $book = $pdoSt->fetch();

    $view = 'singlebook.php';

    return ['book'=>$book, 'view'=>$view];
}