<?php
declare(strict_types=1);

// =======================================
// Functions in PHP
// =======================================


// -------------------------
// Basic Function Definition
// -------------------------

function showAds(string $message = 'Ad'): string {
    return "=== $message ===" . PHP_EOL;
}

echo "Calling showAds() with no argument: " . showAds();
echo "Calling showAds() with custom message: " . showAds('Buy now!');


// -------------------------
// Function with Return Value
// -------------------------

function sum($a, $b, $c) {
    return $a + $b + $c;
}

echo "Sum of 10, 20, 30: " . sum(10, 20, 30) . PHP_EOL;


// -------------------------
// Function Parameters with Type Declarations
// -------------------------

function showInfo2(string $name, int $score): string {
    return "$name scored $score points." . PHP_EOL;
}

echo "Displaying Max Mustermann's score: " . showInfo2('Max Mustermann', 85);


// -------------------------
// Nullable Return
// -------------------------

// The return type is '?int' — this means the function may return an int or null.
function getBonus(bool $active): ?int {
    return $active ? 100 : null;
}

echo "Checking bonus eligibility (active = true): " . var_export(getBonus(true), true) . PHP_EOL;
echo "Checking bonus eligibility (active = false): " . var_export(getBonus(false), true) . PHP_EOL;


// -------------------------
// Scope and Global Keyword
// -------------------------

function calcTax($price): float {
    return $price * 1.1;
}

echo "Calculating tax for price 1000 (rate 10%): " . calcTax(1000) . PHP_EOL;



// -------------------------
// Global Scope Example
// -------------------------

// A variable defined in the global scope
$rate = 1.08;

function calcTaxGlobal($price): float {
    // This line imports the global variable into the function scope
    global $rate;
    return $price * $rate;
}

echo "Calculating tax using global variable (rate 8%): " . calcTaxGlobal(1000) . PHP_EOL;


// -------------------------
// Local vs Global Scope
// -------------------------

$message = "Hello from global scope!";

function showMessage(): void {
    $message = "Hello from local scope!";
    echo $message . PHP_EOL; // This prints the local one
}

echo "Demonstrating local vs global scope:" . PHP_EOL;
showMessage(); // Local
echo $message . PHP_EOL; // Global

// -------------------------
// Anonymous Functions (Closures)
// -------------------------

// Syntax comparison:
// Named function     → function functionName(parameters): returnType { ... }
// Anonymous function → function (parameters): returnType { ... }; (assigned to a variable)
$sumFunc = function (int $a, int $b, int $c): int {
    return $a + $b + $c;
};

echo "Using anonymous function to sum 1, 2, 3: " . $sumFunc(1, 2, 3) . PHP_EOL;

// -------------------------
// Arrow Functions (PHP 7.4+)
// -------------------------

// Arrow functions have concise syntax:
// fn(parameter_list): returnType => expression;
$multiply = fn(int $x, int $y): int => $x * $y;

echo "Using arrow function to multiply 3 and 4: " . $multiply(3, 4) . PHP_EOL;


// -------------------------
// Ternary Operator
// -------------------------

$total = -5;
echo "Checking if total is negative (ternary operator): " . ($total < 0 ? 0 : $total) . PHP_EOL;

echo "Equivalent if-statement output (total=-5): ";
echo ($total < 0 ? 0 : $total) . PHP_EOL;

$total = 2;
echo "Equivalent if-statement output (total=2): ";
echo ($total < 0 ? 0 : $total) . PHP_EOL;
