<?php

namespace app\Controllers;
use Kernel\Model;

class AstronautesController extends \Kernel\Controller
{
    public function index(){
        $astronautes = \app\Models\Astronautes::all();
        return new \Kernel\View('astronautes/index.php',['astronautes'=>$astronautes]);
    }

    public function edit(){
        $astronautes= \app\Models\Astronautes::find($_GET['astronautes']);
        return new \Kernel\View('astronautes/form.php',['astronautes'=>$astronautes]);
    }
    
    public function update(){
        $astronautes= \app\Models\Astronautes::find($_POST['astronautes']);
        $astronautes->nom=$_POST['nom'];

        //enregistrement dans la bdd
        $astronautes->save();
        header('Location:?controller=Astronautes&action=index');
    }

    public function delete(){
        $astronautes= \app\Models\Astronautes::find($_GET['astronautes']);
        return new \Kernel\View('astronautes/confirmDelete.php',['astronautes'=>$astronautes]);
    }

    public function deleteConfirm(){
        $astronautes= \app\Models\Astronautes::find($_POST['astronautes']);

        //enregistrement dans la bdd
        $astronautes->delete();
        header('Location:?controller=Astronautes&action=index');
    }
}


?>