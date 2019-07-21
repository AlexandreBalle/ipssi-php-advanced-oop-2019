<?php

namespace src\Controllers;

use src\Entities\Concert;

class ConcertController {
    /**
     * @var Concert
     */
    private $concert;

    public function __construct(Concert $concert)
    {
        $this->concert = $concert;
    }

    public function defaultAction()
    {
        $this->concert->setName('Rock en Seine');

        $this->concert->addBands();

        $concert = $this->concert;
        if (file_exists("template/page_concert.php")) {
            include("template/page_concert.php");
        }
    }
}