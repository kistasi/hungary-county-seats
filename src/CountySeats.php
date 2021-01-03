<?php

namespace kistasi\CountySeats;

class CountySeats
{
    const COUNTY_CITY_MAP = [
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
    ];

    public static function all(): array
    {
        return static::COUNTY_CITY_MAP;
    }

    public static function counties(): array
    {
        return array_keys(static::COUNTY_CITY_MAP);
    }

    public static function cities(): array
    {
        return array_values(static::COUNTY_CITY_MAP);
    }

    public static function getCityByCounty(string $county): ?string
    {
        if (array_key_exists($county, static::COUNTY_CITY_MAP)) {
            return static::COUNTY_CITY_MAP[$county];
        }

        return null;
    }

    public static function getCountyByCity(string $county): ?string
    {
        if (array_key_exists($county, array_flip(static::COUNTY_CITY_MAP))) {
            return array_flip(static::COUNTY_CITY_MAP)[$county];
        }

        return null;
    }
}
