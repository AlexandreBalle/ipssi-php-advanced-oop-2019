<?php

namespace src\Entities;

use DateTime;

class Concert
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
     * @var datetime
     */
    public $date;

    /**
     * @var int
     */
    public $nbTicket;

    /**
     * @var array
     */
    public $bands =[];

    /**
     * @var Organiser
     */
    private $organiser;

    public function __construct(Organiser $organiser)
    {
        $this->organiser = $organiser;
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
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getNbTicket(): int
    {
        return $this->nbTicket;
    }

    /**
     * @param int $nbTicket
     */
    public function setNbTicket(int $nbTicket)
    {
        $this->nbTicket = $nbTicket;
    }

    /**
     * @return array
     */
    public function getBands(): array
    {
        return $this->bands;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function addBands()
    {
        $name = ["KISS", "Nirvana", "Motley Crue", "Queen", "Korn"];
        for ($i = 0; $i < \random_int(1,5); $i++) {
            $this->bands[] = new Band($name[$i]);
        }

        return $this->bands;
    }

    /**
     * @param array $bands
     */
    public function setBands(array $bands)
    {
        $this->bands = $bands;
    }

    /**
     * @return Organiser
     */
    public function getOrganiser(): Organiser
    {
        return $this->organiser;
    }
}