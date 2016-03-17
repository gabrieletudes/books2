<?php

class EditorsController{

    private $editors_model = null;

    public function __construct()
    {
        $this->editors_model = new Editors();
    }

    public function index(){//on recupere les les editeurs et va se trouver dans la variable data


        $editors = $this->editors_model->all();

        $view ='index_editors.php';

        return ['editors'=>$editors, 'view'=>$view, 'page_title'=>'Nos editeurs'];//returne


    }

   public function show()//les donnes pour afficher un livre

    {

        if(!isset($_GET['id'])){
            //rediriger vers une page d'erreur
            die('Il manque l indentifient de l’editeur');

        }else{
            $id = intval($_GET['id']);

            $editor = $this->editors_model->find($id);

            $view = 'show_editors.php';

            $page_title = 'La nom de l’editeur&nbsp;: '.$editor->name;

            return ['editor'=>$editor, 'view'=> $view, 'page_title' => $page_title]; /*returne un editeur, son nom et le title pour la page*/


        }
    }

}
