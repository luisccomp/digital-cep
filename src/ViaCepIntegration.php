<?php

/**
 * This is an integration interface for Via Cep service api. This API integration make requests to via cep web api and
 * retrieve it's values.
 */
interface iViaCepIntegration
{
    /**
     * Get address information given a zip code. It returns an array like structure mapped by key => value.
     */
    public function getAddressByZipCode(string $zipCode): array;
}
