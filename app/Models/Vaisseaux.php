<?php

namespace app\Models;
use Kernel\Model;

class Vaisseaux extends Model{
    protected static string $table='vaisseaux';

    public function save(){
        $query= 'update vaisseaux set nom=:nom where id=:id';
        \Kernel\Connexion::execute($query,['nom'=>$this->nom,'id'=>$this->id]); 
    }
    
}
?>