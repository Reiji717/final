<style>
    .container {
        display: flex;
    }

    .th0, .th1, .td0, .td1, .td2 {
        padding: 5px;
    }
</style>

<h2>食品更新</h2>
<a href="menu.php">メニューに戻る</a>
<div class="container">
    <div class="th0">食品番号</div>
    <div class="th1">食品名</div>
    <div class="th1">カロリー</div>
</div>
<?php
$pdo = new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517435-final;charset=utf8', 'LAA1517435', 'Pass0717');
foreach ($pdo->query('select * from food') as $row) {
    echo '<form action="update-output.php" method="post">';
    echo '<input type="hidden" name="food_id" value="', $row['food_id'], '">';
    echo '<div class="container">';
    echo '<div class="td0">', $row['food_id'], '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="food_mei" value="', $row['food_mei'], '">';
    echo '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="calorie" value="', $row['calorie'], '">';
    echo '</div>';
    echo '<div class="td2"><input type="submit" value="更新"></div>';
    echo '</div>';
    echo '</form>';
}
?>
