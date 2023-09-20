<?php
//importo il file prodotti
require_once __DIR__ . "/Prodotti.php";

//estendo Cibo così che contenga i dati presenti in Prodotti
class Cibo extends Prodotti
{
    protected $age;
    public $proteinSource;
    public $pathologies;
    public $typology;

    //passo come argomenti sia quelli presenti in questo file che gli argomenti contenuti nel file Prodotti
    public function __construct($_brand, $_title, $_age, $_price)
    {
        $this->age = $_age;
        //faccio il parent così che non sovrascrivo il construct del file Prodotti e passo sempre gli argomenti del file Prodotti
        parent::__construct($_title, $_brand, $_price);
    }
}
