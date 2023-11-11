<?php

namespace Kernel;
//..
//Pattern Singleton pour la connexion

//Utilisation de l'emplacement du fichier DB.php
use \Config\DB;

class Connexion
{
    protected static $pdo;

    private function __construct(){
        return;
    }
        // Syntaxe: \PDO pour éviter le conflit de nom

    public static function get(){
        if(!isset(self::$pdo))
        {
            try {
                
                // Créer la connexion
                self::$pdo = new \PDO('mysql:host='.DB::HOST.';dbname='.DB::NAME,DB::USERNAME,DB::PASSWORD);
            
                //Configuration des options de PDO
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
                //Vous êtes maintenant connecté à la base de donnée
            
                //... Votre code pour exécuter des requêtes et effectuer des opérations
            
                
            } catch (\PDOException $e) {
            
                // En cas d'erreur de la connexion, affichage du message d'erreur
                echo "Erreur de connexion : " . $e->getMessage();
            }
        }
        return self::$pdo;
    }
    public static function query($query,$class,$params=[]){
        //retourne que les objets
        $stmt=self::get()->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_CLASS,$class);
    }
    
    public static function execute($query,$params=[]){

        $stmt=self::get()->prepare($query);
        $stmt->execute($params);
    }
}

?>