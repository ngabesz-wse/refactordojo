<?php

/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 2017. 09. 27.
 * Time: 12:53
 */
class Customer
{
    private $name;
    private $rentals = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addRental(Rental $arg)
    {
        $this->rentals[] = $arg;
    }

    public function getName()
    {
        return $this->name;
    }

    public function statement()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $rentals = $this->rentals;

        $result = "Rental records for {$this->getName()}: <br/>";

        /** @var Rental $rental */
        foreach ($rentals as $rental) {
            $thisAmount = 0;

            switch ($rental->getMovie()->getPriceCode()) {
                case 0 :
                    if ($rental->getDaysRented() > 2) {
                        // first two days
                        $thisAmount += 2 * 2;
                        $thisAmount += ($rental->getDaysRented() - 2) * 1.5;
                    } else {
                        $thisAmount += $rental->getDaysRented() * 2;
                    }
                    break;
                case 1 :
                    $thisAmount += $rental->getDaysRented() * 3;
                    break;
                case 2 :
                    if ($rental->getDaysRented() > 3) {
                        $thisAmount += 3 * 1.5;
                        $thisAmount += ($rental->getDaysRented() - 3) * 1;
                    } else {
                        $thisAmount += $rental->getDaysRented() * 1.5;
                    }
                    break;
            }

            // add renter points
            $frequentRenterPoints++;

            // add bonus for a two days new release rental
            if (($rental->getMovie()->getPriceCode() == 1) &&
                ($rental->getDaysRented() > 1)
            ) {
                $frequentRenterPoints++;
            }

            // show figures for this rental
            $result .= "{$rental->getMovie()->getTitle()} cost: {$thisAmount} <br/>";

            $totalAmount += $thisAmount;
        }

        $result .= "Total Rental cost is {$totalAmount} <br/>";
        $result .= "You earned {$frequentRenterPoints} renter points";

        return $result;
    }
}