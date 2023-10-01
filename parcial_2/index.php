<!DOCTYPE html>
<html>
<head>
  <title>Inventario</title>
</head>
<body>

<?php
require_once 'inventory.php';
require_once 'item.php';
require_once 'sword.php';
require_once 'itemWeightComparator.php';
require_once 'pizza.php';
require_once 'weapons.php';
require_once 'bow.php';

$inventory = new Inventory();

$a = new Sword(30.4219, 0.05, 300, 2.032);
$b = new Consumable("Poción", 150, 1.02, true);
$c = new Bow(20, 0.05, 450, 13.01);
$pizza = new Pizza(12, false);

$inventory->addItem($a);
$inventory->addItem($b);
$inventory->addItem($c);
$inventory->addItem($pizza);
?>

<hr>
<h2>Inventario</h2>
<pre><?php echo $inventory->__toString() . PHP_EOL; ?></pre>

<hr>
<h2>Inventario ordenado por orden natural</h2>
<?php echo $inventory->sort(); ?>
<pre><?php echo $inventory->__toString() . PHP_EOL; ?></pre>

<hr>
<h2>Inventario ordenado por peso</h2>
<?php echo $inventory->sort(new ItemWeightComparator()); ?>
<pre><?php echo $inventory->__toString() . PHP_EOL; ?></pre>

<hr>
<h2>Uso de la espada</h2>
<pre><?php echo $a->use()  ?></pre>

<hr>
<h2>Uso del arco</h2>
<pre><?php echo $c->use() . PHP_EOL; ?></pre>

<hr>
<h2>Uso del arco</h2>
<pre><?php echo $c->use() . PHP_EOL; ?></pre>

<hr>
<h2>Inventario</h2>
<pre><?php echo $inventory->__toString() . PHP_EOL; ?></pre>

<hr>
<h2>Numero de Items en el inventario</h2>
<pre><?php echo $inventory->getNumberOfItems() ?></pre>


</body>
</html>