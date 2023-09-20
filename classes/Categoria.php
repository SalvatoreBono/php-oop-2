<?php
class Categoria
{
    protected $race;
    protected $longevity;
    protected $color;

    // rendo obbligatorie il title e il price
    public function __construct($_race, $_longevity, $_color)
    {
        $this->race = $_race;
        $this->longevity = $_longevity;
        $this->color =  $_color;
    }
}
