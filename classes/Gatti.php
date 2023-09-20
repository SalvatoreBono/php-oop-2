<?php
//importo il file prodotti
require_once __DIR__ . "/Categoria.php";

//estendo Cibo così che contenga i dati presenti in Prodotti
class Gatti extends Categoria
{
    protected $img;

    //passo come argomenti sia quelli presenti in questo file che gli argomenti contenuti nel file Prodotti
    public function __construct($_img, $_race, $_longevity, $_color)
    {
        $this->img = $_img;
        //faccio il parent così che non sovrascrivo il construct del file Prodotti e passo sempre gli argomenti del file Prodotti
        parent::__construct($_race, $_longevity, $_color);
    }
}
