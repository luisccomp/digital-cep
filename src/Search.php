<?php

namespace Luisccomp\DigitalCep;

use Exception;

class Search
{
    private string $url = 'https://viacep.com.br/ws/';

    /**
     * Given a zip code, this method will return detailed address information from a address service API. The return 
     * will be at key => value form.
     */
    public function getAddressByZipCode(string $zipCode)
    {
        if (strlen($zipCode) == 0)
            throw new Exception('$zipCode cannot be an empty string!');

        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        return (array) json_decode(file_get_contents($this->url . $zipCode . '/json'));
    }
}