<?php
require_once "Livro.php";

class Tecnico extends Livro{
    private array $formato = ["digital","Físico"];

    
    public function getFormato():array {
        return $this->formato;
    }

    public function setFormato(array $formato): void{
        $this->formato = $formato;
    }
}