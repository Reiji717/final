<?php
$pdo = new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517435-final;charset=utf8', 'LAA1517435', 'Pass0717');

if (isset($_REQUEST['food'], $_REQUEST['calorie'])) {

     $sql = $pdo->prepare('INSERT INTO food (food_mei, calorie) VALUES (?, ?)');
    if ($sql->execute([$_REQUEST['food'], $_REQUEST['calorie']])) {
        echo '追加に成功しました';
    } else {
        echo '追加に失敗しました';
    }
}
?>
