<?php

/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2017. 09. 27.
 * Time: 12:56
 */
class Rental
{
    private $movie;
    private $daysRented;

    public function __construct(Movie $movie, $daysRented)
    {
        $this->movie = $movie;
        $this->daysRented = $daysRented;
    }

    public function getMovie()
    {
        return $this->movie;
    }

    public function getDaysRented()
    {
        return $this->daysRented;
    }
}