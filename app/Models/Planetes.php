<?php

namespace app\Models;
use Kernel\Model;

class Planetes extends Model{
    protected static string $table='planetes';

    public function save(){
        $query= 'update planetes set nom=:nom where id=:id';
        \Kernel\Connexion::execute($query,['nom'=>$this->nom,'id'=>$this->id]); 
    }
    
}
?>