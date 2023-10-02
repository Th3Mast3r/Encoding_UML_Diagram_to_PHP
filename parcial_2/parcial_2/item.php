<?php
require_once 'comparable.php';

abstract class Item implements Comparable
{
    private static $numberOfItems = 0;
    private $id;
    private $value;
    private $name;
    private $weight;

    public static function getNumberOfItems(): int
    {
        return self::$numberOfItems;
    }

    protected function __construct($name, $value, $weight)
    {
        $this->name = $name;
        $this->value = $value;
        $this->weight = $weight;
        $this->id = self::$numberOfItems;
        self::$numberOfItems++;
    }

    public abstract function use();

    public function compareTo($other): int
    {
        if ($this->value > $other->value) {
            return 1;
        }

        if ($this->value === $other->value) {
            if ($this->name > $other->name) {
                return 1;
            }
        }

        return -1;
    }

    public function __toString()
    {
        return "{$this->name} - Valor: {$this->value}, Peso: {$this->weight}";
    }

    public static function reset()
    {
        self::$numberOfItems = 0;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(int $value)
    {
        $this->value = $value;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight(int $weight)
    {
        $this->weight = $weight;
    }
}
