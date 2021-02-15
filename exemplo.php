<?php

use Luisccomp\DigitalCep\Search;

require_once 'vendor/autoload.php';

$search = new Search;

$resultado = $search->getAddressByZipCode('01001000');

print_r($resultado);