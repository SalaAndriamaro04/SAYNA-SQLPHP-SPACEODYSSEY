<?php

namespace Kernel;

class View{
    private string $filename;
    private $params;

    public function __construct($filename,$params=[]){
        $this->filename = $filename;
        $this->params = $params;
    }
    public function display(){
        foreach ($this->params as $key => $value) {
            //si on n'utilise pas $$key dans view.php
            //pourque var_dump($this->params['pays']) 
            $$key = $value;
        }
        include('../app/views/'.$this->filename);
    }
}
?>