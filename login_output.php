<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require_once 'config.php'; ?>
<?php
// データベース接続
$pdo = db_connect();
unset($_SESSION['members']);
$sql = $pdo->prepare('select * from members where email=? and password=?');
$sql->execute([$_REQUEST['email'], $_REQUEST['password']]);
foreach ($sql as $row) {
    $_SESSION['members'] = [
        'id' => $row['id'],
        'name' => $row['name'],
        'email' => $row['email'],
        'password' => $row['password'],
        'created' => $row['created']
    ];
}
if (isset($_SESSION['members'])) {
    echo 'いらっしゃいませ、', $_SESSION['members']['name'], 'さん。';
} else {
    echo 'メールアドレスまたはパスワードが違います。';
}
?>


<?php require 'footer.php'; ?>