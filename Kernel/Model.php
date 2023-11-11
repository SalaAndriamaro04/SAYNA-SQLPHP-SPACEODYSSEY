<?php

namespace Kernel;
class Model{
    protected static string $table;
    public static function all(){
        $query = 'select * from '.self::getTable();
        return Connexion::query($query,get_called_class());
    }

    public static function find($id){
        $query = 'select * from '.self::getTable().
        ' where id=:id';
        $result = Connexion::query($query,get_called_class(),['id'=>$id]); 
        if(isset($result[0])){
            return $result[0];
        }else{
            return null;
        }

    }
    
    public static function getTable(){
        //retourne la class depuis laquelle la fonction est appelé
        //ici, fonction getTable -- class Model
        $class=get_called_class();
        return $class::$table;
    }

/*
    public static function all(){
        $query = 'select * from '.self::getTable();
        return Connexion::query($query,get_called_class()); 
        //get_called_class() pour indiquer le chemin des tables à selecter
    }
    
    public static function find($id){
        $query = 'select * from '.self::getTable().
        ' where id=:id';
        $result = Connexion::query($query,get_called_class(),['id'=>$id]); 
        if(isset($result[0])){
            return $result[0];
        }else{
            return null;
        }

    }

    public function delete(){
        $query='delete from '.$this->getTable().' where id=:id';
        Connexion::execute($query,['id'=>$this->id]); 
    }*/
}
?>