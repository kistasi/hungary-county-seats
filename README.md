# County Seats

A simple library to matching Hungarian cities and counties.

## Usage
### Get all counties and cities
```php
use kistasi\CountySeats;

$all = CountySeats\CountySeats::all();
var_dump($all);
```

### Get counties
```php
use kistasi\CountySeats;

$counties = CountySeats\CountySeats::counties();
var_dump($counties);
```

### Get cities
```php
use kistasi\CountySeats;

$cities = CountySeats\CountySeats::cities();
var_dump($cities);
```

### Get city by county
```php
use kistasi\CountySeats;

$city = CountySeats\CountySeats::getCityByCounty('Heves');
var_dump($city); // Eger
```

### Get county by city
```php
use kistasi\CountySeats;

$county = CountySeats\CountySeats::getCountyByCity('Eger');
var_dump($county); // Heves
```

## Install package
You can install this package with Composer:
```
composer require kistasi/hungary-county-seats
```
## License
This project is using MIT license.
