<?php

use kistasi\CountySeats;
use PHPUnit\Framework\TestCase;

class CountySeatsTest extends TestCase
{
    public function testAll()
    {
        $this->assertSame(
            [
                'Bács-Kiskun' => 'Kecskemét',
                'Baranya' => 'Pécs',
                'Békés' => 'Békéscsaba',
                'Borsod-Abaúj-Zemplén' => 'Miskolc',
                'Csongrád-Csanád' => 'Szeged',
                'Fejér' => 'Székesfehérvár',
                'Győr-Moson-Sopron' => 'Győr',
                'Hajdú-Bihar' => 'Debrecen',
                'Heves' => 'Eger',
                'Jász-Nagykun-Szolnok' => 'Szolnok',
                'Komárom-Esztergom' => 'Tatabánya',
                'Nógrád' => 'Salgótarján',
                'Pest' => 'Budapest',
                'Somogy' => 'Kaposvár',
                'Szabolcs-Szatmár-Bereg' => 'Nyíregyháza',
                'Tolna' => 'Szekszárd',
                'Vas' => 'Szombathely',
                'Veszprém' => 'Veszprém',
                'Zala' => 'Zalaegerszeg'
            ],
            CountySeats\CountySeats::all()
        );
    }

    public function testCities()
    {
        $this->assertSame(
            [
                'Kecskemét', 'Pécs', 'Békéscsaba', 'Miskolc', 'Szeged', 'Székesfehérvár', 'Győr', 'Debrecen', 'Eger',
                'Szolnok', 'Tatabánya', 'Salgótarján', 'Budapest', 'Kaposvár', 'Nyíregyháza', 'Szekszárd', 'Szombathely',
                'Veszprém', 'Zalaegerszeg'
            ],
            CountySeats\CountySeats::cities()
        );
    }

    public function testCounties()
    {
        $this->assertSame(
            [
                'Bács-Kiskun', 'Baranya', 'Békés', 'Borsod-Abaúj-Zemplén', 'Csongrád-Csanád', 'Fejér', 'Győr-Moson-Sopron',
                'Hajdú-Bihar', 'Heves', 'Jász-Nagykun-Szolnok', 'Komárom-Esztergom', 'Nógrád', 'Pest', 'Somogy',
                'Szabolcs-Szatmár-Bereg', 'Tolna', 'Vas', 'Veszprém', 'Zala'
            ],
            CountySeats\CountySeats::counties()
        );
    }

    public function testGetCityByCounty()
    {
        $this->assertSame('Szeged', CountySeats\CountySeats::getCityByCounty('Csongrád-Csanád'));
        $this->assertSame(null, CountySeats\CountySeats::getCityByCounty('something'));
    }

    public function testGetCountyByCity()
    {
        $this->assertSame('Csongrád-Csanád', CountySeats\CountySeats::getCountyByCity('Szeged'));
        $this->assertSame(null, CountySeats\CountySeats::getCountyByCity('something'));
    }
}
