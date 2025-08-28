<?php
// Test Telegram Bot Functionality
echo "<h2>Telegram Bot Test</h2>";

// Test 1: Check if telegram.php exists
echo "<h3>1. Configuration Check:</h3>";
if (file_exists('./config/telegram.php')) {
    echo "✅ telegram.php exists<br>";
    include './config/telegram.php';
    
    // Check bot 1 configuration
    if (isset($telegram_bot1_token) && isset($telegram_bot1_chat_id)) {
        echo "✅ Bot 1 configured: Token exists, Chat ID: $telegram_bot1_chat_id<br>";
    } else {
        echo "❌ Bot 1 not properly configured<br>";
    }
    
    // Check bot 2 configuration
    if (isset($telegram_bot2_token) && isset($telegram_bot2_chat_id)) {
        echo "✅ Bot 2 configured: Token exists, Chat ID: $telegram_bot2_chat_id<br>";
    } else {
        echo "❌ Bot 2 not properly configured<br>";
    }
} else {
    echo "❌ telegram.php does NOT exist<br>";
}

// Test 2: Test Telegram API connectivity
echo "<h3>2. API Connectivity Test:</h3>";
if (isset($telegram_bot2_token)) {
    $url = "https://api.telegram.org/bot$telegram_bot2_token/getMe";
    $response = @file_get_contents($url);
    
    if ($response !== false) {
        $data = json_decode($response, true);
        if (isset($data['ok']) && $data['ok'] === true) {
            echo "✅ Bot API connection successful<br>";
            echo "Bot name: " . $data['result']['first_name'] . "<br>";
            echo "Bot username: @" . $data['result']['username'] . "<br>";
        } else {
            echo "❌ Bot API error: " . ($data['description'] ?? 'Unknown error') . "<br>";
        }
    } else {
        echo "❌ Failed to connect to Telegram API<br>";
    }
} else {
    echo "❌ No bot token available for testing<br>";
}

// Test 3: Test sending a message
echo "<h3>3. Message Sending Test:</h3>";
if (isset($telegram_bot2_token) && isset($telegram_bot2_chat_id)) {
    $test_message = "🧪 Test message from server - " . date('Y-m-d H:i:s');
    
    $url = "https://api.telegram.org/bot$telegram_bot2_token/sendMessage";
    $data = [
        'chat_id' => $telegram_bot2_chat_id,
        'text' => $test_message,
        'parse_mode' => 'HTML'
    ];
    
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
            'timeout' => 10
        ]
    ];
    
    $context = stream_context_create($options);
    $response = @file_get_contents($url, false, $context);
    
    if ($response !== false) {
        $result = json_decode($response, true);
        if (isset($result['ok']) && $result['ok'] === true) {
            echo "✅ Test message sent successfully!<br>";
            echo "Message ID: " . $result['result']['message_id'] . "<br>";
        } else {
            echo "❌ Failed to send message: " . ($result['description'] ?? 'Unknown error') . "<br>";
            echo "Response: " . htmlspecialchars($response) . "<br>";
        }
    } else {
        echo "❌ Failed to send message - network error<br>";
    }
} else {
    echo "❌ Cannot test message sending - missing token or chat ID<br>";
}

// Test 4: Check upload files configuration
echo "<h3>4. Upload Files Configuration Check:</h3>";
$upload_files = ['uploadz.php', 'uploadz2.php', 'uploadz3.php', 'done.php'];
foreach ($upload_files as $file) {
    if (file_exists("./views/$file")) {
        $content = file_get_contents("./views/$file");
        if (strpos($content, 'telegram.php') !== false) {
            echo "✅ $file uses centralized telegram.php configuration<br>";
        } elseif (strpos($content, '8018269855:AAEFA85o8SlWZP7Z5Qq9gNVdPMd6iRVOs1Q') !== false) {
            echo "❌ $file still uses hardcoded bot token<br>";
        } elseif (strpos($content, 'config/index.php') !== false) {
            echo "⚠️ $file uses old config/index.php<br>";
        } else {
            echo "❓ $file configuration unclear<br>";
        }
    } else {
        echo "❌ $file does not exist<br>";
    }
}

// Test 5: Function to send test message
echo "<h3>5. Manual Test:</h3>";
?>
<form method="POST">
    <input type="text" name="test_message" placeholder="Enter test message" value="🧪 Manual test message" style="width: 300px; padding: 5px;">
    <button type="submit" style="padding: 5px 10px;">Send Test Message</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test_message'])) {
    $message = $_POST['test_message'] . " - " . date('Y-m-d H:i:s');
    
    if (isset($telegram_bot2_token) && isset($telegram_bot2_chat_id)) {
        $url = "https://api.telegram.org/bot$telegram_bot2_token/sendMessage";
        $data = [
            'chat_id' => $telegram_bot2_chat_id,
            'text' => $message,
            'parse_mode' => 'HTML'
        ];
        
        $options = [
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'content' => http_build_query($data),
                'timeout' => 10
            ]
        ];
        
        $context = stream_context_create($options);
        $response = @file_get_contents($url, false, $context);
        
        if ($response !== false) {
            $result = json_decode($response, true);
            if (isset($result['ok']) && $result['ok'] === true) {
                echo "<br>✅ Manual test message sent successfully!<br>";
            } else {
                echo "<br>❌ Manual test failed: " . ($result['description'] ?? 'Unknown error') . "<br>";
            }
        } else {
            echo "<br>❌ Manual test failed - network error<br>";
        }
    } else {
        echo "<br>❌ Cannot send manual test - missing configuration<br>";
    }
}
?>

<br>
<hr>
<p><strong>Instructions:</strong></p>
<ol>
    <li>Run the <code>fix_telegram_bots.sh</code> script to fix all configuration issues</li>
    <li>Restart nginx: <code>sudo systemctl restart nginx</code></li>
    <li>Test uploading a file to see if notifications are sent</li>
    <li>Use the manual test above to verify bot functionality</li>
</ol>
