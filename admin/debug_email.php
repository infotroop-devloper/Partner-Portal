<?php
// ===========================================
// EMAIL DEBUGGING TOOL
// debug_email.php - Run this file directly to test your email setup
// ===========================================

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust path as needed
include_once('config/app_config.php'); // Adjust path as needed

echo "<html><head><title>Email Debug Tool</title></head><body>";
echo "<h1>Email Configuration Debugging Tool</h1>";

// ===========================================
// STEP 1: Check Configuration Constants
// ===========================================
function checkConfiguration() {
    echo "<h2>🔍 Step 1: Checking Configuration</h2>";
    
    $configs = [
        'NOREPLY_SMTP' => defined('NOREPLY_SMTP') ? NOREPLY_SMTP : 'NOT DEFINED',
        'NOREPLY_EMAIL_ID' => defined('NOREPLY_EMAIL_ID') ? NOREPLY_EMAIL_ID : 'NOT DEFINED',
        'NOREPLY_PWD' => defined('NOREPLY_PWD') ? (strlen(NOREPLY_PWD) > 0 ? '***SET***' : 'EMPTY') : 'NOT DEFINED',
        'NOREPLY_SECURITY' => defined('NOREPLY_SECURITY') ? NOREPLY_SECURITY : 'NOT DEFINED',
        'NOREPLY_PORT' => defined('NOREPLY_PORT') ? NOREPLY_PORT : 'NOT DEFINED'
    ];
    
    echo "<table border='1' style='border-collapse: collapse; margin: 10px 0;'>";
    echo "<tr><th>Setting</th><th>Value</th><th>Status</th></tr>";
    
    foreach ($configs as $key => $value) {
        $status = ($value === 'NOT DEFINED' || $value === 'EMPTY') ? '❌' : '✅';
        $color = ($value === 'NOT DEFINED' || $value === 'EMPTY') ? 'red' : 'green';
        echo "<tr><td>$key</td><td style='color: $color;'>$value</td><td>$status</td></tr>";
    }
    echo "</table>";
    
    return !in_array('NOT DEFINED', $configs) && !in_array('EMPTY', $configs);
}

// ===========================================
// STEP 2: Test SMTP Connection
// ===========================================
function testSMTPConnection() {
    echo "<h2>🌐 Step 2: Testing SMTP Connection</h2>";
    
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = NOREPLY_SMTP;
        $mail->SMTPAuth = true;
        $mail->Username = NOREPLY_EMAIL_ID;
        $mail->Password = NOREPLY_PWD;
        $mail->SMTPSecure = NOREPLY_SECURITY;
        $mail->Port = NOREPLY_PORT;
        
        // Enable debug output
        $mail->SMTPDebug = SMTP::DEBUG_CONNECTION;
        $mail->Debugoutput = 'html';
        
        // Test connection
        echo "<div style='background: #f0f0f0; padding: 10px; margin: 10px 0; border: 1px solid #ccc;'>";
        $result = $mail->smtpConnect();
        echo "</div>";
        
        if ($result) {
            echo "<div style='color: green; font-weight: bold;'>✅ SMTP Connection Successful!</div>";
            $mail->smtpClose();
            return true;
        } else {
            echo "<div style='color: red; font-weight: bold;'>❌ SMTP Connection Failed!</div>";
            return false;
        }
        
    } catch (Exception $e) {
        echo "<div style='color: red; font-weight: bold;'>❌ Connection Error: " . $e->getMessage() . "</div>";
        return false;
    }
}

