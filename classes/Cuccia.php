<?php
//importo il file prodotti
require_once __DIR__ . "/Prodotti.php";

//estendo Cibo così che contenga i dati presenti in Prodotti
class Cuccia extends Prodotti
{
    public $brand;
    public $material;
    public $color;
    public $img;
    public $productDimensions;

    //passo come argomenti sia quelli presenti in questo file che gli argomenti contenuti nel file Prodotti
    public function __construct(string $_title, string $_img, $_price, string $_category)
    {
        $this->title = $_title;
        $this->img = $_img;
        $this->price = $_price;
        $this->category = $_category;
    }
}
