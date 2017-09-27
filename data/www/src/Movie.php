<?php

/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2017. 09. 27.
 * Time: 12:56
 */
class Movie
{

    private $title;

    private $priceCode;

    public function __construct($title, $priceCode)
    {
        $this->title = $title;
        $this->priceCode = $priceCode;
    }

    public function getPriceCode()
    {
        return $this->priceCode;
    }

    public function setPriceCode($arg)
    {
        $this->priceCode = $arg;
    }

    public function getTitle()
    {
        return $this->title;
    }
}