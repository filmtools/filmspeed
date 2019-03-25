<?php
namespace FilmTools\FilmSpeed;

class AsaFilmSpeed extends FilmSpeed implements FilmSpeedInterface
{

    const ASA_DIN_MAP = array(
               "0.63"   => "−1",
               "0.75"   => "0",
               "1"      => "1",
               "1.25"   => "2",
               "1.5"    => "3",
               "2"      => "4",
               "2.5"    => "5",
               "3"      => "6",
               "4"      => "7",
               "5"      => "8",
               "6"      => "9",
               "8"      => "10",
              "10"      => "11",
              "12"      => "12",
              "16"      => "13",
              "20"      => "14",
              "25"      => "15",
              "32"      => "16",
              "40"      => "17",
              "50"      => "18",
              "64"      => "19",
              "80"      => "20",
             "100"      => "21",
             "125"      => "22",
             "160"      => "23",
             "200"      => "24",
             "250"      => "25",
             "320"      => "26",
             "400"      => "27",
             "500"      => "28",
             "640"      => "29",
             "800"      => "30",
            "1000"      => "31",
            "1250"      => "32",
            "1600"      => "33",
            "2000"      => "34",
            "2500"      => "35",
            "3200"      => "36",
            "4000"      => "37",
            "5000"      => "38",
            "6400"      => "39",
            "8000"      => "40",
           "10000"      => "41",
           "12500"      => "42",
           "16000"      => "43",
           "20000"      => "44",
           "25000"      => "45",
           "32000"      => "46",
           "40000"      => "47",
           "50000"      => "48",
           "64000"      => "49",
           "80000"      => "50",
          "100000"      => "51",
          "125000"      => "52",
          "160000"      => "53",
          "200000"      => "54",
          "250000"      => "55",
          "320000"      => "56",
          "400000"      => "57",
          "500000"      => "58",
          "640000"      => "59",
          "800000"      => "60",
         "1000000"      => "61",
         "1250000"      => "62",
         "1600000"      => "63",
         "2000000"      => "64",
         "2500000"      => "65",
         "3200000"      => "66",
         "4000000"      => "67"
    );


    /**
     * Requires an ASA value.
     * The related DIN ° number will be created internally.
     *
     * @param float $asa Film speed ASA value.
     */
    public function __construct( float $asa )
    {
        $this->asa = $asa;
        $this->din = $this->lookupDin( $asa ) ?: $this->calculateDin( $asa );
    }



    /**
     * @param  mixed $asa
     * @return int|FALSE
     */
    protected function lookupDin( $asa ) {
        $key = (string) round($asa);
        return static::ASA_DIN_MAP[ $key ] ?? false;
    }

    /**
     * @param  mixed $asa
     * @return float
     */
    protected function calculateDin( $asa ) : float {
        // DIN = 21° + 10° · log(ASA/100)
        $din = 21 + 10 * log10( $asa / 100);
        return round($din);
    }
}
