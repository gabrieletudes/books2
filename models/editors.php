<?php
/*
 * requette sql ne s'ocupe pas de la vue elle recupere et returne*/
function getEditors(){

    $sqlEditors = 'SELECT * FROM editors';

    $pdoSt = $GLOBALS['cn']->query($sqlEditors);//on accede avec $Globals

    return $pdoSt->fetchAll();

}

function getEditor($id){

    $sqlEditor = 'SELECT * FROM editors WHERE id = :id';

    $pdoSt = $GLOBALS['cn']->prepare($sqlEditor);

    $pdoSt->execute([':id' => $id]);

    return $pdoSt->fetch();

}
