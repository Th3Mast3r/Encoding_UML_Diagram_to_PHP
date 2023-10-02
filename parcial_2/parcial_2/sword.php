<?php
require_once 'weapons.php';

class Sword extends Weapon
{
    public $xhr;

    public function __construct($baseDamage, $baseDurability, $value, $weight)
    {
        parent::__construct('Espada', $baseDamage, $baseDurability, $value, $weight);
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