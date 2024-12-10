<?php
echo "ようこそ〇〇さん";
// session_start();
// if (!isset($_SESSION['user_id'])) {
//     header('Location: login_act.php');
//     exit;
// }

// $pdo = new PDO('mysql:host=localhost;dbname=moving_db', 'username', 'password');
// $stmt = $pdo->prepare('SELECT * FROM files WHERE user_id = ?');
// $stmt->execute([$_SESSION['user_id']]);
// $files = $stmt->fetchAll();

// データベース接続
$pdo = db_connect();

$stmt = $pdo->prepare('SELECT * FROM files WHERE user_id = ?');
// $stmt->execute([$_SESSION['user_id']]);
$files = $stmt->fetchAll();


echo "<h1>アップロードされたファイル一覧</h1>";
foreach ($files as $file) {
    echo "<a href='view_file.php?file_id={$file['id']}'>{$file['file_name']}</a><br>";
}
