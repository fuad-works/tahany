<!DOCTYPE html>
<html>

<head>
    <title>بطاقة المعايدة</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css" />
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
                <h2 class="aid-text">
                    يقدم لكم موقعنا خدمة بطاقة المعايدة بمناسبة رمضان ، وكل عام وأنتم بالف خير ، يمكنك كتابة الإسم أسفله لإنشاء بطاقة خاصة بالإسم المدخل</h2>
                <div class="clr"></div><br>
                <form action="post_card.php" method="get">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                            <input class="inpu" type="text" name="fullname" placeholder="أدخل الإسم هنا ">
                        </div>
                        <div class="uk-margin">
                            <button type="submit" name="Send" class="uk-button button">عرض البطاقة </button>
                        </div>
                    </fieldset>
                </form>
                <div class="clr"></div><br>

            </center>
        </div>
        <footer>
            <a href="#" target="_blank" style="text-decoration:none;">مصمم بكل الحب</a>
        </footer>
    </div>
</body>

</html>