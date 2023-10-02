<?php
interface Comparator {
    public function compare(Item $first, Item $second): int;
}
?>