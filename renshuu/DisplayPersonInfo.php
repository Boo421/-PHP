<?php
function displayPersonInfo($person) {
    echo "Name: " . $person['name'] . ", Age: " . $person['age'] . ", City: " . $person['city'];
}

$person = [
    'name' => 'An',
    'age' => 20,
    'city' => 'Kyoto'
];
displayPersonInfo($person);
?>