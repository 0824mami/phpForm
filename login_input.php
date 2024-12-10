<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <!-- , initial-scale=1.0 -->
    <link rel="stylesheet" href="css/style.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <title>ログイン</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">LOGIN</nav>
    </header>
    <main class="mainWrapper">
        <div class="fanContaintInner">
            <h1 class="atttnTitle"></h1>
            <div class="atttnText">
                <div class="loginBox">
                    <p>こちらはJAZZ愛好会「まつぼっくり」の入り口です。<br>
                        会員番号(ID)とパスワードを入力してお入りください。</p>
                    <form action="login_output.php" method="post">
                        <input type="text" name="email" placeholder="メールアドレス" required>
                        <input type="password" name="password" placeholder="パスワード" required>
                        <div class="btnForm">
                            <button type="submit">ログイン</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </main>



</body>

</html>
</body>

</html>