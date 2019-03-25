# FilmTools · FilmSpeed

**Interfaces, classes and traits for film speed information**

[![Packagist](https://img.shields.io/packagist/v/filmtools/filmspeed.svg?style=flat)](https://packagist.org/packages/filmtools/filmspeed)
[![PHP version](https://img.shields.io/packagist/php-v/filmtools/filmspeed.svg)](https://packagist.org/packages/filmtools/filmspeed)
[![Build Status](https://img.shields.io/travis/filmtools/filmspeed.svg?label=Travis%20CI)](https://travis-ci.org/filmtools/filmspeed)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/filmtools/filmspeed/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/filmtools/filmspeed/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/filmtools/filmspeed/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/filmtools/filmspeed/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/filmtools/filmspeed/badges/build.png?b=master)](https://scrutinizer-ci.com/g/filmtools/filmspeed/build-status/master)



## FilmSpeed classes

```php
<?php
use FilmTools\FilmSpeed\AsaFilmSpeed;
use FilmTools\FilmSpeed\DinFilmSpeed;

$asa = 100;
$s1 = new AsaFilmSpeed( $asa );
$s1->getAsa(); // 100
$s1->getDin(); // 21
$s1->getIso(); // "ISO 100/21°"

$din = 27;
$s2 = new DinFilmSpeed( $din );
$s2->getAsa(); // 400
$s2->getDin(); // 27
$s2->getIso(); // "ISO 400/27°"
```



## Interfaces

### FilmSpeedProviderInterface

```php
use FilmTools\FilmSpeed\FilmSpeedProviderInterface;

/**
 * Returns the Film speed.
 */
public function getFilmSpeed() : FilmSpeedInterface;
```



### FilmSpeedAwareInterface

```php
use FilmTools\FilmSpeed\FilmSpeedAwareInterface;

// Sets the Film speed.
public function setFilmSpeed( FilmSpeedInterface $filmspeed );
```



### FilmSpeedInterface

```php
use FilmTools\FilmSpeed\FilmSpeedInterface;

// Returns the Film speed as DIN number.
// Because the value may be calculated, this value is float.
public function getDin() : float;

// Returns the Film speed as ASA number.
//Because the value may be calculated, this value is float.
public function getAsa() : float;

// Returns the Film speed as ISO-formatted string like "ISO 400/27°"
public function getIso() : string;
```
