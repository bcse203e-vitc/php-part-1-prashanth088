<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
function changeCase($arr, $toCase = 'lower') {
    if ($toCase === 'upper') {
        return array_map('strtoupper', $arr);
    } else {
        return array_map('strtolower', $arr);
    }
}
$lowerCase = changeCase($Color, 'lower');
echo "Values are in lower case.";
print_r($lowerCase);
$upperCase = changeCase($Color, 'upper');
echo "<br>Values are in upper case.";
print_r($upperCase);
?>
