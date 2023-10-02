<?php
require_once 'weapons.php';

class Bow extends Weapon
{
    public function __construct($baseDamage, $baseDurability, $value, $weight)
    {
        parent::__construct('Arco', $baseDamage, $baseDurability, $value, $weight);
    }

    public function polish()
    {
        if (($this->baseDamage / 100 * 25) > $this->damageModifier) {
            $this->baseDamage += self::MODIFIER_CHANGE_RATE;
            return "The sword has been polished: {$this->baseDamage}";
        }
    }
}
?>