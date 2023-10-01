<?php
require_once 'weapons.php';

class Sword extends Weapon
{
    public function __construct($baseDamage, $baseDurability, $value, $weight)
    {
        parent::__construct('Espada', $baseDamage, $baseDurability, $value, $weight);
    }

    public function polish()
    {
        if (($this->baseDamage / 100 *25) > $this->damageModifier) {
            $this->damageModifier += self::MODIFIER_CHANGE_RATE;
        }
    }
}
?>