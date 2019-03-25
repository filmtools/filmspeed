<?php
namespace tests;

use FilmTools\FilmSpeed\DinFilmSpeed;

class DinFilmSpeedTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @dataProvider provideCtorArguments
     */
    public function testSimple( $din, $expected_iso, $rounded)
    {
        $sut = new DinFilmSpeed( $din);
        $this->assertEquals($din, $sut->getDin());
        $this->assertEquals($expected_iso, $sut->getIso($rounded));
    }

    public function provideCtorArguments()
    {
        return array(
            [ 21,   "ISO 100/21°",    false ],
            [ 21.3, "ISO 100/21°",    "rounded" ],
            [ 20.8, "ISO 100/20.8°", false ],

        );
    }

}
