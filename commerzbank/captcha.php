<?php
// Only start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// German math captcha questions
$captcha_questions = [
    'Was ist 2 + 2?' => '4',
    'Was ist 3 + 4?' => '7', 
    'Was ist 5 + 3?' => '8',
    'Was ist 1 + 6?' => '7',
    'Was ist 4 + 5?' => '9',
    'Was ist 7 + 2?' => '9',
    'Was ist 6 + 1?' => '7',
    'Was ist 8 + 1?' => '9',
    'Was ist 3 + 6?' => '9',
    'Was ist 2 + 7?' => '9'
];

// Generate random captcha question
function generateCaptcha() {
    global $captcha_questions;
    $question_keys = array_keys($captcha_questions);
    $random_key = $question_keys[array_rand($question_keys)];
    $question_text = $random_key;
    $answer = $captcha_questions[$random_key];
    
    $_SESSION['captcha_question'] = $question_text;
    $_SESSION['captcha_answer'] = $answer;
    
    return $question_text;
}

// Verify captcha answer
function verifyCaptcha($user_answer) {
    if (!isset($_SESSION['captcha_answer'])) {
        return false;
    }
    
    $correct_answer = $_SESSION['captcha_answer'];
    $result = (trim($user_answer) === $correct_answer);
    
    // Clear captcha after verification only if correct
    if ($result) {
        unset($_SESSION['captcha_question']);
        unset($_SESSION['captcha_answer']);
    }
    
    return $result;
}

// Get current captcha question
function getCurrentCaptcha() {
    if (!isset($_SESSION['captcha_question'])) {
        return generateCaptcha();
    }
    return $_SESSION['captcha_question'];
}
?>

