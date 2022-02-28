<?php
include_once __DIR__.'/classi/Sala.php';

class Sala4D extends Sala{
    public $effetti4D;

    public function __construct($_nome, $_display, $_audio, $_posti, $_effetti4D){
        parent::__construct($_nome, $_display, $_audio, $_posti);
            $this->effetti4D = $_effetti4D;
    }


}
?>