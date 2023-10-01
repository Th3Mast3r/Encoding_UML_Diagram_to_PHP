<?php
require_once 'item.php';
require_once 'comparator.php';

interface ItemComparator extends Comparator
{
    public function compare(Item $first, Item $second): int;
}
?>