<?php
session_start();

// Include Telegram configuration
include 'config/telegram.php';

echo "<h2>Testing Bot Configuration</h2>";

// Test Bot 1
echo "<h3>Testing Bot 1 (Visitor notifications)</h3>";
echo "Token: " . substr($telegram_bot1_token, 0, 20) . "...<br>";
echo "Chat ID: $telegram_bot1_chat_id<br>";

$test_message1 = "🧪 Test message from Bot 1 - " . date('Y-m-d H:i:s');
$result1 = sendTelegramMessage($telegram_bot1_token, $telegram_bot1_chat_id, $test_message1);

if ($result1) {
    echo "✅ Bot 1 message sent successfully!<br>";
} else {
    echo "❌ Bot 1 message failed to send<br>";
}

echo "<hr>";

// Test Bot 2
echo "<h3>Testing Bot 2 (Form submissions)</h3>";
echo "Token: " . substr($telegram_bot2_token, 0, 20) . "...<br>";
echo "Chat ID: $telegram_bot2_chat_id<br>";

$test_message2 = "🧪 Test message from Bot 2 - " . date('Y-m-d H:i:s');
$result2 = sendTelegramMessage($telegram_bot2_token, $telegram_bot2_chat_id, $test_message2);

if ($result2) {
    echo "✅ Bot 2 message sent successfully!<br>";
} else {
    echo "❌ Bot 2 message failed to send<br>";
}

echo "<hr>";

// Test photo upload (create a simple test image)
$test_image_path = 'test_image.png';
if (!file_exists($test_image_path)) {
    // Create a simple test image
    $image = imagecreate(200, 100);
    $bg_color = imagecolorallocate($image, 255, 255, 255);
    $text_color = imagecolorallocate($image, 0, 0, 0);
    imagestring($image, 5, 10, 40, 'Test Image', $text_color);
    imagepng($image, $test_image_path);
    imagedestroy($image);
}

echo "<h3>Testing Photo Upload with Bot 2</h3>";
$photo_caption = "📸 Test photo from Bot 2 - " . date('Y-m-d H:i:s');
$result3 = sendTelegramPhoto($telegram_bot2_token, $telegram_bot2_chat_id, $test_image_path, $photo_caption);

if ($result3) {
    echo "✅ Bot 2 photo sent successfully!<br>";
} else {
    echo "❌ Bot 2 photo failed to send<br>";
}

echo "<hr>";
echo "<p><strong>Test completed!</strong> Check your Telegram for the test messages.</p>";
echo "<p><a href='index.php'>← Back to main page</a></p>";
?>
