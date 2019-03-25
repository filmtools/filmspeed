<?php
namespace FilmTools\FilmSpeed;

interface FilmSpeedInterface
{
    /**
     * Returns the Film speed as DIN number.
     * Because the value may be calculated, this value is float.
     *
     * @return float DIN number
     */
    public function getDin() : float;

    /**
     * Returns the Film speed as ASA number.
     * Because the value may be calculated, this value is float.
     *
     * @return float ASA number
     */
    public function getAsa() : float;

    /**
     * Returns the Film speed as ISO-formatted string like "ISO 400/27°"
     *
     * @return string ISO film speed
     */
    public function getIso() : string;

}
