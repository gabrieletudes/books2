<?php

namespace Model;

/*
 * requette sql ne s'ocupe pas de la vue elle recupere et returne*/

class Authors extends Model
{
    protected $table = 'authors';

    public function getAuthorsByBookId($id)
    {
        $sql = 'SELECT authors.*
                FROM authors
                JOIN author_book
                ON authors.id = author_book.author_id
                JOIN books
                ON author_book.book_id = books.id
                WHERE books.id = :id
                ';

        $pdoSt = $this->cn->prepare($sql);
        $pdoSt->execute([':id'=>$id]);

        return $pdoSt->FetchAll();
    }

}
