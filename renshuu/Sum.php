<?php
function sumArray($arr) {
    $sum = 0;
    foreach ($arr as $num) {
        $sum += $num;
    }
    return $sum;
}
$numbers = [1, 2, 3, 4, 5];
echo "配列の合計: " . sumArray($numbers);

?>