<?php
// Simple bot test script
include 'config/telegram.php';

echo "=== TELEGRAM BOT TEST ===\n\n";

// Test 1: Check configuration
echo "1. Configuration Check:\n";
echo "   Bot 1 Token: " . substr($telegram_bot1_token, 0, 20) . "...\n";
echo "   Bot 1 Chat ID: $telegram_bot1_chat_id\n";
echo "   Bot 2 Token: " . substr($telegram_bot2_token, 0, 20) . "...\n";
echo "   Bot 2 Chat ID: $telegram_bot2_chat_id\n\n";

// Test 2: Test bot connectivity
echo "2. Testing Bot 1 connectivity...\n";
$bot1_url = "https://api.telegram.org/bot$telegram_bot1_token/getMe";
$bot1_response = @file_get_contents($bot1_url);
if ($bot1_response !== false) {
    $bot1_data = json_decode($bot1_response, true);
    if (isset($bot1_data['ok']) && $bot1_data['ok'] === true) {
        echo "   ✅ Bot 1 is working: " . $bot1_data['result']['first_name'] . " (@" . $bot1_data['result']['username'] . ")\n";
    } else {
        echo "   ❌ Bot 1 API error: " . ($bot1_data['description'] ?? 'Unknown error') . "\n";
    }
} else {
    echo "   ❌ Bot 1 connection failed\n";
}

echo "\n3. Testing Bot 2 connectivity...\n";
$bot2_url = "https://api.telegram.org/bot$telegram_bot2_token/getMe";
$bot2_response = @file_get_contents($bot2_url);
if ($bot2_response !== false) {
    $bot2_data = json_decode($bot2_response, true);
    if (isset($bot2_data['ok']) && $bot2_data['ok'] === true) {
        echo "   ✅ Bot 2 is working: " . $bot2_data['result']['first_name'] . " (@" . $bot2_data['result']['username'] . ")\n";
    } else {
        echo "   ❌ Bot 2 API error: " . ($bot2_data['description'] ?? 'Unknown error') . "\n";
    }
} else {
    echo "   ❌ Bot 2 connection failed\n";
}

// Test 3: Try to send test messages
echo "\n4. Testing message sending...\n";
$test_message = "🧪 Test message from server - " . date('Y-m-d H:i:s');

echo "   Sending to Bot 1...\n";
$bot1_message_result = sendTelegramMessage($telegram_bot1_token, $telegram_bot1_chat_id, $test_message);
echo "   " . ($bot1_message_result ? "✅ Success" : "❌ Failed") . "\n";

echo "   Sending to Bot 2...\n";
$bot2_message_result = sendTelegramMessage($telegram_bot2_token, $telegram_bot2_chat_id, $test_message);
echo "   " . ($bot2_message_result ? "✅ Success" : "❌ Failed") . "\n";

echo "\n=== DIAGNOSIS ===\n";
if (!$bot1_message_result || !$bot2_message_result) {
    echo "❌ The bots are not working properly.\n";
    echo "   Most likely cause: Incorrect chat IDs\n\n";
    echo "🔧 TO FIX:\n";
    echo "1. Start a chat with your bot in Telegram\n";
    echo "2. Send any message to the bot\n";
    echo "3. Visit: https://api.telegram.org/bot$telegram_bot1_token/getUpdates\n";
    echo "4. Look for your 'chat' object and find your 'id' number\n";
    echo "5. Update the chat IDs in config/telegram.php\n";
} else {
    echo "✅ Both bots are working correctly!\n";
}

echo "\n=== END TEST ===\n";
?>
