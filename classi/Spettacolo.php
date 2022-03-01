<?php
class Spettacolo{
    private $sala;
    private $data;
    private $ora;
    private $film;

    public function __construct($_sala, $_data, $_ora, $_film){
        $this->sala = $_sala;
        $this->data = $_data;
        $this->ora = $_ora;
        $this->film = $_film;
    }

    public function getSala(){
        return $this->sala;
    }

    public function getData(){
        return $this->data;
    }

    public function getOra(){
        return $this->ora;
    }

    public function getFilm(){
        return $this->film;
    }
}
?>