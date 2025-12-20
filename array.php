<?php
$fruits = ['apple', 10.1, 'mango', 123];
echo $fruits[0] . "<br>";
echo $fruits[1] . "<br><br>";

// change value & loop
$fruits[2] = 2.2;
foreach ($fruits as $f) {
    echo $f . " ";
}
echo "<br><br>";

//associative array with nested array & loop for nested array
$details = [
    'name' => 'Maria',
    'age' => 21,
    'hobby' => ['sleeping', 'eating']
];
echo $details['name'] . "<br>";

foreach ($details as $d => $k) {
    if (is_array($k)) {
        echo $d . ": " . implode(", ", $k) . "<br>";
    } else {
        echo $d . ": " . $k . "<br>";
    }
}
echo "<br><br>";

//array function
$array = ['ab', 'bc', 'cd'];
array_push($array, 'de', 'ef'); //end of the array
var_dump($array);
echo "<br>";

array_unshift($array, 'yo', 'yo'); //start of the array
var_dump($array);

$number = [1, 4, 5, 6, 3, 2];
sort($number); //sort in ascending
echo "<br>" . implode(' ', $number) . "<br>";

rsort($number); //sort in descending
echo implode(' ', $number) . "<br><br>";

// associative array sort
$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
asort($age); //ascending
foreach($age as $name=> $a) {
    echo $name. " ";
}
echo "<br>";

arsort($age); //descending
foreach($age as $name=> $a) {
    echo $name. " ";
}