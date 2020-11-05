<?php

require_once 'Personne.php';

$thierry = new Personne('DUFOSSE', 'Thierry', 'LORMONT', '1979-12-04');
var_dump($thierry->show());
echo '<br>';

$thierry->edit('1989-06-26');
var_dump($thierry->show());
echo '<br>';


echo($thierry->age('2050-06-14'));




