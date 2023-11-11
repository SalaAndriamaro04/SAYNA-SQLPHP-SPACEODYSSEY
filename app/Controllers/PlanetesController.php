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

    public function delete(){
        $planetes= \app\Models\Planetes::find($_GET['planetes']);
        return new \Kernel\View('planetes/confirmDelete.php',['planetes'=>$planetes]);
    }

    public function deleteConfirm(){
        $planetes= \app\Models\Planetes::find($_POST['planetes']);

        //enregistrement dans la bdd
        $planetes->delete();
        header('Location:?controller=Planetes&action=index');
    }
}


?>