<?php
require_once "Tecnico.php";

final class Didatico extends Tecnico{
    private string $disciplina;
    private array $nivel = ["Básico","Médio","Superior"];


    
    public function getDisciplina(): string{
        return $this->disciplina;
    }

    public function setDisciplina(string $disciplina):void
    {
        $this->disciplina = $disciplina;
    }

    public function getNivel(): array{
        return $this->nivel;
    }

    public function setNivel(array $nivel):void
    {
        $this->nivel = $nivel;
    }
}