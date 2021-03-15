<?php declare(strict_types=1);

use Luisccomp\DigitalCep\Search;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    private function testData()
    {
        return [
            "01001000" => [
                "cep" => "01001-000",
                "logradouro" => "Praça da Sé",
                "complemento" => "lado ímpar",
                "bairro" => "Sé",
                "localidade" => "São Paulo",
                "uf" => "SP",
                "ibge" => "3550308",
                "gia" => "1004",
                "ddd" => "11",
                "siafi" => "7107"
            ]
        ];
    }

    public function testSearchByZipCode()
    {
        $this->assertSame($this->testData()["01001000"], (new Search())->getAddressByZipCode("01001-000"));
    }
}