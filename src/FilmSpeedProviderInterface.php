<?php
namespace FilmTools\FilmSpeed;

interface FilmSpeedProviderInterface
{

    /**
     * Returns the Film speed.
     *
     * @return FilmSpeedInterface
     */
    public function getFilmSpeed() : FilmSpeedInterface;
}
