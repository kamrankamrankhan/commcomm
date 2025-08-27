<?php
echo "Testing anti.php...<br>";

// Test JSON file access
echo "1. Testing JSON file access...<br>";
$data = json_decode(file_get_contents('./prevents/crawler-user-agents.json'), true);
echo "JSON loaded successfully<br>";

// Test basic logic
echo "2. Testing basic logic...<br>";
$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo "User Agent: $userAgent<br>";

echo "3. Testing patterns...<br>";
$patterns = array();
foreach($data as $entry) {
    if ($entry['pattern'] == 'NoPattern' && isset($entry['instances'])) {
        foreach ($entry['instances'] as $instance) {
            $patterns[] = '/' . preg_quote($instance, '/') . '/';
        }
    }
}
echo "Patterns created: " . count($patterns) . "<br>";

echo "4. Testing bot detection...<br>";
$isBota = false;
foreach ($patterns as $pattern) {
    if (preg_match($pattern, $userAgent)) {
        $isBota = true;
        break;
    }
}
echo "Bot detection result: " . ($isBota ? 'true' : 'false') . "<br>";

echo "anti.php test completed successfully!<br>";
?>
