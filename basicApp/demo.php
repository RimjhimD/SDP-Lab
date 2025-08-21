<?php
// demo.php - A simple PHP demo testing file

echo "<h1>Welcome to the PHP Demo!</h1>";

$name = "Visitor";
echo "<p>Hello, $name! This is a demo testing page.</p>";

// Simple function to add two numbers
function addNumbers($a, $b) {
    return $a + $b;
}

$num1 = 5;
$num2 = 7;
$sum = addNumbers($num1, $num2);

echo "<p>Adding $num1 and $num2 gives you: $sum</p>";
?>
