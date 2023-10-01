<?php
require_once 'item.php';
require_once 'itemComparator.php';

class ItemWeightComparator implements ItemComparator
{
    public function compare(Item $first, Item $second): int
    {
        if ($first->getWeight() > $second->getWeight()) {
            return 1;
        }

        if ($first->getWeight() === $second->getWeight()) {
            return $first->compareTo($second);
        }

        return -1;
    }
}
?>