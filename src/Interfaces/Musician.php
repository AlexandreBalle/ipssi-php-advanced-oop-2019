<?php

namespace App\Entities\Musicians;

interface Musician
{
    public function playInstrument();
    public function resting();
    public function playSolo();
}