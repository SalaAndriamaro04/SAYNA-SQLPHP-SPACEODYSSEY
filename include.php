<?php

//autoload la class se trouvant dans le fichier .php approprié
//même s'il y a des sous-dossiers pour la trouver
spl_autoload_register(function($class){
    include('../'.str_replace('\\','/',$class).'.php');
    
})
?>