<?php

require_once __DIR__.'/vendor/autoload.php';


$customer = new Customer('Sanyi');

$movie = new Movie('Star Wars',0);
$movie2 = new Movie('Kill Bill',0);

$rental = new Rental($movie,4);
$rental2 = new Rental($movie2,4);

$customer->addRental($rental);
$customer->addRental($rental2);

echo $customer->statement();


