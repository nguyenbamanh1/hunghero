<?php
session_start();

// Hàm tạo mã captcha
function generateCaptcha($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $captcha = '';

    for ($i = 0; $i < $length; $i++) {
        $captcha .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $captcha;
}

// Hàm tạo màu ngẫu nhiên
function getRandomColor($image) {
    return imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
}

// Tạo và lưu giá trị captcha vào session
$captcha = generateCaptcha();
$_SESSION['captcha'] = $captcha;

// Tạo hình ảnh captcha
$image = imagecreatetruecolor(200, 50);
$bgColor = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, 200, 50, $bgColor);
putenv('GDFONTPATH=' . realpath('.'));
$font = 'assets/fonts/segoeprb.ttf';
imagettftext($image, 20, 0, 50, 30, $textColor, $font, $captcha);
//imagestring($image, 10, 20, 20, $captcha, $textColor);
// Vẽ các đường nét ngẫu nhiên lên hình ảnh captcha
for ($i = 0; $i < 10; $i++) {
    $x1 = rand(0, 200);
    $y1 = rand(0, 50);
    $x2 = rand(0, 200);
    $y2 = rand(0, 50);
    $color = getRandomColor($image);
    imageline($image, $x1, $y1, $x2, $y2, $color);
}

// Hiển thị hình ảnh captcha
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>