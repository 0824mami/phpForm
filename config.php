<?php require 'header.php'; ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); // 本番環境では0に変更

// セッションの設定と開始
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params(1440, '/'); ////script終了まで有効。sessStartコール前に必要。
    session_start();
}

// データベース接続設定
define('DSN', 'mysql:dbname=shop;host=localhost;charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

// データベース接続用関数（必要に応じて使用）
function db_connect()
{
    try {
        $pdo = new PDO(DSN, DB_USER, DB_PASSWORD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
        return $pdo;
    } catch (PDOException $e) {
        die('データベース接続エラー: ' . $e->getMessage());
    }
}
// var_dump(db_connect());
?>
<?php require 'footer.php'; ?>
