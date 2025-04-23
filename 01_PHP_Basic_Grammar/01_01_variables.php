<?php

// -------------------------
// Variables and String Basics
// -------------------------

$name = 'Max'; // Variables in PHP start with the $ symbol
echo 'Hello ' . $name . PHP_EOL; // Concatenation using . and newline with PHP_EOL

// -------------------------
// Strings and Escaping
// -------------------------

// Double quotes allow variable interpolation
echo "It's me. Hello $name" . PHP_EOL;

// Escaping double quotes inside double-quoted strings
echo "It's \"me\". Hello $name" . PHP_EOL;

// Tab character example
echo "It's me.\tHello $name" . PHP_EOL;

// -------------------------
// Heredoc and Nowdoc Syntax
// -------------------------

// Heredoc(<<<EOT ... EOT;) allows multi-line strings with variable interpolation
$text = <<<EOT
hello!
    this is $name
Goodbye!
EOT;

echo $text . PHP_EOL;

// Nowdoc(<<<'EOT') treats the text as plain text (no variable interpolation)
$text2 = <<<'EOT'
hello!
    this is $name
Goodbye!
EOT;

echo $text2 . PHP_EOL;

// -------------------------
// Constants
// -------------------------

// Constants do not use the $ symbol and are usually written in uppercase with underscores
define('MYFAMILYNAME', 'MUSTERMANN'); // define() is a function to create constants
const MYFIRSTNAME = 'MAX';    // const is a language construct to declare constants

// Output constants (note: no $ symbol is used when echoing constants)
echo "Hello, " . MYFIRSTNAME . " " . MYFAMILYNAME . PHP_EOL;





