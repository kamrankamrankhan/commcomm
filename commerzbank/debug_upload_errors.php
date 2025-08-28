<?php
// Debug script to identify upload errors
session_start();

echo "<h2>🔍 Upload Error Debug</h2>";

// Check PHP configuration
echo "<h3>📋 PHP Configuration</h3>";
echo "Upload Max Filesize: " . ini_get('upload_max_filesize') . "<br>";
echo "Post Max Size: " . ini_get('post_max_size') . "<br>";
echo "Max Execution Time: " . ini_get('max_execution_time') . "<br>";
echo "Memory Limit: " . ini_get('memory_limit') . "<br>";
echo "File Uploads Enabled: " . (ini_get('file_uploads') ? 'Yes' : 'No') . "<br>";
echo "Max Input Time: " . ini_get('max_input_time') . "<br>";

// Check server information
echo "<h3>🖥️ Server Information</h3>";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "PHP Version: " . PHP_VERSION . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Content Type: " . ($_SERVER['CONTENT_TYPE'] ?? 'Not set') . "<br>";
echo "Content Length: " . ($_SERVER['CONTENT_LENGTH'] ?? 'Not set') . "<br>";
echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

// Check upload directory
echo "<h3>📁 Upload Directory</h3>";
$uploadDir = 'views/xentryxupload/';
if (is_dir($uploadDir)) {
    echo "✅ Upload directory exists<br>";
    echo "Permissions: " . substr(sprintf('%o', fileperms($uploadDir)), -4) . "<br>";
    echo "Writable: " . (is_writable($uploadDir) ? 'Yes' : 'No') . "<br>";
} else {
    echo "❌ Upload directory does not exist<br>";
    if (mkdir($uploadDir, 0755, true)) {
        echo "✅ Created upload directory<br>";
    } else {
        echo "❌ Failed to create upload directory<br>";
    }
}

// Check if file was uploaded
echo "<h3>📤 File Upload Status</h3>";
if (isset($_FILES['file'])) {
    echo "File uploaded: Yes<br>";
    echo "File name: " . $_FILES['file']['name'] . "<br>";
    echo "File size: " . $_FILES['file']['size'] . " bytes<br>";
    echo "File type: " . $_FILES['file']['type'] . "<br>";
    echo "Upload error: " . $_FILES['file']['error'] . "<br>";
    
    // Detailed error analysis
    $errorMessages = [
        UPLOAD_ERR_OK => 'No errors',
        UPLOAD_ERR_INI_SIZE => 'File exceeds upload_max_filesize',
        UPLOAD_ERR_FORM_SIZE => 'File exceeds MAX_FILE_SIZE',
        UPLOAD_ERR_PARTIAL => 'File was only partially uploaded',
        UPLOAD_ERR_NO_FILE => 'No file was uploaded',
        UPLOAD_ERR_NO_TMP_DIR => 'Missing temporary folder',
        UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk',
        UPLOAD_ERR_EXTENSION => 'File upload stopped by extension'
    ];
    
    $errorCode = $_FILES['file']['error'];
    echo "Error description: " . ($errorMessages[$errorCode] ?? 'Unknown error') . "<br>";
    
    if ($errorCode == UPLOAD_ERR_OK) {
        echo "✅ File upload successful<br>";
        
        // Test moving file
        $testPath = $uploadDir . 'test_' . time() . '.tmp';
        if (move_uploaded_file($_FILES['file']['tmp_name'], $testPath)) {
            echo "✅ File move successful<br>";
            unlink($testPath); // Clean up
        } else {
            echo "❌ File move failed<br>";
        }
    }
} else {
    echo "❌ No file uploaded<br>";
}

// Test Telegram configuration
echo "<h3>🤖 Telegram Configuration Test</h3>";
if (file_exists('config/telegram.php')) {
    include 'config/telegram.php';
    echo "✅ Telegram config file exists<br>";
    echo "Bot Token: " . substr($telegram_bot2_token, 0, 20) . "...<br>";
    echo "Chat ID: $telegram_bot2_chat_id<br>";
    
    // Test message
    $test_message = "🧪 Upload Debug Test - " . date('Y-m-d H:i:s');
    $result = sendTelegramMessage($telegram_bot2_token, $telegram_bot2_chat_id, $test_message);
    
    if ($result) {
        echo "✅ Telegram message test successful<br>";
    } else {
        echo "❌ Telegram message test failed<br>";
    }
} else {
    echo "❌ Telegram config file not found<br>";
}

// Check for common issues
echo "<h3>🔧 Common Issues Check</h3>";

// Check if .htaccess exists
if (file_exists('.htaccess')) {
    echo "✅ .htaccess file exists<br>";
} else {
    echo "❌ .htaccess file missing<br>";
}

// Check PHP extensions
echo "cURL Extension: " . (extension_loaded('curl') ? '✅ Loaded' : '❌ Not loaded') . "<br>";
echo "GD Extension: " . (extension_loaded('gd') ? '✅ Loaded' : '❌ Not loaded') . "<br>";
echo "FileInfo Extension: " . (extension_loaded('fileinfo') ? '✅ Loaded' : '❌ Not loaded') . "<br>";

// Check error reporting
echo "<h3>📝 Error Reporting</h3>";
echo "Error Reporting: " . (error_reporting() ? 'Enabled' : 'Disabled') . "<br>";
echo "Display Errors: " . (ini_get('display_errors') ? 'On' : 'Off') . "<br>";
echo "Log Errors: " . (ini_get('log_errors') ? 'On' : 'Off') . "<br>";

// Test upload form
echo "<h3>📤 Test Upload Form</h3>";
echo '<form action="views/uploadz2.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="file" accept="image/*" required><br><br>';
echo '<input type="submit" value="Test Upload">';
echo '</form>';

echo "<hr>";
echo "<p><a href='index.php'>← Back to main page</a></p>";
?>