// ===========================================
// STEP 3: Test Simple Email Send
// ===========================================
function testSimpleEmail($testEmail = 'omkarswara21@gmail.com') {
    echo "<h2>📧 Step 3: Testing Simple Email Send</h2>";
    
    try {
        $mail = new PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();
        $mail->Host = NOREPLY_SMTP;
        $mail->SMTPAuth = true;
        $mail->Username = NOREPLY_EMAIL_ID;
        $mail->Password = NOREPLY_PWD;
        $mail->SMTPSecure = NOREPLY_SECURITY;
        $mail->Port = NOREPLY_PORT;
        
        // Enable debug
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Debugoutput = 'html';
        
        // Recipients
        $mail->setFrom(NOREPLY_EMAIL_ID, 'Debug Test');
        $mail->addAddress($testEmail);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Debug Test Email - ' . date('Y-m-d H:i:s');
        $mail->Body = '<h2>Test Email</h2><p>This is a debug test email sent on ' . date('Y-m-d H:i:s') . '</p>';
        
        echo "<div style='background: #f0f0f0; padding: 10px; margin: 10px 0; border: 1px solid #ccc;'>";
        $result = $mail->send();
        echo "</div>";
        
        if ($result) {
            echo "<div style='color: green; font-weight: bold;'>✅ Simple email sent successfully to $testEmail!</div>";
            return true;
        } else {
            echo "<div style='color: red; font-weight: bold;'>❌ Simple email failed to send</div>";
            return false;
        }
        
    } catch (Exception $e) {
        echo "<div style='color: red; font-weight: bold;'>❌ Email Error: " . $e->getMessage() . "</div>";
        return false;
    }
}

// ===========================================
// STEP 4: Test Template Email (Like Partner System)
// ===========================================
function testTemplateEmail($testEmail = 'omkarswara21@gmail.com') {
    echo "<h2>📄 Step 4: Testing Template Email (Partner System Simulation)</h2>";
    
    // Create a simple template for testing
    $templateContent = '<!DOCTYPE html>
<html>
<head><title>Test Template</title></head>
<body>
    <h1>Welcome {{first_name}}!</h1>
    <p>Your username is: {{username}}</p>
    <p>Your password is: {{password}}</p>
    <p>Test sent at: ' . date('Y-m-d H:i:s') . '</p>
</body>
</html>';
    
    try {
        $mail = new PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();
        $mail->Host = NOREPLY_SMTP;
        $mail->SMTPAuth = true;
        $mail->Username = NOREPLY_EMAIL_ID;
        $mail->Password = NOREPLY_PWD;
        $mail->SMTPSecure = NOREPLY_SECURITY;
        $mail->Port = NOREPLY_PORT;
        
        // Recipients
        $mail->setFrom(NOREPLY_EMAIL_ID, 'Template Test');
        $mail->addAddress($testEmail);
        
        // Replace template variables (simulate your partner system)
        $htmlContent = str_replace(
            ['{{first_name}}', '{{username}}', '{{password}}'],
            ['Test User', 'test@example.com', 'testpass123'],
            $templateContent
        );
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Template Test Email - Partner System';
        $mail->Body = $htmlContent;
        
        $result = $mail->send();
        
        if ($result) {
            echo "<div style='color: green; font-weight: bold;'>✅ Template email sent successfully!</div>";
            return true;
        } else {
            echo "<div style='color: red; font-weight: bold;'>❌ Template email failed to send</div>";
            return false;
        }
        
    } catch (Exception $e) {
        echo "<div style='color: red; font-weight: bold;'>❌ Template Email Error: " . $e->getMessage() . "</div>";
        return false;
    }
}

// ===========================================
// STEP 5: Check Common Issues
// ===========================================
function checkCommonIssues() {
    echo "<h2>⚠️ Step 5: Checking Common Issues</h2>";
    
    $issues = [];
    
    // Check PHP extensions
    if (!extension_loaded('openssl')) {
        $issues[] = "OpenSSL extension is not loaded (required for secure SMTP)";
    }
    
    if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        $issues[] = "PHPMailer is not properly installed";
    }
    
    // Check template file
    $templatePath = "templates/welcome-message.php";
    if (!file_exists($templatePath)) {
        $issues[] = "Template file does not exist: $templatePath";
    } elseif (!is_readable($templatePath)) {
        $issues[] = "Template file is not readable: $templatePath";
    }
    
    // Check log directory
    if (defined('LOGPATH')) {
        if (!is_dir(LOGPATH)) {
            $issues[] = "Log directory does not exist: " . LOGPATH;
        } elseif (!is_writable(LOGPATH)) {
            $issues[] = "Log directory is not writable: " . LOGPATH;
        }
    }
    
    if (empty($issues)) {
        echo "<div style='color: green; font-weight: bold;'>✅ No common issues found!</div>";
    } else {
        echo "<div style='color: red; font-weight: bold;'>❌ Issues found:</div>";
        echo "<ul>";
        foreach ($issues as $issue) {
            echo "<li style='color: red;'>$issue</li>";
        }
        echo "</ul>";
    }
    
    return empty($issues);
}

