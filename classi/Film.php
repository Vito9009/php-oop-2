<?php
class Film{
    private $titolo;
    private $regista;
    private $genere;
    public $castAttori;

    public function __construct($_titolo, $_regista, $_genere, $_castAttori){
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->genere = $_genere;
        $this->castAttori = $_castAttori;
    }

    public function getTitolo(){
        return $this->titolo;
    }

    public function getRegista(){
        return $this->regista;
    }

    public function getGenere(){
        return $this->genere;
    }
}
?>