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
        $this->durabilityModifier += self::MODIFIER_CHANGE_RATE;
    }
}
?>