<?php

namespace Controller;

//use = une classe de son fichier

use Model\Authors;
use Model\Editors;

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

            $authors = null;
            if(isset($_GET['with'])){
                $with = explode(',',$_GET['with']);
                //auhtors dans l'array

                if(in_array('authors',$with)){
                    $authors_model = new Authors();
                    $authors = $authors_model->getAuthorsByEditorId($id);
                }
            }

            
            $view = 'show_editors.php';

            $page_title = 'La nom de l’editeur&nbsp;: '.$editor->name;

            return [
                'editor'=>$editor,
                'view'=> $view,
                'page_title' => $page_title,
                'authors'=>$authors]; /*returne un editeur, son nom et le title pour la page*/


        }
    }

}
