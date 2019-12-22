<!DOCTYPE html>
<html>
<head>
<title>Entrance</title>
<link rel="stylesheet" href="css/stylesing.css"/>
</head>
<body>

<div id="first">
<a href="index" id="main">Главная</a>
</div>
<h1>Strigalet's question base</h1>
<a href="regis" id="log" >Registration</a>
<form method="POST">
  <?php if(isset($smsg)){ ?><div class="alert-success" role="alert"><?php echo $smsg; ?></div><?php }?>
  <?php if(isset($fsmsg)){ ?><div class="alert-danger" role="alert"><?php echo $fsmsg; ?></div><?php }?>
  <fieldset>
    <legend>Вход</legend>
    <pre>   Логин</pre>
    <input type="text"  name="username" placeholder="Username" id="name" autofocus required>
    <pre>   Пароль</pre>
    <input type="password"  name="password" placeholder="Password" id="pass" required>
    <br><br>
    <button type="submit" >Отправить</button>
  </fieldset>
</form>
<?php

  session_start();
  require('connect.php');

  if(isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count  = mysqli_num_rows($result);

    if($count == 1) {
      $_SESSION['username'] = $username;
    } else {
      $fmsg = "Ошибка";
    }
}

if(isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo "<p>Hello, " . $username . ", вы вошли</p>";
  echo "<a href='logout' id='out'>Logout</a>";
}


?>


</body>
</html>
