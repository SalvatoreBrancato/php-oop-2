<?php
class Pet extends Prodotti{
    public $pet;

    public function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_pet ){
        parent::__construct($_nome, $_prezzo, $_immagine,$_categoria);
        $this->pet = $_pet;
    }
}
?>