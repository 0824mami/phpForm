<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require_once 'config.php'; ?>

<?php
if (isset($_SESSION['members'])) {
    unset($_SESSION['members']);
    echo 'ログアウトしました。';
} else {
    echo 'すでにログアウトしています。';
}
?>
<?php require 'footer.php'; ?>