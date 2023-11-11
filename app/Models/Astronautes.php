<?php

namespace app\Models;
use Kernel\Model;

class Astronautes extends Model{
    protected static string $table='astronautes';
/*
    public function save(){
        $query= 'update pays set name=:name where id=:id';
        \Kernel\Connexion::execute($query,['name'=>$this->name,'id'=>$this->id]); 
    }*/
    
}
?>