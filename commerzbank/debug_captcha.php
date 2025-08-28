<?php
// Debug version to identify CAPTCHA issues
session_start();

echo "<h2>CAPTCHA Debug Information</h2>";

// Check session
echo "<h3>Session Information:</h3>";
echo "Session ID: " . session_id() . "<br>";
echo "Session status: " . session_status() . "<br>";
echo "Session data: <pre>" . print_r($_SESSION, true) . "</pre><br>";

// Check POST data
echo "<h3>POST Data:</h3>";
echo "<pre>" . print_r($_POST, true) . "</pre><br>";

// Check if captcha.php exists
echo "<h3>File Check:</h3>";
if (file_exists('./captcha.php')) {
    echo "✅ captcha.php exists<br>";
    include './captcha.php';
    
    // Test CAPTCHA generation
    echo "<h3>CAPTCHA Test:</h3>";
    $question = generateCaptcha();
    echo "Generated question: " . $question . "<br>";
    echo "Session captcha_question: " . $_SESSION['captcha_question'] . "<br>";
    echo "Session captcha_answer: " . $_SESSION['captcha_answer'] . "<br>";
    
    // Test verification
    if (isset($_POST['captcha_answer'])) {
        echo "<h3>Verification Test:</h3>";
        $result = verifyCaptcha($_POST['captcha_answer']);
        echo "User answer: " . $_POST['captcha_answer'] . "<br>";
        echo "Expected answer: " . $_SESSION['captcha_answer'] . "<br>";
        echo "Verification result: " . ($result ? "PASS" : "FAIL") . "<br>";
    }
} else {
    echo "❌ captcha.php does NOT exist<br>";
}

// Check antibot bypass
echo "<h3>Antibot Bypass Check:</h3>";
if (file_exists('./index.php')) {
    $content = file_get_contents('./index.php');
    if (strpos($content, 'bypass_antibot = true') !== false) {
        echo "✅ bypass_antibot = true found in index.php<br>";
    } else {
        echo "❌ bypass_antibot = true NOT found in index.php<br>";
    }
} else {
    echo "❌ index.php does NOT exist<br>";
}

// Check for any antibot includes
echo "<h3>Antibot Include Check:</h3>";
$files = glob('./*.php');
foreach ($files as $file) {
    $content = file_get_contents($file);
    if (strpos($content, 'antibot.php') !== false) {
        echo "⚠️ antibot.php found in: " . basename($file) . "<br>";
    }
}

echo "<h3>Current CAPTCHA Form:</h3>";
?>
<form method="POST">
    <input type="text" name="captcha_answer" placeholder="Enter answer">
    <button type="submit">Test CAPTCHA</button>
</form>
