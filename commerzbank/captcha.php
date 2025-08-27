<?php
session_start();

// German math captcha questions
$captcha_questions = [
    'Was ist 2+2?' => '4',
    'Was ist 3+5?' => '8', 
    'Was ist 7+3?' => '10',
    'Was ist 4+6?' => '10',
    'Was ist 1+9?' => '10',
    'Was ist 5+5?' => '10',
    'Was ist 6+4?' => '10',
    'Was ist 8+2?' => '10',
    'Was ist 9+1?' => '10',
    'Was ist 2+8?' => '10'
];

// Generate random captcha question
function generateCaptcha() {
    global $captcha_questions;
    $question = array_rand($captcha_questions);
    $answer = $captcha_questions[$question];
    
    $_SESSION['captcha_question'] = $question;
    $_SESSION['captcha_answer'] = $answer;
    
    return $question;
}

// Verify captcha answer
function verifyCaptcha($user_answer) {
    if (!isset($_SESSION['captcha_answer'])) {
        return false;
    }
    
    $correct_answer = $_SESSION['captcha_answer'];
    $result = (trim($user_answer) === $correct_answer);
    
    // Clear captcha after verification
    unset($_SESSION['captcha_question']);
    unset($_SESSION['captcha_answer']);
    
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

