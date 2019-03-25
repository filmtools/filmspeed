<?php
namespace tests;

use FilmTools\FilmSpeed\AsaFilmSpeed;

class AsaFilmSpeedTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @dataProvider provideCtorArguments
     */
    public function testSimple( $asa, $expected_iso, $rounded)
    {
        $sut = new AsaFilmSpeed( $asa);
        $this->assertEquals($asa, $sut->getAsa());
        $this->assertEquals($expected_iso, $sut->getIso( $rounded ));
    }

    public function provideCtorArguments()
    {
        return array(
            [ 100,   "ISO 100/21°",   false ],
            [ 99.8,   "ISO 99.8/21°", false ],
            [ 99.8,   "ISO 100/21°", "rounded" ],

        );
    }

}
