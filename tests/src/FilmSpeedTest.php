<?php
namespace tests;

use FilmTools\FilmSpeed\FilmSpeed;

class FilmSpeedTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @dataProvider provideCtorArguments
     */
    public function testSimple( $asa, $din, $expected_iso, $rounded)
    {
        $sut = new FilmSpeed( $asa, $din);
        $this->assertEquals($asa, $sut->getAsa());
        $this->assertEquals($din, $sut->getDin());
        $this->assertEquals($expected_iso, $sut->getIso($rounded));
    }

    public function provideCtorArguments()
    {
        return array(
            [ 100,   21,   "ISO 100/21°",    false ],
            [ 100.2, 21.3, "ISO 100/21°",    "rounded" ],
            [ 100.2, 21.3, "ISO 100.2/21.3°", false ],

        );
    }


    /**
     * @dataProvider provideAsaArguments
     */
    public function testAsaGetter( $asa, $expected_asa, $rounded)
    {
        $din = 99;
        $sut = new FilmSpeed( $asa, $din);
        $this->assertEquals($expected_asa, $sut->getAsa( $rounded ));
    }

    public function provideAsaArguments()
    {
        return array(
            [ 100,   100,    false ],
            [ 99.8,  100,    "rounded" ],
        );
    }

    /**
     * @dataProvider provideDinArguments
     */
    public function testDinGetter( $din, $expected_din, $rounded)
    {
        $asa = 99;
        $sut = new FilmSpeed( $asa, $din);
        $this->assertEquals($expected_din, $sut->getDin( $rounded ));
    }

    public function provideDinArguments()
    {
        return array(
            [ 100,   100,    false ],
            [ 99.8,  100,    "rounded" ],
        );
    }
}
