<?php
require_once 'consumable.php';

class Pizza extends Consumable
{
    private $numberOfSlices;
    private $slicesEaten;
    private $spoiled;

    public function __construct($numberOfSlices, $spoiled)
    {
        parent::__construct('Pizza', $numberOfSlices, 0, false);

        $this->numberOfSlices = $numberOfSlices;
        $this->slicesEaten = 0;
        $this->spoiled= $spoiled;
    }

    public function eat()
    {
        if ($this->slicesEaten === $this->numberOfSlices) {
            return "No hay más pizza para comer.";
        }

        if ($this->spoiled) {
            return "Comiste una rebana de pizza. Te sientes enfermo";
        }

        $this->slicesEaten++;

        return "Comiste una rebana de pizza.";
    }

    public function use()
    {
        return $this->eat();
    }
}
?>