// ===========================================
// MAIN EXECUTION
// ===========================================
echo "<div style='background: #e6f3ff; padding: 15px; margin: 20px 0; border-left: 4px solid #007bff;'>";
echo "<strong>Instructions:</strong><br>";
echo "1. Save this file as 'debug_email.php' in your project root<br>";
echo "2. Make sure your app_config.php is properly configured<br>";
echo "3. Access this file via browser: http://yoursite.com/debug_email.php<br>";
echo "4. Review each step's output to identify the exact issue<br>";
echo "</div>";

// Run all tests
$configOk = checkConfiguration();
$connectionOk = $configOk ? testSMTPConnection() : false;
$simpleEmailOk = $connectionOk ? testSimpleEmail() : false;
$templateEmailOk = $simpleEmailOk ? testTemplateEmail() : false;
$commonIssuesOk = checkCommonIssues();

// Final summary
echo "<h2>📊 Final Summary</h2>";
echo "<table border='1' style='border-collapse: collapse; margin: 10px 0;'>";
echo "<tr><th style='padding: 8px;'>Test</th><th style='padding: 8px;'>Status</th></tr>";
echo "<tr><td style='padding: 8px;'>Configuration</td><td style='padding: 8px;'>" . ($configOk ? '✅ Pass' : '❌ Fail') . "</td></tr>";
echo "<tr><td style='padding: 8px;'>SMTP Connection</td><td style='padding: 8px;'>" . ($connectionOk ? '✅ Pass' : '❌ Fail') . "</td></tr>";
echo "<tr><td style='padding: 8px;'>Simple Email</td><td style='padding: 8px;'>" . ($simpleEmailOk ? '✅ Pass' : '❌ Fail') . "</td></tr>";
echo "<tr><td style='padding: 8px;'>Template Email</td><td style='padding: 8px;'>" . ($templateEmailOk ? '✅ Pass' : '❌ Fail') . "</td></tr>";
echo "<tr><td style='padding: 8px;'>Common Issues</td><td style='padding: 8px;'>" . ($commonIssuesOk ? '✅ Pass' : '❌ Fail') . "</td></tr>";
echo "</table>";

if ($templateEmailOk) {
    echo "<div style='color: green; font-weight: bold; font-size: 18px; margin: 20px 0;'>🎉 All tests passed! Your email system should work.</div>";
    echo "<div style='background: #d4edda; padding: 15px; border: 1px solid #c3e6cb; border-radius: 4px;'>";
    echo "<strong>Next Steps:</strong><br>";
    echo "1. Your email configuration is working correctly<br>";
    echo "2. The issue might be in your partner acceptance code logic<br>";
    echo "3. Check that the email address from the database is valid<br>";
    echo "4. Verify the template file path in your actual code<br>";
    echo "</div>";
} else {
    echo "<div style='color: red; font-weight: bold; font-size: 18px; margin: 20px 0;'>❌ Email system has issues that need to be fixed.</div>";
    echo "<div style='background: #f8d7da; padding: 15px; border: 1px solid #f5c6cb; border-radius: 4px;'>";
    echo "<strong>Next Steps:</strong><br>";
    echo "1. Fix the failed tests above in order<br>";
    echo "2. Check your app_config.php file<br>";
    echo "3. Verify your SMTP server settings<br>";
    echo "4. Contact your hosting provider if connection issues persist<br>";
    echo "</div>";
}

echo "</body></html>";
?>