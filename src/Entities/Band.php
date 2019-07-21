<?php

namespace src\Entities;

use App\Interfaces\Musician;
use src\Entities\Musicians\Bassist;
use src\Entities\Musicians\Drummer;
use src\Entities\Musicians\Guitarist;
use src\Entities\Musicians\Singer;

class Band
{
    /**
     * @var null|int
     */
    public $id = null;

    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $members = [];


    public function __construct(string $name =null)
    {
        $this->name = $name;
        $this->addMembers();
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
     * @return array
     */
    public function getMembers(): array
    {
        return $this->members;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function addMembers()
    {
        $name = [Bassist::class, Guitarist::class, Drummer::class, Singer::class];
        for ($i = 0; $i < \random_int(1,5); $i++) {
            $this->members[] = new $name[$i];
        }

        return $this->members;
    }
}