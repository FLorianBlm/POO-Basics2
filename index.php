<?php
// index.php
require_once 'Truk.php';

//create two truk
$basicTruk = new Truk("red", 3, "fuel", 0);
var_dump($basicTruk);

$secondTruk = new Truk("black", 2, "electric", 1000);
var_dump($secondTruk);

// Etat du chargement
echo '<br>' . $basicTruk->getStorageCapacity() . '<br>';
echo $secondTruk->getStorageCapacity() . '<br>';

// Forward Truk
echo $basicTruk->forward() . '<br>';

//gestion du chargement
echo $secondTruk->setStorageCapacity(1200) . '<br>';
echo $basicTruk->setStorageCapacity(600) . '<br>';
