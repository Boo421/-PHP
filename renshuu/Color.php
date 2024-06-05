<?php
$color = ["Red","Green","Blue","Yellow","Purple"];
array_push($color, "Orange");
array_shift($color);
foreach ( $color as $color )  {
    echo $color . "\n";
}

?>