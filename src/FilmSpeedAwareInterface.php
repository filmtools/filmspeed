<?php
namespace FilmTools\FilmSpeed;

interface FilmSpeedAwareInterface
{

    /**
     * Sets the Film speed.
     */
    public function setFilmSpeed( FilmSpeedInterface $filmspeed );
}
