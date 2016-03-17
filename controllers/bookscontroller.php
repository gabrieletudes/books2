<?php

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

            $view = 'show_books.php';

            $page_title = 'La fiche du livre&nbsp;: '.$book->title;

            return ['book' => $book, 'view' => $view, 'page_title' => $page_title]; /*returne un livre et son nom*/
        }
    }

}
