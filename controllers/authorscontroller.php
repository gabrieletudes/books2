<?php

class AuthorsController
{
    private $authors_model = null;

    public function __construct()
    {
        $this->authors_model = new Authors();
    }

    function index()
    {//on recupere les les livres et va se trouver dans la variable data

        $authors = $this->authors_model->all();

        $view = 'index_authors.php';

        return ['authors' => $authors, 'view' => $view, 'page_title'=>'Nos Auteurs'];//returne


    }

    function show()//les donnes pour afficher un livre

    {

        if (!isset($_GET['id'])) {
            //rediriger vers une page d'erreur
            die('Il manque l indentifient de l’auteur');


        } else {
            $id = intval($_GET['id']);

            $author = $this->authors_model->find($id);

            $view = 'show_authors.php';

            $page_title = 'La nom de l’auteur&nbsp;: '.$author->name;

            return ['author' => $author, 'view' => $view,'page_title' => $page_title]; /*returne un livre et son nom*/
        }
    }
}
