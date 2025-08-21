<?php
// test.php - Simple PHP test file

echo "<h2>PHP Test Page</h2>";

echo "Current date and time: " . date('Y-m-d H:i:s') . "<br>";

// Test a basic loop
echo "Counting from 1 to 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// Test a simple conditional
$testValue = 10;
if ($testValue > 5) {
    echo "The test value ($testValue) is greater than 5.";
} else {
    echo "The test value ($testValue) is 5 or less.";
}
?>
