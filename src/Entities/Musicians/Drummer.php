<?php

namespace src\Entities\Musicians;

use src\Interfaces\Musician;

class Drummer extends Singer implements Musician
{
    /**
     * @var null|int
     */
    private $id = null;

    /**
     * @var string
     */
    private $name = "Lucas";

    /**
     * @var string
     */
    private $role = "Batteur";

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
     * @param int|null $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function canSing()
    {
        if (rand(0, 1)) {
            return $this->sing();
        }

        return false;
    }
}