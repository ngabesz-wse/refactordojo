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

echo '<br/> ---------------------------------- <br/>';

$geza = new Customer('Géza');

$movie3 = new Movie('Baywatch',1);
$movie4 = new Movie('Thomas a gőzmozdony',2);

$rental3 = new Rental($movie3,2);
$rental4 = new Rental($movie4,6);

$geza->addRental($rental3);
$geza->addRental($rental4);

echo $geza->statement();


