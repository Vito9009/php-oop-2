<?php
class Sala{
    public $nome;
    public $display;
    public $audio;
    public $posti;

    public function __construct($_nome, $_display, $_audio, $_posti){
        $this->nome = $_nome;
        $this->display = $_display;
        $this->audio = $_audio;
        $this->posti = $_posti;
    }

    public function getInfo(){
        return "<li><b>Nome sala:</b> {$this->nome}</li> <li><b>Grandezza display:</b> {$this->display} pollici</li> <li><b>Audio:</b> {$this->audio}</li> <li><b>Numero posti:</b> {$this->posti}</li>";
    }

    public function getNumeroPosti(){
        return $this->posti;
    }
}
?>