<?php
// core_cool_sort_stable.php
require __DIR__ . '/src/Application/Sort/Test.php';
use Application\Sort\Test;
$arr = Test::build();
usort($arr, function ($a, $b) { return $a->name <=> $b->name; });
// In PHP 7 the ID values are all over the place
// In PHP 8 the IDs respect the original order assigned
echo "\nSorted by Name\n";
echo "NOTE: sort() wipes out the original keys\n";
echo Test::show($arr);
