<?php

namespace app\Controllers;
use Kernel\Model;

class VaisseauxController extends \Kernel\Controller
{
    public function index(){
        $vaisseaux = \app\Models\Vaisseaux::all();
        return new \Kernel\View('vaisseaux/index.php',['vaisseaux'=>$vaisseaux]);
    }

    public function edit(){
        $vaisseaux= \app\Models\Vaisseaux::find($_GET['vaisseaux']);
        return new \Kernel\View('vaisseaux/form.php',['vaisseaux'=>$vaisseaux]);
    }
    
    public function update(){
        $vaisseaux= \app\Models\Vaisseaux::find($_POST['vaisseaux']);
        $vaisseaux->nom=$_POST['nom'];

        //enregistrement dans la bdd
        $vaisseaux->save();
        header('Location:?controller=Vaisseaux&action=index');
    }

    public function delete(){
        $vaisseaux= \app\Models\Vaisseaux::find($_GET['vaisseaux']);
        return new \Kernel\View('vaisseaux/confirmDelete.php',['vaisseaux'=>$vaisseaux]);
    }

    public function deleteConfirm(){
        $vaisseaux= \app\Models\Vaisseaux::find($_POST['vaisseaux']);

        //enregistrement dans la bdd
        $vaisseaux->delete();
        header('Location:?controller=Vaisseaux&action=index');
    }
}


?>