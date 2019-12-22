<!DOCTYPE html>
<html>
<head>
<title>Hard: Block#1</title>
<link rel="stylesheet" href="css/styleblock.css"/>
<script src="js/hardblock1.js"></script>
</head>
<body>
<?php
  session_start();
  require('header.php');

  if(!isset($_SESSION['username']))
    header("Location: singin");

?>
<h1 style="color: red;">Блок вопросов #1</h1>
<div id="first">
<a href="index" id="main">Главная</a>
</div>

<div id="releases__box">

</div>



</body>
</html>
