<?php
// Telegram Bot Configuration
// Replace these with your actual bot tokens and chat IDs

// Bot 1 - Visitor notifications
$telegram_bot1_token = '7652488994:AAHVLVEN4Vq02U6thdoo8HpMBYrBkYIrt14';
$telegram_bot1_chat_id = '7652488994';

// Bot 2 - Form submission notifications  
$telegram_bot2_token = '8018269855:AAEFA85o8SlWZP7Z5Qq9gNVdPMd6iRVOs1Q';
$telegram_bot2_chat_id = '7652488994';

// Enable/disable Telegram notifications
$enable_telegram = true;

// Function to send Telegram message with timeout and error handling
function sendTelegramMessage($bot_token, $chat_id, $message) {
    if (!$bot_token || !$chat_id || $bot_token === 'YOUR_BOT1_TOKEN_HERE') {
        return false; // Don't send if not configured
    }
    
    $url = "https://api.telegram.org/bot$bot_token/sendMessage";
    $data = [
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
            'timeout' => 10, // 10 second timeout instead of 60+
            'ignore_errors' => true // Don't throw errors on HTTP errors
        ]
    ];

    $context = stream_context_create($options);
    $result = @file_get_contents($url, false, $context);
    
    // Return true if successful, false if failed
    return $result !== false;
}

// Function to send Telegram photo with timeout and error handling
function sendTelegramPhoto($bot_token, $chat_id, $photo_path, $caption = '') {
    if (!$bot_token || !$chat_id || $bot_token === 'YOUR_BOT1_TOKEN_HERE' || !file_exists($photo_path)) {
        return false; // Don't send if not configured or file doesn't exist
    }
    
    $url = "https://api.telegram.org/bot$bot_token/sendPhoto";
    $data = [
        'chat_id' => $chat_id,
        'photo' => new CURLFile($photo_path),
        'caption' => $caption,
        'parse_mode' => 'HTML'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); // 30 second timeout
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // 10 second connection timeout

    $result = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    curl_close($ch);
    
    // Log error if failed
    if ($result === false || $http_code !== 200) {
        error_log("Telegram photo send failed for chat ID: $chat_id, HTTP Code: $http_code, Error: $error");
        return false;
    }
    
    return true;
}
?>

