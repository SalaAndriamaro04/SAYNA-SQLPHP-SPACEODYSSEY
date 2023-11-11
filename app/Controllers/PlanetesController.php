<?php

namespace app\Controllers;
use Kernel\Model;

class PlanetesController extends \Kernel\Controller
{
    public function index(){
        $planetes = \app\Models\Planetes::all();
        return new \Kernel\View('planetes/index.php',['planetes'=>$planetes]);
    }

    public function edit(){
        $planetes= \app\Models\Planetes::find($_GET['planetes']);
        return new \Kernel\View('planetes/form.php',['planetes'=>$planetes]);
    }
   
    public function update(){
        $planetes= \app\Models\Planetes::find($_POST['planetes']);
        $planetes->nom=$_POST['nom'];

        //enregistrement dans la bdd
        $planetes->save();
        header('Location:?controller=Planetes&action=index');
    }
/* 
    public function delete(){
        $pays= \app\Models\Pays::find($_GET['pays']);
        return new \Kernel\View('pays/confirmDelete.php',['pays'=>$pays]);
    }

    public function deleteConfirm(){
        $pays= \app\Models\Pays::find($_POST['pays']);

        //enregistrement dans la bdd
        $pays->delete();
        header('Location:?controller=Pays&action=index');
    }*/
}


?>