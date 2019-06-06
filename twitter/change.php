<form method='POST' action="change.php">
	<meta charset="UTF-8">
	<?php echo '<input type="" name="text" value="'. $_POST['text'] . '">';?>
	<?php echo '<input type="" name="id" value="'. $_POST['id'] . '">';?>
	<button>СДелать</button>
</form>
<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '','aiaal_ch_15');
	$query = mysqli_query($connect ,"UPDATE tweet SET text ='" . $_POST['text'] . "' WHERE id = '" . $_POST['id'] . "'");
?>