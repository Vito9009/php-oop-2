<?php
class Sala{
    protected $nome;
    protected $display;
    protected $audio;
    protected $posti;

    public function __construct($_nome, $_display, $_audio, $_posti){
        $this->nome = $_nome;
        $this->display = $_display;
        $this->audio = $_audio;
        $this->posti = $_posti;
    }
}
?>