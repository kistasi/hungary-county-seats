<?php

namespace CountySeats;

class CountySeats
{
    const MAP = [
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
        return static::MAP;
    }

    public static function counties(): array
    {
        return array_keys(static::MAP);
    }

    public static function cities(): array
    {
        return array_values(static::MAP);
    }

    public static function getCityByCounty(string $county): ?string
    {
        if (array_key_exists($county, static::MAP)) {
            return static::MAP[$county];
        }

        return null;
    }

    public static function getCountyByCity(string $county): ?string
    {
        $map = array_flip(static::MAP);
        if (array_key_exists($county, $map)) {
            return array_flip(static::MAP)[$county];
        }

        return null;
    }
}
