<?php

namespace src\Entities\Musicians;

class Guitarist extends Singer
{
    /**
     * @var null|int
     */
    private $id = null;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $instrument = "guitar";

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getInstrument(): string
    {
        return $this->instrument;
    }

    /**
     * @param string $instrument
     */
    public function setInstrument(string $instrument)
    {
        $this->instrument = $instrument;
    }
}