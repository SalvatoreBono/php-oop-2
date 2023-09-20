<?php
//importo il file prodotti
require_once __DIR__ . "/Prodotti.php";

//estendo Cibo così che contenga i dati presenti in Prodotti
class Gioco extends Prodotti
{
    public $material;
    public $color;
    public $img;

    //passo come argomenti sia quelli presenti in questo file che gli argomenti contenuti nel file Prodotti
    public function __construct($_brand, $_title, $_price, $_img, $_material, $_color, $_category)
    {
        $this->brand = $_brand;
        $this->material = $_material;
        $this->color = $_color;
        $this->title = $_title;
        $this->price = $_price;
        $this->img = $_img;
        $this->category = $_category;
        //faccio il parent così che non sovrascrivo il construct del file Prodotti e passo sempre gli argomenti del file Prodotti
    }
}
