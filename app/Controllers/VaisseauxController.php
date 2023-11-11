<?php

namespace app\Controllers;
use Kernel\Model;

class VaisseauxController extends \Kernel\Controller
{
    public function index(){
        $vaisseaux = \app\Models\Vaisseaux::all();
        return new \Kernel\View('vaisseaux/index.php',['vaisseaux'=>$vaisseaux]);
    }
/*
    public function edit(){
        $pays= \app\Models\Pays::find($_GET['pays']);
        return new \Kernel\View('pays/form.php',['pays'=>$pays]);
    }
    
    public function update(){
        $pays= \app\Models\Pays::find($_POST['pays']);
        $pays->name=$_POST['name'];

        //enregistrement dans la bdd
        $pays->save();
        header('Location:?controller=Pays&action=index');
    }

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