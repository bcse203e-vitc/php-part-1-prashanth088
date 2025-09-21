<?php
$people = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Ramesh"=>"40");
asort($people);
echo "a) Ascending order sort by value:";
foreach($people as $key => $value) {
    echo "$key => $value\n";
}
echo "<br>";
ksort($people);
echo "b) Ascending order sort by key:";
foreach($people as $key => $value) {
    echo "$key => $value\n";
}
echo "<br>";
arsort($people);
echo "c) Descending order sort by value:";
foreach($people as $key => $value) {
    echo "$key => $value\n";
}
echo "<br>";
krsort($people);
echo "d) Descending order sort by key:";
foreach($people as $key => $value) {
    echo "$key => $value\n";
}
?>
