<?php session_start();?>
<?php require 'db-connect.php'; ?>
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
</html>

<?php
    const DBNAME = 'LAA1517435-final';
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517435-final;charset=utf8','','Pass0717')
    
    foreach ($pdo->query('select * from food')as $row){
        echo '<p>';
        echo $row['food_id'], ':';
        echo $row['food_mei'], ':';
        echo $row['calorie'];
        echo '</p>';
    }
    ?>