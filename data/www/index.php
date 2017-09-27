<?php

require_once __DIR__.'/vendor/autoload.php';


//const CHILDREN = 2;
//const REGULAR = 0;
//const NEW_RELEASE = 1;

// videótéka szabályzat
// az átlagos filmek 2 dollárba kerülnek naponta, a második nap után 1.5 dollárba és 1 hűsegpont jár utánuk
// a legújabb filmek 3 dollárba kerülnek naponta, és 2 hűségpont jár utánuk
// a gyerek filmek 1.5 dollárba kerülnek naponta, a harmadik nap után 1 dollárba és 1 hűsegpont jár utánuk


// be akarják vezetni a felnőtt filmeket is
// aminek a bérleti díjja 3 ba kerül de lehet egy napnál kevesebb időre is bérelni ilyenkor 1,5 dollár
// ha több mint egy napra bérled akkor kapsz érte 2 hűségpontot


$customer = new Customer('Sanyi');

$movie = new Movie('Star Wars',0);
$movie2 = new Movie('Kill Bill',0);

$rental = new Rental($movie,4);
$rental2 = new Rental($movie2,4);

$customer->addRental($rental);
$customer->addRental($rental2);

echo $customer->statement();


