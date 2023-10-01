<?php
require_once 'comparable.php';

abstract class Item implements Comparable
{
    public $numberOfItems = 0;
    public $id;
    public $value;
    public $name;
    public $weight;

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

    public function __toString(): string
    {
        return "{$this->name} - Valor: {$this->value}, Peso: {$this->weight}";
    }

    public static function reset(): void
    {
        self::$numberOfItems = 0;
    }


}
?>