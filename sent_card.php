<?php
if (!isset($_GET['fullname'])) {
    //redirct('index.php');
    exit;
}


function url()
{
    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $_SERVER['REQUEST_URI']
    );
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>بطاقة المعايدة</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <center>
    </center>
    <div id="HomePage">
        <div>
            <center>
                <div class="clr"></div>

                <a href="index.php"><img src="img/logo.png" style="width:100px; margin-bottom: 20px;" /></a>
                <div class="clr"></div>
                <h2 class="aid-text">وصلتك تهنئة</h2>
                <div class="clr"></div><br>

                <img src="get_image.php?fullname=<?php echo $_GET["fullname"]; ?>" />
                <hr />
                <a href="get_image.php?fullname=<?php echo $_GET["fullname"]; ?>&download=yes" class="uk-button button">تنزيل الصورة </a>
                <div class="clr"></div><br>
                <a href="index.php" class="uk-button button">أرسل تهنئة جديدة</a>
                <div class="clr"></div><br>

            </center>
        </div>
        <footer>
            <a href="#" target="_blank" style="text-decoration:none;">مصمم بكل الحب</a>
        </footer>
    </div>
</body>

</html>