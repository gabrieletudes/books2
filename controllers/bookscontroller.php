<?php

namespace Controller;

use Model\Authors;
use Model\Books;
use Model\Editors;

class BooksController
{
    private $books_model = null;

    public function __construct()
    {
        $this->books_model = new Books();
    }

    public function index()
    {//on recupere les les livres et va se trouver dans la variable data


        $books = $this->books_model->all();

        $view = 'index_books.php';

        return ['books' => $books, 'view' => $view,  'page_title'=>'Nos Livres'];//returne


    }

    public function show()//les donnes pour afficher un livre

    {

        if (!isset($_GET['id'])) {
            //rediriger vers une page d'erreur
            die('Il manque l indentifient du livre');


        } else {
            $id = intval($_GET['id']);

            $book = $this->books_model->find($id);

            $authors = null;
            $editors = null;
            if(isset($_GET['with'])){
                $with = explode(',',$_GET['with']);
                //authors dans l'array
                if(in_array('authors',$with)){
                    $authors_model = new Authors();
                    $authors = $authors_model->getAuthorsByBookId($id);
                }

                if(in_array('editors',$with)){
                    $editors_model = new Editors();
                    $editors = $editors_model->getEditorsByBookId($id);
                }
            }


            $view = 'show_books.php';

            $page_title = 'La fiche du livre&nbsp;: '.$book->title;

            return [
                'book' => $book,
                'view' => $view,
                'page_title' => $page_title,
                'authors'=>$authors,
                'editors'=>$editors]; /*returne un livre et son nom*/
        }
    }

}
