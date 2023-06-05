<?php
require_once __DIR__ . '/categoria.php';
require_once __DIR__ . '/prodotti.php';

class Pet extends Prodotti{

    use Categoria;

    public $pet;

    public function __construct($_nome, $_prezzo, $_immagine, $_pet, $_categoria ){
        parent::__construct($_nome, $_prezzo, $_immagine);
        $this->pet = $_pet;
        $this->categoria = $_categoria;
    }
}
?>