<?php
namespace FilmTools\FilmSpeed;

abstract class FilmSpeedAbstract implements FilmSpeedInterface
{

    /**
     * @var float
     */
    protected $din;


    /**
     * @var float
     */
    protected $asa;


    /**
     * @inheritDoc
     */
    public function getDin() : float
    {
        return $this->din;
    }


    /**
     * @inheritDoc
     */
    public function getAsa() : float
    {
        return $this->asa;
    }


    /**
     * @inheritDoc
     */
    public function getIso( ) : string
    {
        $din = $this->getDin( );
        $asa = $this->getAsa( );

        return sprintf("ISO %s/%s°", $asa, $din);
    }

}
