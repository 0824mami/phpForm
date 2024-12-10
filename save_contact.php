<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require_once 'config.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'] ?? '';

    if (empty($message)) {
        die('メッセージを入力してください。');
    }
    // データベースに保存
    try {
        $pdo = db_connect();
        $stmt = $pdo->prepare('INSERT INTO contact (message) VALUES (:message)');
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        $stmt->execute();
        echo 'お問い合わせを送信しました。';
    } catch (PDOException $e) {
        die('データベースエラー: ' . $e->getMessage());
    }
} else {
    die('無効なリクエストです。');
}
?>
<?php require 'footer.php'; ?>