<?php
require_once 'item.php';

abstract class Weapon extends Item
{
    const MODIFIER_CHANGE_RATE = 0.05;

    protected $baseDamage;
    protected $damageModifier;
    protected $baseDurability;
    protected $durabilityModifier;

    public function __construct($name, $baseDamage, $baseDurability, $value, $weight)
    {
        parent::__construct($name, $value, $weight);

        $this->baseDamage = $baseDamage;
        $this->damageModifier = 0;
        $this->baseDurability = $baseDurability;
        $this->durabilityModifier = 0;
    }

    public function getDamage(): int
    {
        return $this->baseDamage + $this->damageModifier;
    }

    public function getDurability()
    {
        return $this->baseDurability + $this->durabilityModifier;
    }

    public function __toString(): string
    {
        return sprintf(
            '%s - Valor: %d, Peso: %d, Daño: %d, Durabilidad: %d%%',
            $this->name,
            $this->value,
            $this->weight,
            $this->baseDamage,
            $this->baseDurability
        );
    }

    public function use()
    {
        $effectiveDurability = $this->getDurability();
        if ($effectiveDurability <= 0) {
            $this->baseDurability -= self::MODIFIER_CHANGE_RATE;
            return "No puedes usar tu {$this->name}, está roto.";
        } else if ($effectiveDurability === 0.05) {
            $this->baseDurability -= self::MODIFIER_CHANGE_RATE;
            return "Usaste tu {$this->name}, haciendo {$this->baseDamage} puntos de daño.\nTu {$this->name} se rompió.";
        } else {
            $this->baseDurability -= self::MODIFIER_CHANGE_RATE;
            return "Usaste tu {$this->name}, haciendo {$this->baseDamage} puntos de daño.";
        }

    }
}
?>