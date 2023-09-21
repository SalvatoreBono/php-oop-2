<?php
require_once __DIR__ . "../../traits/Localita.php";
class Prodotti
{
    use Localita;
    protected $title;
    protected $category;
    protected $brand;
    protected $price;

    // rendo obbligatorie il title e il price
    public function __construct(string $_title,  string $_brand, string  $_price)
    {
        $this->setTitle($_title);
        $this->brand = $_brand;
        $this->price = $_price;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        try {
            if (is_numeric($title)) {
                throw new Exception("Il titolo deve essere una stringa");
            } else {
                $this->title = $title;
                return $this;
            }
        } catch (Exception $e) {
            echo "<div class='alert alert-danger text-center display-5'>" . $e->getMessage() . "</div>";
        }
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
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
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
