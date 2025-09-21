<?php
$array = [1, 2, 3, 4, 5];
echo "Original array:<br>";
echo implode(" ", $array) . "<br>";
array_splice($array, 3, 0, '$');
echo "After inserting '$' the array is:<br>";
echo implode(" ", $array) . "\n";
?>
