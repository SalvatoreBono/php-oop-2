<?php
//importo il file prodotti
require_once __DIR__ . "/Prodotti.php";

//estendo Cibo così che contenga i dati presenti in Prodotti
class Cuccia extends Prodotti
{
    protected $brand;
    protected $material;
    protected $color;
    protected $img;
    protected $productDimensions;

    //passo come argomenti sia quelli presenti in questo file che gli argomenti contenuti nel file Prodotti
    public function __construct(string $_title, string $_img, $_price, string $_category)
    {
        $this->title = $_title;
        $this->img = $_img;
        $this->price = $_price;
        $this->category = $_category;
    }

    /**
     * Get the value of brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of productDimensions
     */
    public function getProductDimensions()
    {
        return $this->productDimensions;
    }

    /**
     * Set the value of productDimensions
     *
     * @return  self
     */
    public function setProductDimensions($productDimensions)
    {
        $this->productDimensions = $productDimensions;

        return $this;
    }
}
