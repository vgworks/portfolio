<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>for文</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width">
</head>
<body>
  <div id="container">
    <h1>FizzBuzz問題（for文を使ってループ処理）</h1>
    <p>3の倍数はfizzとしてcssで赤文字を適用、5の倍数はbuzzでboldに、両方の倍数には両方のcssを適用させる。</p>
    <ul>
    <?php
      for($i = 1; $i <= 30; $i++) {
        if($i % 3 == 0) {
          if($i % 5 == 0) {
            echo "<li class=\"fizz buzz\">{$i}</li>";
          } else {
            echo "<li class=\"fizz\">{$i}</li>"; 
          }
        } else {
          if($i % 5 == 0) {
            echo "<li class=\"buzz\">{$i}</li>";
          } else {
            echo "<li>{$i}</li>";
          }
        }
      }
    ?>
    </ul>
  </div>
</body>
</html>