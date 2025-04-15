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
// 値の存在チェック
if (empty($_POST['username']) || empty($_POST['useraddress']) || empty($_POST['usermail'])) {
  die('値を入力してください');
}

// 名前：20文字までの日本語入力
if (!mb_ereg('^[ぁ-んァ-ン一-龥]{1,20}$', $_POST['username'])) {
  die('有効な名前を入力してください');
}

// 住所：50文字までの日本語入力
if (!mb_ereg('^[ぁ-んァ-ン一-龥]{1,50}$', $_POST['useraddress'])) {
  die('有効な住所を入力してください');
}

// メールアドレス：100文字まで, [.-_@]が利用可能
if (!mb_ereg('^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$', $_POST['usermail'])) {
  die('有効なメールアドレスを入力してください');
}

// それぞれの値を取得
echo "あなたが入力した値<br>";
echo "名前：" . $_POST['username'] . "<br>";
echo "住所：" . $_POST['useraddress']. "<br>";
echo "メールアドレス：" . $_POST['usermail'];
?>
    </h2>
    </div>
  </body>
</html>
