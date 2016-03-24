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

    public function getEditorsByAuthorId($id)
    {
        $sql = 'SELECT DISTINCT editors.*
                FROM editors
                JOIN books
                ON books.editor_id = editors.id
                JOIN author_book
                ON author_book.book_id = books.id
                JOIN authors
                ON author_book.author_id = authors.id
                WHERE authors.id = :id
                ';

        $pdoSt = $this->cn->prepare($sql);
        $pdoSt->execute([':id'=>$id]);

        return $pdoSt->FetchAll();
    }

}
