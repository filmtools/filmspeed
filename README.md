# FilmTools · FilmSpeed

**Interfaces, classes and traits for film speed information**



## Usage

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
