<!DOCTYPE html>
<html>
<head>
<title>Review</title>
<link rel="stylesheet" href="css/stylerev.css"/>
</head>
<body>


<?php
session_start();
require('header.php');

if (isset($_POST['comment'])){
	$name = $_POST['name'];
	$comment = $_POST['comment'];

	$query = "INSERT INTO users (name, comment) VALUES ('$name', '$comment')";
	$result = mysqli_query($connection, $query);
}

?>
<div id="first">
<a href="index" id="main">Главная</a>
</div>
<h1>Strigalet's question base</h1>
<!--<h2>Напишите свой отзыв по поводу данного сайта</h2>-->
<?php
$query = "SELECT * FROM users WHERE checked=1";
$result = mysqli_query($connection, $query);
?>
<form method="POST" style="text-align: center;">
	<?php
	if(isset($_SESSION['username'])){
		echo "<h2>Leave us a comment, ";
		echo $_SESSION['username'];
		echo '!</h2><input type="hidden" name="name" value="';
		echo $_SESSION['username'];
		echo '">';
	} else {
	  header("Location: singin");
	}
	?>
	<textarea id="text" type="text" placeholder="Your comment..." name="comment" required></textarea>
	<br>
	<button type="submit" id="comment__button">Submit</button>
</form>
</body>
</html>
