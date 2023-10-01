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
            return "No queda más {$this->getName()} para consumir";
        }
        if ($this->spoiled) {
            return "Comiste tu {$this->getName()}.\nTe empiezas a sentir mal.";
        }
        return "Comiste tu {$this->getName()}.";
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

    public function isSpoiled()
    {
        return $this->spoiled;
    }
}
?>