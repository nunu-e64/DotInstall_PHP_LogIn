<?php

//ユーザーの一覧

require_once(__DIR__ . '/../config/config.php');
//
// $app = new MyApp\Controller\Index();
//
// $app->run();

?>

<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='utf-8'>
  <title>Log In</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <form action="" method="post">
      <p>
        <input tyep="text" name="email" placeholder="email">
      </p>
      <p>
        <input tyep="password" name="passwrod" placeholder="password">
      </p>
      <div class="btn">Log In</div>
      <p><a href="/signup.php">Sign Up</a></p>
    </form>
  </div>
</body>
</html>
