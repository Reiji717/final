<?php
$pdo = new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517435-final;charset=utf8', 'LAA1517435', 'Pass0717');
$sql = $pdo->prepare('update food set food_mei=?, calorie=? where food_id=?');
if (empty($_REQUEST['food_mei'])) {
    echo '商品名を入力してください。';
} else if (!preg_match('/^[0-9]+$/', $_REQUEST['calorie'])) {
    echo 'カロリーを整数で入力してください。';
} else {
    try {
        if ($sql->execute([htmlspecialchars($_REQUEST['food_mei']), $_REQUEST['calorie'], $_REQUEST['food_id']])) {
            echo '更新に成功しました。';
        } else {
            echo '更新に失敗しました。';
        }
    } catch (PDOException $e) {
        echo 'エラー: ' . $e->getMessage();
    }
}
?>
<p><input type="button" onclick="location.href='menu.php'" value="メニューへ戻る"></p>