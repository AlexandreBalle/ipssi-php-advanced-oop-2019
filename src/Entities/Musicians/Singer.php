<?php

namespace src\Entities\Musicians;

class Singer
{
    /**
     * @var null|int
     */
    private $id = null;

    /**
     * @var string
     */
    private $name;


    public function rest()
    {
        // TODO: Implement rest() method.
    }

    public function play()
    {
        // TODO: Implement play() method.
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
}