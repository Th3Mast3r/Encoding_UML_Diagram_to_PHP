<?php
require_once 'item.php';
require_once 'itemComparator.php';
require_once 'itemWeightComparator.php';

class Inventory
{
    private array $items;

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    public function sort(ItemWeightComparator $comparator = null)
    {
        if ($comparator) {
            usort($this->items, [$comparator, 'compare']);
        } else {
            usort($this->items, function (Item $a, Item $b) {
                return $b->weight - $a->weight;
            });
        }
    }

    public function __toString()
    {
        return implode(', ', $this->items);
    }
}
?>