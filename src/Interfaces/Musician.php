<?php

namespace src\Interfaces;

interface Musician
{
    public function getName();
    public function playInstrument();
    public function resting();
    public function playSolo();
    public function canSing();
}