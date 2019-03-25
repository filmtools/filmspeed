<?php
namespace FilmTools\FilmSpeed;

class FilmSpeed extends FilmSpeedAbstract implements FilmSpeedInterface
{

    /**
     * @param int|float $asa ASA value
     * @param int|float $din DIN value
     */
    public function __construct( $asa, $din)
    {
        if (is_numeric($asa)):
            $this->asa = $asa;
        else:
            throw new \InvalidArgumentException("Numeric ASA value expected");
        endif;

        if (is_numeric($din)):
            $this->din = $din;
        else:
            throw new \InvalidArgumentException("Numeric DIN value expected");
        endif;
    }


    /**
     * Returns a string representation, for example: "ISO 200/24°"
     * @return string [description]
     */
    public function __toString()
    {
        return $this->getIso( "rounded" );
    }


    /**
     * @param bool $rounded Optional: round value; default is FALSE
     * @inheritDoc
     */
    public function getDin( $rounded = false) : float
    {
        $din = parent::getDin();
        return $rounded ? round($din) : $din;
    }


    /**
     * @param bool $rounded Optional: round value; default is FALSE
     * @inheritDoc
     */
    public function getAsa( $rounded = false) : float
    {
        $asa = parent::getAsa();
        return $rounded ? round($asa) : $asa;
    }


    /**
     * @param bool $rounded Optional: round value; default is TRUE
     * @inheritDoc
     */
    public function getIso( $rounded = true ) : string
    {
        $din = $this->getDin( $rounded );
        $asa = $this->getAsa( $rounded );

        return sprintf("ISO %s/%s°", $asa, $din);
    }
}
