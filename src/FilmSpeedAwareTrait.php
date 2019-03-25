<?php
namespace FilmTools\FilmSpeed;

trait FilmSpeedAwareTrait
{
    use FilmSpeedProviderTrait;

    /**
     * Sets the Film speed.
     */
    public function setFilmSpeed( FilmSpeedInterface $filmspeed )
    {
        $this->filmspeed = $filmspeed;
    }
}
