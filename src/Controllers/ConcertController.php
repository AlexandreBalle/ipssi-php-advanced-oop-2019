<?php

namespace src\Controllers;

use src\Entities\Concert;
use src\Entities\Organiser;

class ConcertController {
    /**
     * @var Organiser
     */
    private $organiser;


    public function __construct(Organiser $organiser)
    {
        $this->organiser = $organiser;
    }

    public function defaultAction()
    {
        $concertName = [
            "Rock en Seine", "Lollapalooza",
            "HellFest", "Download Festival"
        ];

        for ($i = 0; $i < \random_int(1,4); $i++) {
            $concert = new Concert($this->organiser);
            $concert->setName($concertName[$i]);
            $concert->addBands();
            $concerts[] = $concert;
        }

        if (file_exists("template/page_concert.php")) {
            include("template/page_concert.php");
        }
    }
}