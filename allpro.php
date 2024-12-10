<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
<?php require_once 'menu.php'; ?>
<form action="allpro.php" method="post">
    商品検索
    <input type="text" name="keyword">
    <input type="submit" value="検索">
</form>
<table>
    <tr>
        <th>商品番号</th>
        <th>商品名</th>
        <th>価格</th>
    </tr>
    <?php
    // データベース接続
    $pdo = db_connect(); // 関数を使ってPDO接続を取得

    if (isset($_REQUEST['keyword'])) {
        $sql = $pdo->prepare('select * from product where name like ?');
        $sql->execute(['%' . $_REQUEST['keyword'] . '%']);
    } else {
        $sql = $pdo->prepare('select * from product');
        $sql->execute([]);
    }
    foreach ($sql as $row) {
        $id = $row['id'];
        echo '<tr>';
        echo '<td>', $id, '</td>';
        echo '<td>';
        echo '<a href="detail.php?id=', $id, '">', $row['name'], '</a>';
        echo '</td>';
        echo '<td>', $row['price'], '</td>';
        echo '</tr>';
    }
    ?>
</table>
<?php require 'footer.php'; ?>