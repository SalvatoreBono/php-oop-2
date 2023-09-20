<?php
//importo il file prodotti
require_once __DIR__ . "/Prodotti.php";

//estendo Cibo così che contenga i dati presenti in Prodotti
class Cuccia extends Prodotti
{
    protected $material;
    protected $color;
    protected $ProductDimensions;

    //passo come argomenti sia quelli presenti in questo file che gli argomenti contenuti nel file Prodotti
    public function __construct($_material, $_color, $_brand, $_title, $_price, $_productDimensions)
    {
        $this->material = $_material;
        $this->color = $_color;
        $this->ProductDimensions = $_productDimensions;
        //faccio il parent così che non sovrascrivo il construct del file Prodotti e passo sempre gli argomenti del file Prodotti
        parent::__construct($_title, $_brand, $_price);
    }
}
