<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="css/stylereg.css"/>
</head>
<body>
<?php
require('connect.php');

if(isset($_POST['username']) && isset($_POST['password'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
  $result = mysqli_query($connection, $query);

  if($result){
    $smsg = "Регистрация прошла успешно";
  } else {
    $fmsg = "Ошибка";
  }
}
 ?>


<div id="first">
<a href="index" id="main">Главная</a>
</div>
<h1>Strigalet's question base</h1>
<a href="singin" id="log" >Login</a>
<form  method="POST">
  <?php if(isset($smsg)){ ?><div class="alert-success" role="alert"><?php echo $smsg; ?></div><?php }?>
  <?php if(isset($fmsg)){ ?><div class="alert-danger" role="alert"><?php echo $fmsg; ?></div><?php }?>
  <fieldset>
    <legend>Регистрация</legend>
    <pre>   Email</pre>
    <input type="email"  name="email" placeholder="Email" id="email" autofocus required>
    <pre>   Логин</pre>
    <input type="text"  name="username" placeholder="Username" id="name" required>
    <pre>   Пароль</pre>
    <input type="password"  name="password" placeholder="Password" id="pass" required>
    <br><br>
    <button type="submit">Отправить</button>
  </fieldset>
</form>


</body>
</html>
