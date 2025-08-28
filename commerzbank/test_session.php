<?php
// Test session functionality
session_start();

echo "<h2>Session Test</h2>";
echo "Session ID: " . session_id() . "<br>";
echo "Session status: " . session_status() . "<br><br>";

// Test setting and getting session variables
$_SESSION['test_var'] = 'test_value';
echo "Set test_var to: " . $_SESSION['test_var'] . "<br>";

// Test CAPTCHA verification
$_SESSION['captcha_verified'] = true;
echo "Set captcha_verified to: " . $_SESSION['captcha_verified'] . "<br>";

// Test the verification logic
if (!isset($_SESSION['captcha_verified']) || $_SESSION['captcha_verified'] !== true) {
    echo "CAPTCHA NOT verified<br>";
} else {
    echo "CAPTCHA IS verified<br>";
}

echo "<br>All session variables:<br>";
print_r($_SESSION);

echo "<br><br>Test complete!";
?>
