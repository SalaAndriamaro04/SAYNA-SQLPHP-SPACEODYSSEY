<?php

namespace app\Models;
use Kernel\Model;

class Astronautes extends Model{
    protected static string $table='astronautes';

    public function save(){
        $query= 'update astronautes set nom=:nom where id=:id';
        \Kernel\Connexion::execute($query,['nom'=>$this->nom,'id'=>$this->id]); 
    }
    
}
?>