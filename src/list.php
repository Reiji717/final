<?php
session_start();
require 'db-connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>食品一覧</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h2>食品一覧</h2>
    <a href="CRUD-menu.php">メニューに戻る</a>

    <?php
    $pdo = new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517435-final;charset=utf8', 'LAA1517435', 'Pass0717');

    foreach ($pdo->query('SELECT * FROM food') as $row) {
        echo '<p>';
        echo $row['food_id'], ':';
        echo $row['food_mei'], ':';
        echo $row['calorie'], 'kcal';
        echo '</p>';
    }
    ?>
</body>
</html>
