<?php
declare(strict_types=1);

// =======================================
// Arrays in PHP
// =======================================


// -------------------------
// Indexed Arrays
// -------------------------

$scores1 = [90, 40, 100]; // Indexes: 0, 1, 2

foreach ($scores1 as $score) {
    echo "Score: $score" . PHP_EOL;
}

// print_r() for displaying the structure of the entire array
print_r($scores1);

// -------------------------
// Associative Arrays
// -------------------------

$scores2 = ['first' => 90, 'second' => 40];

// Accessing individual values using keys directly
echo "Score of 'first': " . $scores2['first'] . PHP_EOL;
echo "Score of 'second': " . $scores2['second'] . PHP_EOL;

// Looping through all key-value pairs using foreach
foreach ($scores2 as $key => $score) {
    echo "$key - $score" . PHP_EOL;
}


// -------------------------
// Multidimensional Arrays
// -------------------------

$students = [
    ['name' => 'Max', 'score' => 80],
    ['name' => 'Erika', 'score' => 95],
];

foreach ($students as $student) {
    echo $student['name'] . ' scored ' . $student['score'] . PHP_EOL;
}


// -------------------------
// Spread Operator (PHP 7.4+)
// -------------------------

$moreScores = [60, 70];

// ✅ Using spread operator
// This creates a flat array: [90, 40, 60, 70, 100]
$scores3 = [90, 40, ...$moreScores, 100];
print_r($scores3);

// ❌ Without spread operator
// This creates a nested array: [90, 40, [60, 70], 100]
$scoresNested = [90, 40, $moreScores, 100];
print_r($scoresNested);


// -------------------------
// Variadic Parameters & Destructuring
// -------------------------

// The '...' before $numbers means this function accepts any number of arguments.
// These arguments are collected into an array named $numbers.
function getStats(...$numbers): array {
    $total = array_sum($numbers);
    $average = $total / count($numbers);
    return [$total, $average];
}

[$sum, $average] = getStats(1, 3, 5);

echo "Sum: $sum, Average: $average" . PHP_EOL;


// =======================================
// Array Functions in PHP
// =======================================


// -------------------------
// array_push
// -------------------------

$colors = ['red', 'blue'];

// array_push(array, value1, value2, ...);
// Appends one or more values to the end of the array
array_push($colors, 'green', 'yellow');
print_r($colors);


// -------------------------
// array_merge (indexed array)
// -------------------------

$array1 = [1, 2];
$array2 = [3, 4];
// Combines multiple arrays into one
$merged = array_merge($array1, $array2);
print_r($merged);

// -------------------------
// array_merge (associative array)
// -------------------------

$user1 = ['name' => 'Max', 'email' => 'max@example.com'];
$user2 = ['email' => 'new@example.com', 'age' => 30];

// array_merge() for associative arrays:
// If keys are duplicated, later values will overwrite earlier ones
$mergedAssoc = array_merge($user1, $user2);

print_r($mergedAssoc);

// -------------------------
// array_filter
// -------------------------

$numbers1 = [1, 2, 3, 4, 5, 6];

// array_filter(array, callback)
// Only values for which the callback returns true are kept
$even = array_filter($numbers1, fn($n) => $n % 2 === 0);
print_r($even);


// -------------------------
// array_map
// -------------------------

$numbers2 = [1, 2, 3];

// array_map(callback, array)
// Returns a new array with the transformed values
$squared = array_map(fn($n) => $n * $n, $numbers2);
print_r($squared);


// -------------------------
// in_array / array_key_exists
// -------------------------

// in_array(value, array)
// Checks if a value exists in an array
$numbers3 = [1, 2, 3];

if (in_array(3, $numbers3)) {
    echo "3 is in the array" . PHP_EOL;
}

$person = ['name' => 'Max', 'age' => 30];

// array_key_exists(key, array)
// Checks if a key exists in an associative array
if (array_key_exists('age', $person)) {
    echo "Age is set" . PHP_EOL;
}
