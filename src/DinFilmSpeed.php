<?php
namespace FilmTools\FilmSpeed;

use function FilmTools\MRounder\mround;

class DinFilmSpeed extends FilmSpeed implements FilmSpeedInterface
{


    const DIN_ASA_MAP = array(
        "−1" => "0.63",
        "0" => "0.75",
        "1" => "1",
        "2" => "1.25",
        "3" => "1.5",
        "4" => "2",
        "5" => "2.5",
        "6" => "3",
        "7" => "4",
        "8" => "5",
        "9" => "6",
        "10" => "8",
        "11" => "10",
        "12" => "12",
        "13" => "16",
        "14" => "20",
        "15" => "25",
        "16" => "32",
        "17" => "40",
        "18" => "50",
        "19" => "64",
        "20" => "80",
        "21" => "100",
        "22" => "125",
        "23" => "160",
        "24" => "200",
        "25" => "250",
        "26" => "320",
        "27" => "400",
        "28" => "500",
        "29" => "640",
        "30" => "800",
        "31" => "1000",
        "32" => "1250",
        "33" => "1600",
        "34" => "2000",
        "35" => "2500",
        "36" => "3200",
        "37" => "4000",
        "38" => "5000",
        "39" => "6400",
        "40" => "8000",
        "41" => "10000",
        "42" => "12500",
        "43" => "16000",
        "44" => "20000",
        "45" => "25000",
        "46" => "32000",
        "47" => "40000",
        "48" => "50000",
        "49" => "64000",
        "50" => "80000",
        "51" => "100000",
        "52" => "125000",
        "53" => "160000",
        "54" => "200000",
        "55" => "250000",
        "56" => "320000",
        "57" => "400000",
        "58" => "500000",
        "59" => "640000",
        "60" => "800000",
        "61" => "1000000",
        "62" => "1250000",
        "63" => "1600000",
        "64" => "2000000",
        "65" => "2500000",
        "66" => "3200000",
        "67" => "4000000"
    );


    /**
     * Requires a DIN ° value.
     * The related ASA value will be created internally.
     *
     * @param float $din Film speed DIN value.
     */
    public function __construct( float $din )
    {
        $this->din = $din;
        $this->asa = $this->lookupAsa( $din ) ?: $this->calculateAsa( $din );
    }


    /**
     * @param  mixed $din
     * @return int|FALSE
     */
    protected function lookupAsa( $din ) {
        $key = (string) round($din);
        return static::DIN_ASA_MAP[ $key ] ?? false;
    }


    /**
     * @param  mixed $din
     * @return float
     */
    protected function calculateAsa( $din ) {
        return mround(10**(($din - 1)/10) / 10, 0.5) * 10;
    }
}
