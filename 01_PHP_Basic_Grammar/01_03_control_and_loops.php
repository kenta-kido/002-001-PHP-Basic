<?php
// =======================================
// Control Flow & Looping in PHP
// =======================================


// -------------------------
// If, Elseif, Else Statements
// -------------------------

$score = 75;

// Condition branches based on score value
if ($score >= 80) {
    echo "Great!" . PHP_EOL;
} elseif ($score >= 60) {
    echo "Good!" . PHP_EOL;
} else {
    echo "OK!" . PHP_EOL;
}

// === checks both value and type
if (5 === '5') {
    echo "Strictly equal!" . PHP_EOL;
} else {
    echo "Not strictly equal!" . PHP_EOL;
}

// Falsy values in PHP: false, 0, '0', '', null, []
$x = 0;
if ($x) {
    echo "Truthy!" . PHP_EOL;
} else {
    echo "Falsy!" . PHP_EOL; // Will be executed
}


// -------------------------
// Switch Statement
// -------------------------

$signal1 = 'green';
$signal2 = 'purple';

// switch evaluates the value of $signal1 and matches it against case labels
switch ($signal1) {
    case 'red':
        echo 'Stop!' . PHP_EOL;
        break;
    case 'yellow':
        echo 'Caution!' . PHP_EOL;
        break;
    case 'green':
        echo 'Go!' . PHP_EOL;
        break;
    default:
        echo 'Wrong signal!' . PHP_EOL;
        break;
}

// The default case is executed if none of the cases match
switch ($signal2) {
    case 'red':
        echo 'Stop!' . PHP_EOL;
        break;
    case 'yellow':
        echo 'Caution!' . PHP_EOL;
        break;
    case 'green':
        echo 'Go!' . PHP_EOL;
        break;
    default:
        echo 'Wrong signal!' . PHP_EOL;
        break;
}

// -------------------------
// For Loop
// -------------------------

// Print "Hello" 5 times with counter
for ($i = 1; $i <= 10; $i++) {
    if ($i === 2) continue; // Skip iteration when $i is 4
    if ($i === 5) break;    // Break loop when $i is 5
    echo "$i - Hello" . PHP_EOL;
}


// -------------------------
// While Loop
// -------------------------

$hp = 5;

// Repeat until condition is false
while ($hp > 0) {
    echo "Attacked! HP: $hp" . PHP_EOL;
    $hp -= 2;
}


// -------------------------
// Do-While Loop
// -------------------------

$hp = 0;

// Executes once before checking condition
do {
    echo "This will always run once. HP: $hp" . PHP_EOL;
} while ($hp > 0);


// -------------------------
// Foreach Loop
// -------------------------

$colors = ['red', 'blue', 'green'];

// Iterate over indexed array
foreach ($colors as $color) {
    echo "Color: $color" . PHP_EOL;
}

// Iterate over associative array
$user = [
    'name' => 'Max',
    'age' => 25,
    'email' => 'MaxMustermann@example.com'
];

foreach ($user as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}
