<?php
class Spettacolo{
    public $sala;
    public $data;
    public $ora;
    public $film;

    public function __construct($_sala, $_data, $_ora, $_film){
        $this->sala = $_sala;
        $this->data = $_data;
        $this->ora = $_ora;
        $this->film = $_film;
    }
}
?>