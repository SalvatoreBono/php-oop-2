<?php
//importo il file prodotti
require_once __DIR__ . "/Prodotti.php";

//estendo Cibo così che contenga i dati presenti in Prodotti
class Cibo extends Prodotti
{
    protected $img;
    protected $age;
    protected $proteinSource;
    protected $pathologies;
    protected $typology;

    //passo come argomenti sia quelli presenti in questo file che gli argomenti contenuti nel file Prodotti
    public function __construct($_brand, $_title, $_age, $_price, $_category, $_img)
    {
        $this->age = $_age;
        $this->title = $_title;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->category = $_category;
        $this->img = $_img;

        //faccio il parent così che non sovrascrivo il construct del file Prodotti e passo sempre gli argomenti del file Prodotti
    }

    /**
     * Get the value of proteinSource
     */
    public function getProteinSource()
    {
        return $this->proteinSource;
    }

    /**
     * Set the value of proteinSource
     *
     * @return  self
     */
    public function setProteinSource($proteinSource)
    {
        $this->proteinSource = $proteinSource;

        return $this;
    }

    /**
     * Get the value of pathologies
     */
    public function getPathologies()
    {
        return $this->pathologies;
    }

    /**
     * Set the value of pathologies
     *
     * @return  self
     */
    public function setPathologies($pathologies)
    {
        $this->pathologies = $pathologies;

        return $this;
    }

    /**
     * Get the value of typology
     */
    public function getTypology()
    {
        return $this->typology;
    }

    /**
     * Set the value of typology
     *
     * @return  self
     */
    public function setTypology($typology)
    {
        $this->typology = $typology;

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
}
