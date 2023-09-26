<?php
require_once "Tecnico.php";

final class programacao extends Tecnico{
    private string $area;

    
    public function getArea(){
        return $this->area;
    }

    public function setArea($area):void {
        $this->area = $area;
    }
}