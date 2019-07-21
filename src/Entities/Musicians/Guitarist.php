<?php

namespace src\Entities\Musicians;

use src\Interfaces\Musician;

class Guitarist extends Singer implements Musician
{
    /**
     * @var null|int
     */
    private $id = null;

    /**
     * @var string
     */
    private $name = "Alexandre";

    /**
     * @var string
     */
    private $role = "Guitariste";

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

    /**
     * @return int|null
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    public function canSing()
    {
        if (rand(0, 1)) {
            return $this->sing();
        }

        return false;
    }
}