<?php
echo "=== CURL TEST ===\n\n";

// Test 1: Check if curl is available
if (!function_exists('curl_init')) {
    echo "❌ cURL is not available in PHP\n";
    exit;
}
echo "✅ cURL is available\n\n";

// Test 2: Test basic connectivity
echo "2. Testing basic connectivity...\n";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

$result = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($result !== false && $http_code == 200) {
    echo "   ✅ Google.com connection successful\n";
} else {
    echo "   ❌ Google.com connection failed: HTTP $http_code, Error: $error\n";
}

// Test 3: Test Telegram API connectivity
echo "\n3. Testing Telegram API connectivity...\n";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

$result = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($result !== false && $http_code == 200) {
    echo "   ✅ Telegram API connection successful\n";
} else {
    echo "   ❌ Telegram API connection failed: HTTP $http_code, Error: $error\n";
}

// Test 4: Test specific bot token
echo "\n4. Testing Bot 1 token...\n";
$bot_token = '7652488994:AAHVLVEN4Vq02U6thdoo8HpMBYrBkYIrt14';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$bot_token/getMe");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');

$result = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
$info = curl_getinfo($ch);
curl_close($ch);

if ($result !== false) {
    echo "   ✅ Bot 1 API call successful\n";
    echo "   HTTP Code: $http_code\n";
    echo "   Response: " . substr($result, 0, 200) . "...\n";
    
    $data = json_decode($result, true);
    if (isset($data['ok']) && $data['ok'] === true) {
        echo "   Bot Name: " . $data['result']['first_name'] . "\n";
        echo "   Bot Username: @" . $data['result']['username'] . "\n";
    } else {
        echo "   API Error: " . ($data['description'] ?? 'Unknown error') . "\n";
    }
} else {
    echo "   ❌ Bot 1 API call failed\n";
    echo "   HTTP Code: $http_code\n";
    echo "   Error: $error\n";
    echo "   Total Time: " . $info['total_time'] . "s\n";
    echo "   Connect Time: " . $info['connect_time'] . "s\n";
}

echo "\n=== END TEST ===\n";
?>
