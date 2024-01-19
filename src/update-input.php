<div class="th0">食品番号</div>
<div class="th1">食品名</div>
<div class="th1">カロリー</div>
<?php
$pdo = new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517435-final;charset=utf8', 'LAA1517435', 'Pass0717');
foreach ($pdo->query('select * from food') as $row) {
    echo '<form action="update-output.php" method="post">';
    echo '<input type="hidden" name="id" value="',$row['id'], '">';
    echo '<div class="td0">', $row['id'], '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="name" value="',$row['name'],'">';
    echo '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="calorie" value="',$row['calorie'],'">';
    echo '</div>';
    echo '</div class="td2"><input type="submit" value="更新"></div>';
    echo '</form>';
    echo "¥n";
}
?>