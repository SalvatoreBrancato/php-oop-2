<?php
class Prodotti{
    public $nome;
    public $prezzo;
    public $immagine;
    

    function __construct($_nome, $_prezzo, $_immagine){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->immagine = $_immagine;
        
    }

    public function setPrice( $valorePrice ){

        if($valorePrice < 15){
            throw new Exception( "Il valore del prezzo è minore di 15", 0);
        } else if($valorePrice > 60){
            throw new Exception( "Il valore del prezzo è maggiore di 60", 1);
        } else {
            return $this->prezzo = $valorePrice;
        }    
    }
}
?>