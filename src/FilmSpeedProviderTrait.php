<?php
namespace FilmTools\FilmSpeed;

trait FilmSpeedProviderTrait
{

    /**
     * @var FilmSpeedInterface
     */
    protected $filmspeed;


    /**
     * Returns the Film speed.
     * @return FilmSpeedInterface
     */
    public function getFilmSpeed() : FilmSpeedInterface
    {
        return $this->filmspeed;
    }
}
