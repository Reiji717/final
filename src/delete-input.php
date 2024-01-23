<h2>食品消去</h2>
    <a href="menu.php">メニューに戻る</a>
<table>
<tr><th>食品番号</th><th>食品名</th><th>カロリー</th><th></th></tr>
<?php
$pdo = new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517435-final;charset=utf8', 'LAA1517435', 'Pass0717');
foreach ($pdo->query('select * from food') as $row) {
    echo '<tr>';
    echo '<td>',$row['food_id'],'</td>';
    echo '<td>',$row['food_mei'],'</td>';
    echo '<td>',$row['calorie'],'</td>';
    echo '<td>';
    echo '<a href="delete-output.php?food_id=',$row['food_id'],'">削除</a>';
    echo '</td>';
    echo '</tr>';
}
?>
</table>