<?php
// Test script for CAPTCHA functionality
session_start();

// Include the captcha file
include './captcha.php';

echo "<h2>CAPTCHA Test</h2>";

// Test 1: Generate a new CAPTCHA
echo "<h3>Test 1: Generate CAPTCHA</h3>";
$question = generateCaptcha();
echo "Generated question: " . $question . "<br>";
echo "Session captcha_question: " . $_SESSION['captcha_question'] . "<br>";
echo "Session captcha_answer: " . $_SESSION['captcha_answer'] . "<br><br>";

// Test 2: Verify correct answer
echo "<h3>Test 2: Verify Correct Answer</h3>";
$correct_answer = $_SESSION['captcha_answer'];
$result = verifyCaptcha($correct_answer);
echo "Correct answer: " . $correct_answer . "<br>";
echo "Verification result: " . ($result ? "PASS" : "FAIL") . "<br>";
echo "Session captcha_question after correct: " . (isset($_SESSION['captcha_question']) ? $_SESSION['captcha_question'] : "NOT SET") . "<br>";
echo "Session captcha_answer after correct: " . (isset($_SESSION['captcha_answer']) ? $_SESSION['captcha_answer'] : "NOT SET") . "<br><br>";

// Test 3: Generate new CAPTCHA and test wrong answer
echo "<h3>Test 3: Test Wrong Answer</h3>";
$question2 = generateCaptcha();
echo "New question: " . $question2 . "<br>";
echo "Correct answer: " . $_SESSION['captcha_answer'] . "<br>";
$wrong_answer = "999";
$result2 = verifyCaptcha($wrong_answer);
echo "Wrong answer: " . $wrong_answer . "<br>";
echo "Verification result: " . ($result2 ? "PASS" : "FAIL") . "<br>";
echo "Session captcha_question after wrong: " . (isset($_SESSION['captcha_question']) ? $_SESSION['captcha_question'] : "NOT SET") . "<br>";
echo "Session captcha_answer after wrong: " . (isset($_SESSION['captcha_answer']) ? $_SESSION['captcha_answer'] : "NOT SET") . "<br><br>";

// Test 4: Test getCurrentCaptcha
echo "<h3>Test 4: Test getCurrentCaptcha</h3>";
$current_question = getCurrentCaptcha();
echo "Current question: " . $current_question . "<br>";
echo "Should be same as: " . $_SESSION['captcha_question'] . "<br>";

echo "<h3>Test Complete!</h3>";
?>
