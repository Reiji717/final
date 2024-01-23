<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>カロリーレコードメニュー</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h2>カロリーレコード</h2>
    <table>
    <tr>
    <form action="list.php" method="post">
        <td><button type="submit" name="action" value="list">一覧</button></td>
    </form>
    <form action="insert-input.php" method="post">
        <td><button type="submit" name="action" value="insert">登録</button></td>
    </form> 
    <form action="update-input.php" method="post">
        <td><button type="submit" name="action" value="update">更新</button></td>
    </form>
    <form action="delete-input.php" method="post">
        <td><button type="submit" name="action" value="delete">削除</button></td>
    </form>
    </tr>
    </table>
</body>
</html>
