<?php
$pdo = new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517435-final;charset=utf8', 'LAA1517435', 'Pass0717');
$sql=$pdo->prepare('delete from food where food_id=?');
if ($sql->execute([$_REQUEST['food_id']])){
    echo '削除に成功しました。';
}else{
    echo '削除に失敗しました。';
}
?>
<p><input type="button" onclick="location.href='menu.php'" value="メニューへ戻る"></p>