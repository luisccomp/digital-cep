# Digital CEP

This is a simple PHP module that searchs brazillian address information given it's Zip Code. This is part
of PHP course from DIO where we learn how to create and publish PHP modules with composer and packagist.

## Usage

It's simple to use: just import package and then input zip code and await for response. `getAddressByZipCode` ignores any non numeric characters, that means dots and '-' are ignored at `$zipCode` string.

```php
<?php

use Luisccomp\DigitalCep\Search;

require_once 'vendor/autoload.php';

$search = new Search();

$resultado = $search->getAddressByZipCode('01001000');

print_r($resultado);
```

Output

```
Array
(
    [cep] => 01001-000
    [logradouro] => Praça da Sé
    [complemento] => lado ímpar
    [bairro] => Sé
    [localidade] => São Paulo
    [uf] => SP
    [ibge] => 3550308
    [gia] => 1004
    [ddd] => 11
    [siafi] => 7107
)
```