<?php
include_once __DIR__.'/classi/Sala.php';

class Sala4D extends Sala{
    public $effetti4D;

    public function __construct($_nome, $_display, $_audio, $_posti){
        parent::__construct($_nome, $_display, $_audio, $_posti);
            $this->effetti4D;
    }

}
?>