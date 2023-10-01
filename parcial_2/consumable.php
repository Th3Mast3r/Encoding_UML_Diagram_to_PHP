<?php
require_once 'item.php';

class Consumable extends Item
{
    private bool $consumed;
    private bool $spoiled;

    public function __construct($name, $value, $weight, $spoiled)
    {
        parent::__construct($name, $value, $weight);

        $this->consumed = false;
        $this->spoiled = $spoiled;
    }

    public function eat()
    {
        if (!$this->consumed && !$this->spoiled) {
            return "No queda más de {$this->name} para consumir";
        }
        if ($this->spoiled) {
            return "Comiste el {$this->name}.\nTe empiezas a sentir mal.";
        }
        return "Comiste el {$this->name}.";
    }

    public function use()
    {
        return $this->eat();
    }

    public function setConsumed(bool $consumed)
    {
        $this->consumed = $consumed;
    }

    public function isConsumed()
    {
        return $this->consumed;
    }
}
?>