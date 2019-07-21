<?php

namespace src\Entities\Musicians;

use src\Interfaces\Musician;

class Singer implements Musician
{
    /**
     * @var string
     */
    private $name = "Josephine";

    /**
     * @var string
     */
    private $role = "Chanteuse";

    /**
     * @return boolean
     */
    public function sing()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function playInstrument()
    {
        // TODO: Implement playInstrument() method.
    }

    public function resting()
    {
        // TODO: Implement resting() method.
    }

    public function playSolo()
    {
        // TODO: Implement playSolo() method.
    }

    public function canSing()
    {
        // TODO: Implement canSing() method.
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
}