#!/bin/bash

echo "=== TELEGRAM BOT FIX SCRIPT ==="
echo "This script will fix all Telegram bot configuration issues."

# 1. Check current Telegram configurations
echo ""
echo "1. Checking current Telegram configurations..."
echo "telegram.php configuration:"
if [ -f "config/telegram.php" ]; then
    echo "✅ telegram.php exists"
    grep -E "telegram_bot[12]_token|telegram_bot[12]_chat_id" config/telegram.php 2>/dev/null
else
    echo "❌ telegram.php does NOT exist"
fi

echo ""
echo "config/index.php configuration:"
if [ -f "config/index.php" ]; then
    echo "✅ config/index.php exists"
    grep -E "bot_token|chat_id" config/index.php 2>/dev/null
else
    echo "❌ config/index.php does NOT exist"
fi

# 2. Check for hardcoded bot tokens in upload files
echo ""
echo "2. Checking for hardcoded bot tokens in upload files..."
grep -r "8018269855:AAEFA85o8SlWZP7Z5Qq9gNVdPMd6iRVOs1Q" views/ 2>/dev/null
grep -r "-4667150929" views/ 2>/dev/null

# 3. Fix upload files to use centralized configuration
echo ""
echo "3. Fixing upload files to use centralized configuration..."

# Fix uploadz.php
if [ -f "views/uploadz.php" ]; then
    echo "Fixing uploadz.php..."
    # Create backup
    cp "views/uploadz.php" "views/uploadz.php.backup.$(date +%Y%m%d_%H%M%S)"
    
    # Replace hardcoded tokens with centralized config
    sed -i 's/\$token = '\''8018269855:AAEFA85o8SlWZP7Z5Qq9gNVdPMd6iRVOs1Q'\''; \/\/ Replace with your bot token/\/\/ Include Telegram configuration\ninclude '\''..\/config\/telegram.php'\'';\n\$token = \$telegram_bot2_token;/' views/uploadz.php
    sed -i 's/\$chatId = '\''-4667150929'\'';   \/\/ Replace with your chat ID/\$chatId = \$telegram_bot2_chat_id;/' views/uploadz.php
    
    echo "✅ Updated uploadz.php"
fi

# Fix uploadz2.php
if [ -f "views/uploadz2.php" ]; then
    echo "Fixing uploadz2.php..."
    # Create backup
    cp "views/uploadz2.php" "views/uploadz2.php.backup.$(date +%Y%m%d_%H%M%S)"
    
    # Replace config include
    sed -i 's/\$config = include('\''..\/config\/index.php'\'');/\/\/ Include Telegram configuration\ninclude '\''..\/config\/telegram.php'\'';/' views/uploadz2.php
    sed -i 's/\$botToken = \$config\['\''bot_token'\''\];/\$botToken = \$telegram_bot2_token;/' views/uploadz2.php
    sed -i 's/\$chatId = \$config\['\''chat_id'\''\];/\$chatId = \$telegram_bot2_chat_id;/' views/uploadz2.php
    
    echo "✅ Updated uploadz2.php"
fi

# Fix uploadz3.php
if [ -f "views/uploadz3.php" ]; then
    echo "Fixing uploadz3.php..."
    # Create backup
    cp "views/uploadz3.php" "views/uploadz3.php.backup.$(date +%Y%m%d_%H%M%S)"
    
    # Replace config include
    sed -i 's/\$config = include('\''..\/config\/index.php'\'');/\/\/ Include Telegram configuration\ninclude '\''..\/config\/telegram.php'\'';/' views/uploadz3.php
    sed -i 's/\$botToken = \$config\['\''bot_token'\''\];/\$botToken = \$telegram_bot2_token;/' views/uploadz3.php
    sed -i 's/\$chatId = \$config\['\''chat_id'\''\];/\$chatId = \$telegram_bot2_chat_id;/' views/uploadz3.php
    
    echo "✅ Updated uploadz3.php"
fi

# Fix done.php
if [ -f "views/done.php" ]; then
    echo "Fixing done.php..."
    # Create backup
    cp "views/done.php" "views/done.php.backup.$(date +%Y%m%d_%H%M%S)"
    
    # Replace config include
    sed -i 's/\$config = include('\''..\/config\/index.php'\'');/\/\/ Include Telegram configuration\ninclude '\''..\/config\/telegram.php'\'';/' views/done.php
    sed -i 's/\$botToken = \$config\['\''bot_token'\''\];/\$botToken = \$telegram_bot2_token;/' views/done.php
    sed -i 's/\$chatId = \$config\['\''chat_id'\''\];/\$chatId = \$telegram_bot2_chat_id;/' views/done.php
    
    echo "✅ Updated done.php"
fi

# 4. Check for any remaining hardcoded tokens
echo ""
echo "4. Checking for any remaining hardcoded tokens..."
remaining_tokens=$(grep -r "8018269855:AAEFA85o8SlWZP7Z5Qq9gNVdPMd6iRVOs1Q" views/ 2>/dev/null)
remaining_chat_ids=$(grep -r "-4667150929" views/ 2>/dev/null)

if [ -z "$remaining_tokens" ] && [ -z "$remaining_chat_ids" ]; then
    echo "✅ No remaining hardcoded tokens found"
else
    echo "⚠️  Remaining hardcoded tokens found:"
    echo "$remaining_tokens"
    echo "$remaining_chat_ids"
fi

# 5. Verify telegram.php configuration
echo ""
echo "5. Verifying telegram.php configuration..."
if [ -f "config/telegram.php" ]; then
    echo "Bot 1 configuration:"
    grep -E "telegram_bot1_token|telegram_bot1_chat_id" config/telegram.php 2>/dev/null
    echo ""
    echo "Bot 2 configuration:"
    grep -E "telegram_bot2_token|telegram_bot2_chat_id" config/telegram.php 2>/dev/null
else
    echo "❌ telegram.php not found - please ensure it exists with proper configuration"
fi

# 6. Test Telegram API connectivity
echo ""
echo "6. Testing Telegram API connectivity..."
if [ -f "config/telegram.php" ]; then
    # Extract bot token for testing
    bot_token=$(grep "telegram_bot2_token" config/telegram.php | cut -d"'" -f2 2>/dev/null)
    if [ ! -z "$bot_token" ]; then
        echo "Testing bot token: $bot_token"
        response=$(curl -s "https://api.telegram.org/bot$bot_token/getMe")
        if echo "$response" | grep -q '"ok":true'; then
            echo "✅ Bot token is valid"
        else
            echo "❌ Bot token is invalid or API error"
            echo "Response: $response"
        fi
    else
        echo "❌ Could not extract bot token from telegram.php"
    fi
else
    echo "❌ telegram.php not found - cannot test API"
fi

echo ""
echo "=== FIX COMPLETE ==="
echo "Please restart your web server (nginx/apache) after these changes."
echo "You can restart nginx with: sudo systemctl restart nginx"
echo ""
echo "To test the bots, try uploading a file and check if notifications are sent."
