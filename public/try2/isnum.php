<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
if (empty($_GET['indata'])) { // 入力欄に値が入っているか確認
  die('値を入力してください');
} else {
  $data = filter_input(INPUT_GET, 'indata');  // 入力欄に無理やり配列が入っていないか確認
  if (!mb_ereg('^[0-9]+$', $data)) {
    die('数字を入力してください');  // 正規表現を使って文字をチェック
  }
  echo '入力された数字: '. $data;
}
?>
    </h2>
    </div>
  </body>
</html>
