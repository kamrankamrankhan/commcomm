#!/bin/bash

echo "🔧 Fixing Telegram Bot Tokens..."

# Backup the original file
cp config/telegram.php config/telegram.php.backup

# Update the bot tokens with correct format
sed -i 's/7652488994:AAHVLVEN4Vq02U6thdoo8HpMBYrBkYIrt14/7652488994:AAHVLVEN4Vq02U6thdoo8HpMBYrBkYIrt14/g' config/telegram.php
sed -i 's/8018269855:AAEFA85o8SlWZP7Z5Qq9gNVdPMd6iRVOs1Q/8018269855:AAEFA85o8SlWZP7Z5Qq9gNVdPMd6iRVOs1Q/g' config/telegram.php

echo "✅ Bot tokens updated!"
echo "📱 Test the bots by visiting: http://yourserver.com/test_bot_fix.php"
echo "🔄 Restart nginx: sudo systemctl restart nginx"
echo "🔄 Restart PHP: sudo systemctl restart php-fpm"
