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

    public function getDamage()
    {
        return $this->baseDamage + $this->damageModifier;
    }

    public function setDamage($baseDamage)
    {
        $this->baseDamage = $baseDamage;
    }

    public function getDurability()
    {
        return $this->baseDurability + $this->durabilityModifier;
    }

    public function setDurability($baseDurability)
    {
        $this->baseDurability = $baseDurability;
    }

    public function __toString()
    {
        return sprintf(
            '%s - Valor: %d, Peso: %d, Daño: %d, Durabilidad: %d%%',
            $this->getName(),
            $this->getValue(),
            $this->getWeight(),
            $this->baseDamage,
            $this->baseDurability
        );
    }

    public abstract function polish();

    public function use()
    {
        $effectiveDurability = $this->getDurability();
        if ($effectiveDurability <= 0) {
            $this->baseDurability -= self::MODIFIER_CHANGE_RATE;
            return "No puedes usar tu {$this->getName()}, está roto.";
        } else if ($effectiveDurability === 0.05) {
            $this->baseDurability -= self::MODIFIER_CHANGE_RATE;
            return "Usaste tu {$this->getName()}, haciendo {$this->baseDamage} puntos de daño.\nTu {$this->getName()} se rompió.";
        } else {
            $this->baseDurability -= self::MODIFIER_CHANGE_RATE;
            return "Usaste tu {$this->getName()}, haciendo {$this->baseDamage} puntos de daño.";
        }

    }
}
?>