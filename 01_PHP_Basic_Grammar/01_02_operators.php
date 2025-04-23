<?php
// -------------------------
// Arithmetic Operators
// -------------------------

echo 10 + 3 . PHP_EOL;     // Addition: 13
echo 10 - 3 . PHP_EOL;     // Subtraction: 7
echo 10 * 3 . PHP_EOL;     // Multiplication: 30
echo 10 / 3 . PHP_EOL;     // Division: 3.333...
echo 10 % 3 . PHP_EOL;     // Modulus (remainder): 1
echo 10 ** 3 . PHP_EOL;    // Exponentiation: 1000

// -------------------------
// Type Juggling (Implicit Conversion)
// -------------------------

// PHP is a dynamically typed language
echo 2 + '3' . PHP_EOL;    // '3' is converted to integer: 5
echo '5 apples' + 10 . PHP_EOL; // '5 apples' becomes 5: 15

// -------------------------
// Type Casting (Explicit Conversion)
// -------------------------

echo (int) '123' . PHP_EOL;      // Cast string to integer: 123
echo (float) '3.14' . PHP_EOL;   // Cast string to float: 3.14
echo (string) 100 . PHP_EOL;     // Cast integer to string: '100'

// -------------------------
// Comparison Operators
// -------------------------

// Equal in value (type is not checked)
echo '5 == "5": ';
var_dump(5 == '5');        // true

// Equal in value and type
echo '5 === "5": ';
var_dump(5 === '5');       // false

// Not equal in value (type not checked)
echo '5 != "5": ';
var_dump(5 != '5');        // false

// Not equal in value or type
echo '5 !== "5": ';
var_dump(5 !== '5');       // true - different types

// Greater than comparison
echo '10 > 3: ';
var_dump(10 > 3);          // true

// Less than or equal comparison
echo '10 <= 10: ';
var_dump(10 <= 10);        // true

// -------------------------
// Logical Operators
// -------------------------

$loggedIn = true;
$isAdmin = false;

// AND operator: true only if both are true
echo '$loggedIn && $isAdmin: ';
var_dump($loggedIn && $isAdmin); // false

// OR operator: true if either is true
echo '$loggedIn || $isAdmin: ';
var_dump($loggedIn || $isAdmin); // true

// NOT operator: true if false
echo '!$isAdmin: ';
var_dump(!$isAdmin);             // true

// -------------------------
// Assignment Operators
// -------------------------

$score = 10;

// Add 5 to current value (10 + 5)
$score += 5;
echo '$score += 5 => ' . $score . PHP_EOL;  // 15

// Multiply current value by 2 (15 * 2)
$score *= 2;
echo '$score *= 2 => ' . $score . PHP_EOL;  // 30

// Modulo operation (30 % 7)
$score %= 7;
echo '$score %= 7 => ' . $score . PHP_EOL;  // 2
