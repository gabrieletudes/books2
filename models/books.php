<?php
/*
 * requette sql ne s'ocupe pas de lavue eller recupere et returne*/
function getBooks(){

    $sqlBooks = 'SELECT * FROM books';

    $pdoSt = $GLOBALS['cn']->query($sqlBooks);//on accede avec $Globals

    return $pdoSt->fetchAll();

}

function getBook($id){

    $sqlBook = 'SELECT * FROM books WHERE id = :id';

    $pdoSt = $GLOBALS['cn']->prepare($sqlBook);

    $pdoSt->execute([':id' => $id]);

    return $pdoSt->fetch();

}