<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
	$query = mysqli_query($connect, "INSERT INTO  tweet(title,text,logo,img) VALUES('Habr', '" . $_POST['text'] . "', 'images/post2.png', 'images/vesti_hi_tech.jpg')");
	header("Location: http://jija/twitter/avto.php");
?>