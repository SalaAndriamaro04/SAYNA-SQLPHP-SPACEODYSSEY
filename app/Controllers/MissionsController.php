<?php

namespace app\Controllers;
use Kernel\Model;

class MissionsController extends \Kernel\Controller
{
    public function index(){
        $missions = \app\Models\Missions::all();
        return new \Kernel\View('missions/index.php',['missions'=>$missions]);
    }

    public function edit(){
        $missions= \app\Models\Missions::find($_GET['missions']);
        return new \Kernel\View('missions/form.php',['missions'=>$missions]);
    }
    
    public function update(){
        $missions= \app\Models\Missions::find($_POST['missions']);
        $missions->nom=$_POST['nom'];

        //enregistrement dans la bdd
        $missions->save();
        header('Location:?controller=Missions&action=index');
    }

    public function delete(){
        $missions= \app\Models\Missions::find($_GET['missions']);
        return new \Kernel\View('missions/confirmDelete.php',['missions'=>$missions]);
    }

    public function deleteConfirm(){
        $missions= \app\Models\Missions::find($_POST['missions']);

        //enregistrement dans la bdd
        $missions->delete();
        header('Location:?controller=Missions&action=index');
    }
}


?>