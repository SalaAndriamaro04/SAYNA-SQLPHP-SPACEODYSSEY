<?php

namespace app\Models;
use Kernel\Model;

class Missions extends Model{
    protected static string $table='missions';

    public function save(){
        $query= 'update missions set nom=:nom where id=:id';
        \Kernel\Connexion::execute($query,['nom'=>$this->nom,'id'=>$this->id]); 
    }
    
}
?>