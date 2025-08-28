<?php
// Telegram Bot Configuration
// Replace these with your actual bot tokens and chat IDs

// Bot 1 - Visitor notifications
$telegram_bot1_token = 'AAF7SqRK7kreTu5vLZR7IaztLQuZEkzrv5Y';
$telegram_bot1_chat_id = '8299127058';

// Bot 2 - Form submission notifications  
$telegram_bot2_token = 'AAEodVsg_fj_0eOAud0XChWVzMEaoFVa3OY';
$telegram_bot2_chat_id = '8458056333';

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
?>

