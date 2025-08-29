#!/bin/bash

# Telegram Bot Deployment Script for Server
# This script will help deploy and test the Telegram bots on the server

echo "=== TELEGRAM BOT DEPLOYMENT SCRIPT ==="
echo "This script will help deploy and test the Telegram bots on your server."
echo ""

# Check if we're on a server (not localhost)
if [[ "$HOSTNAME" == "localhost" || "$HOSTNAME" == "127.0.0.1" ]]; then
    echo "⚠️  WARNING: This appears to be running on localhost."
    echo "   The Telegram bots are configured for server deployment."
    echo "   SSL connection issues may occur on localhost."
    echo ""
fi

# Check if telegram.php exists
if [ ! -f "config/telegram.php" ]; then
    echo "❌ Error: config/telegram.php not found!"
    echo "   Please make sure you're running this script from the correct directory."
    exit 1
fi

echo "✅ Found telegram.php configuration"
echo ""

# Display current configuration
echo "📋 Current Bot Configuration:"
echo "   Bot 1 Token: $(grep -o '7652488994:[^'"'"']*' config/telegram.php | head -1)"
echo "   Bot 1 Chat ID: $(grep -o '\$telegram_bot1_chat_id = '"'"'[^'"'"']*'"'"'' config/telegram.php | cut -d"'" -f2)"
echo "   Bot 2 Token: $(grep -o '8018269855:[^'"'"']*' config/telegram.php | head -1)"
echo "   Bot 2 Chat ID: $(grep -o '\$telegram_bot2_chat_id = '"'"'[^'"'"']*'"'"'' config/telegram.php | cut -d"'" -f2)"
echo ""

# Create a simple test script for the server
cat > test_telegram_server.php << 'EOF'
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
EOF

echo "✅ Created server test script: test_telegram_server.php"
echo ""

# Instructions for deployment
echo "🚀 DEPLOYMENT INSTRUCTIONS:"
echo ""
echo "1. Upload these files to your server:"
echo "   - config/telegram.php"
echo "   - test_telegram_server.php (for testing)"
echo ""
echo "2. On your server, run:"
echo "   php test_telegram_server.php"
echo ""
echo "3. If the bots work, you'll receive test messages in Telegram"
echo ""
echo "4. If they don't work, check the chat IDs:"
echo "   - Visit: https://api.telegram.org/bot7652488994:AAHVLVEN4Vq02U6thdoo8HpMBYrBkYIrt14/getUpdates"
echo "   - Look for your chat ID in the response"
echo "   - Update config/telegram.php with the correct chat IDs"
echo ""
echo "5. The upload files (uploadz.php, uploadz2.php, done.php) will automatically"
echo "   use the new telegram.php configuration"
echo ""

# Test locally if possible
echo "🧪 LOCAL TEST (may not work due to SSL issues):"
if command -v php &> /dev/null; then
    echo "Running local test..."
    php test_telegram_server.php
else
    echo "PHP not available for local testing"
fi

echo ""
echo "✅ Deployment script completed!"
echo "   The Telegram bots are now configured for server deployment."
echo "   Upload the files to your server and test them there."
