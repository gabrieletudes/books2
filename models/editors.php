<?php

namespace Model;

/*
 * requette sql ne s'ocupe pas de la vue elle recupere et returne*/
class Editors extends Model
{

    protected $table = 'editors';

    public function getEditorsByBookId($id)
    {
        $sql = 'SELECT editors.*
                FROM editors
                JOIN books
                ON books.editor_id = editors.id
                WHERE editors.id = :id
                ';

        $pdoSt = $this->cn->prepare($sql);
        $pdoSt->execute([':id'=>$id]);

        return $pdoSt->FetchAll();
    }

}
