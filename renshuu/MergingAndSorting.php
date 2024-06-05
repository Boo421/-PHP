<?php
$numbers1 = [3, 1, 4, 1, 5];
$numbers2 = [9, 2, 6, 5, 3];
$mergedArray = array_merge($numbers1, $numbers2);
sort($mergedArray);
foreach ($mergedArray as $number) {
    echo $number . " ";
}

?>