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

// -------------------------
// Add / Remove Elements
// -------------------------

$scores = [30, 40, 50];

array_unshift($scores, 10); // Add to beginning
array_push($scores, 60);    // Add to end
$scores[] = 70;             // Append using shorthand

array_shift($scores);       // Remove from beginning
array_pop($scores);         // Remove from end

print_r($scores);

// -------------------------
// array_slice (non-destructive)
// -------------------------

$nums = [10, 20, 30, 40, 50];

// array_slice(array, offset, length)
// Extracts a portion of the array without modifying the original
$cut = array_slice($nums, 2, 2); // [30, 40]
print_r($cut);

// -------------------------
// array_splice (modifies the original)
// -------------------------

$nums = [10, 20, 30, 40];

// array_splice(array, offset, length, replacement)
// Removes 2 items starting from index 1 (20, 30)
// Then inserts [99] in their place → modifies the original array
array_splice($nums, 1, 2, [99]);
print_r($nums); // [10, 99, 40]


// -------------------------
// Sorting and Random Selection
// -------------------------

$scores = [30, 10, 50, 40];

// sort(): Sort by value (ascending), reindexes keys
sort($scores);  // Result: [10, 30, 40, 50]

// rsort(): Sort by value (descending), reindexes keys
rsort($scores); // Result: [50, 40, 30, 10]

// Use associative array for key-based sorting
$scores = [
  'alice' => 30,
  'bob' => 50,
  'charlie' => 40
];

// asort(): Sort by value ascending, preserves keys
asort($scores); // ['alice' => 30, 'charlie' => 40, 'bob' => 50]

// arsort(): Sort by value descending, preserves keys
arsort($scores); // ['bob' => 50, 'charlie' => 40, 'alice' => 30]

// ksort(): Sort by key ascending
ksort($scores); // ['alice', 'bob', 'charlie']

// krsort(): Sort by key descending
krsort($scores); // ['charlie', 'bob', 'alice']

// shuffle(): Randomize order (keys are reset)
shuffle($scores); // ['charlie' => ..., ...]

// array_rand(): Pick random key(s)
$picked = array_rand($scores, 2); // Returns 2 random keys
print_r($picked); // Example: ['bob', 'charlie']


// -------------------------
// Aggregation and Set Operations
// -------------------------

$scores = [10, 20, 30];

// array_sum(array): Returns the sum of all values
echo "Total: " . array_sum($scores) . PHP_EOL;

// count(array): Returns the number of elements
echo "Count: " . count($scores) . PHP_EOL;

// Average = total / count
echo "Average: " . (array_sum($scores) / count($scores)) . PHP_EOL;


// Set operations
$a = [1, 2, 3, 4];
$b = [3, 4, 5];

// array_unique(array): Removes duplicate values
print_r(array_unique([1, 2, 2, 3])); // [1, 2, 3]

// array_diff(array1, array2): Values in array1 not present in array2
print_r(array_diff($a, $b)); // [1, 2]

// array_intersect(array1, array2): Values common to both arrays
print_r(array_intersect($a, $b)); // [3, 4]


// -------------------------
// Keys / Values / Search
// -------------------------

$scores = [
    'mueller' => 80,
    'schneider' => 70,
    'fischer' => 60,
];

// array_keys(array): Get all keys from the array
print_r(array_keys($scores));   // ['mueller', 'schneider', 'fischer']

// array_values(array): Get all values from the array
print_r(array_values($scores)); // [80, 70, 60]

// array_key_exists(key, array): Check if a specific key exists
if (array_key_exists('mueller', $scores)) {
    echo "mueller is here!" . PHP_EOL;
}

// in_array(value, array): Check if a specific value exists
if (in_array(80, $scores)) {
    echo "80 is here!" . PHP_EOL;
}

// array_search(value, array): Get the key for a given value
echo array_search(70, $scores) . PHP_EOL; // Output: schneider

  
// -------------------------
// usort
// -------------------------

$data = [
    ['name' => 'mueller', 'score' => 80],
    ['name' => 'schneider', 'score' => 60],
    ['name' => 'fischer', 'score' => 70],
    ['name' => 'meyer', 'score' => 60],
];

// usort(array, callback)
// Sorts the array using a user-defined comparison function
// <=> (spaceship operator): returns -1, 0, or 1
usort($data, function($a, $b) {
    return $a['score'] <=> $b['score'];
});

print_r($data);


// -------------------------
// array_multisort
// -------------------------

$data = [
    ['name' => 'mueller', 'score' => 80],
    ['name' => 'schneider', 'score' => 60],
    ['name' => 'fischer', 'score' => 70],
    ['name' => 'meyer', 'score' => 60],
];

// Extract the columns to use as sort criteria
$scores = array_column($data, 'score');
$names = array_column($data, 'name');

// array_multisort(column1, direction1, column2, direction2, target array)
// Sort by score ASC, then by name ASC (if scores are equal)
array_multisort(
    $scores, SORT_ASC, SORT_NUMERIC,
    $names, SORT_ASC, SORT_STRING,
    $data
);

print_r($data);
