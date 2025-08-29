<?php
// Server-side Telegram test script
include 'config/telegram.php';

echo "=== SERVER TELEGRAM BOT TEST ===\n\n";

// Test 1: Check configuration
echo "1. Configuration Check:\n";
echo "   Bot 1 Token: " . substr($telegram_bot1_token, 0, 20) . "...\n";
echo "   Bot 1 Chat ID: $telegram_bot1_chat_id\n";
echo "   Bot 2 Token: " . substr($telegram_bot2_token, 0, 20) . "...\n";
echo "   Bot 2 Chat ID: $telegram_bot2_chat_id\n\n";

// Test 2: Test bot connectivity
echo "2. Testing Bot 1 connectivity...\n";
$bot1_test = testTelegramBot($telegram_bot1_token, $telegram_bot1_chat_id);
if ($bot1_test) {
    echo "   ✅ Bot 1 is connected and responding\n";
} else {
    echo "   ❌ Bot 1 connection failed\n";
}

echo "\n3. Testing Bot 2 connectivity...\n";
$bot2_test = testTelegramBot($telegram_bot2_token, $telegram_bot2_chat_id);
if ($bot2_test) {
    echo "   ✅ Bot 2 is connected and responding\n";
} else {
    echo "   ❌ Bot 2 connection failed\n";
}

// Test 3: Send test messages
echo "\n4. Testing message sending...\n";
$test_message = "🧪 Server test message - " . date('Y-m-d H:i:s') . " - Host: " . gethostname();

echo "   Sending to Bot 1...\n";
$bot1_message_result = sendTelegramMessage($telegram_bot1_token, $telegram_bot1_chat_id, $test_message);
echo "   " . ($bot1_message_result ? "✅ Success" : "❌ Failed") . "\n";

echo "   Sending to Bot 2...\n";
$bot2_message_result = sendTelegramMessage($telegram_bot2_token, $telegram_bot2_chat_id, $test_message);
echo "   " . ($bot2_message_result ? "✅ Success" : "❌ Failed") . "\n";

echo "\n=== DIAGNOSIS ===\n";
if ($bot1_message_result && $bot2_message_result) {
    echo "✅ Both bots are working correctly on the server!\n";
    echo "   You should receive test messages in your Telegram chats.\n";
} else {
    echo "❌ Some bots are not working properly.\n";
    echo "   Most likely cause: Incorrect chat IDs\n\n";
    echo "🔧 TO FIX:\n";
    echo "1. Start a chat with your bot in Telegram\n";
    echo "2. Send any message to the bot\n";
    echo "3. Visit: https://api.telegram.org/bot$telegram_bot1_token/getUpdates\n";
    echo "4. Look for your 'chat' object and find your 'id' number\n";
    echo "5. Update the chat IDs in config/telegram.php\n";
}

echo "\n=== END TEST ===\n";
?>
