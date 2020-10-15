<?php

require_once "Vehicule.php";

class Truk extends Vehicle
{
    const ALLOWED_ENERGIES_TRUKS = [
        'fuel',
        'electric',
    ];

    const STORAGE_FULL = 1000;
    const INCREASE_SPEED = 15;

    // Les paramètres

    /**
     * @var integer
     */
    private $storageCapacity;

    /**
     * @var string
     */
    private $energy;

    //les méthodes

    /**
     * construct Truk
     */
    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @param interger
     */
    public function setStorageCapacity(int $storageCapacity)
    {
        if ($storageCapacity >= self::STORAGE_FULL) {
            $this->storageCapacity = self::STORAGE_FULL;
            return 'it\'s full!!';
        } else {
            $this->storageCapacity = $storageCapacity;
            return 'We can put it more!';
        }
    }

    /**
     * @return interger
     */
    public function getStorageCapacity(): string
    {
        $messageStorage ="";
        if ($this->storageCapacity >= self::STORAGE_FULL) {
            $messageStorage = "Full";
        } else {
            $messageStorage = "in filling";
        }
        return $messageStorage;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @var string
     */
    public function setEnergy(string $energy): Truk
    {
        if (in_array($energy, self::ALLOWED_ENERGIES_TRUKS)) {
            $this->energy = $energy;
        }
        return $this;
    }
}