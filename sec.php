<?php
// sec.php - صفحة الكابتشا
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['captcha'])) {
    // إذا تم إرسال النموذج وحل الكابتشا
    setcookie('captcha_verified', 'true', time() + 3600, '/'); // تعيين كوكي لمدة ساعة
    header('Location: ' . $_SERVER['HTTP_REFERER']); // إعادة التوجيه إلى الصفحة السابقة
    exit;
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحقق من الكابتشا</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .captcha-box {
            border: 1px solid #ccc;
            padding: 20px;
            display: inline-block;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="captcha-box">
        <h2>التحقق من الكابتشا</h2>
        <form method="POST">
            <label>
                <input type="checkbox" name="captcha" required> أنا لست روبوتًا
            </label>
            <br><br>
            <button type="submit">إرسال</button>
        </form>
    </div>
</body>
</html>
