<?php require_once 'config.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="question" style>
    <div id="logo">
        <div id="contents">
            <div class="question_item">
                <h1>ご質問</h1>
                <p class="about">
                    まつぼっくりずへのお問い合わせページです<br>
                    お問い合わせ前に、FAQでご確認をお願いします<br>
                    <img src="images/temp_line01.png" alt="">
                </p>
                <h2>
                    <img src="images/titleFaq.gif" alt="">
                </h2>

                <dl class="basic">
                    <dt>会員番号</dt>
                    <dd></dd>
                    <dt>お名前</dt>
                    <dd></dd>

                    <dt>メールアドレス</dt>
                    <dd></dd>


                </dl>
                <form action="save_contact.php" method="post">
                    <div class="msg">

                        <p>ここに内容を記入の上、送信してください</p>
                        <textarea name="message" id="message"></textarea>


                    </div>
                    <input class="formFinalButn" type="submit" value="送信する">
                    <input class="formFinalButn" type="submit" value="やり直す">
                </form>
            </div>
        </div>
        <?php require 'footer.php'; ?>