<?php
/*
 * requette sql ne s'ocupe pas de la vue elle recupere et returne*/
function getAuthors(){

    $sqlAuthors = 'SELECT * FROM authors';

    $pdoSt = $GLOBALS['cn']->query($sqlAuthors);//on accede avec $Globals

    return $pdoSt->fetchAll();

}

function getAuthor($id){

    $sqlAuthor = 'SELECT * FROM authors WHERE id = :id';

    $pdoSt = $GLOBALS['cn']->prepare($sqlAuthor);

    $pdoSt->execute([':id' => $id]);

    return $pdoSt->fetch();

}
