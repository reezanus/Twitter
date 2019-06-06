<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<!--НАВИГАЦИЯ-->
	<div class="container-fluid bg-info">
	</div>
	<!--CONTENT-->
	<div class="container-fluid bg-secondary">
		<div class="row col-12 bg-white">
			<a href=""><img src="images/icons8-home-50.png" class="w-100"><p>Главная</p></a>
		</div>
		<div class="row">
			<div class="col-3">
				<!--levaia kolonka-->
				<div class="col-12 bg-white">
					<div>
							<a href=""><img src="images/background.jpg" class="w-100"></a>
					</div>
					<div class="row">
						<div class="col-4">
								<img src="images/avatar.jpg" class="rounded-circle">
						</div>
						<div class="col-8">
							<div class="d-flex">
								<a href=""><h3>jduys</h3></a>
							</div>
							<div class="d-flex">
								<a href=""><p>@jduys</a></p>
							</div>
						</div>
					</div>
						<div class="col-6">
							<a href="">
								<p>Твиты</p><br>276
							</a>
						</div>
						<div class="col-6">
							<a href="">
								<p>Читаемые</p><br>106
							</a>
						</div>
				</div>
			</div>
			<!--Средняя колонка-->
			<div class="col-6 bg-info">
				<div class="col-12">
					<form method='POST' action="dfg.php">
						<img src="images/avatar.jpg" class="rounded-circle">
						<input name="text" class="">
						<button>Запись</button>
					</form>
				</div>
				<!--post eto-->
				<!--подключаем к базе данных-->
				<?php
				$connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
				$query = mysqli_query($connect,'SELECT * FROM tweet ORDER BY id DESC');?>
				<!--создаем запрос к базе данных(select)-->
				<?php for($i=0;$i < $query->num_rows; $i++){ 
					$res = $query->fetch_assoc(); ?>
				<div class="row mt-4">
					<div class="col-xl-2">
						<a href=""><?php echo '<img src="' . $res['logo'] . '">';?></a>					
					</div>
					<div class="col-xl-10">
						<!-- account panel: -->
						<div class="d-flex">
							<h5><a href="#" class="text-dark"><?php echo $res['title']; ?></a></h5>
							<p><a href="#" class="text-muted"></a></p>
						</div>
						<div class="">
								<!-- post text -->
								<?php echo $res['text']?>
						</div>
						<div class="">
								<!-- post image -->
								<a href=""><?php echo '<img src="' . $res['img'] . '" class="w-100">'?></a>
						</div>
						<div class="">	
								<a href="http://amp.gs/vMPM"></a>
						</div>
						<div class="d-flex">
							<div class="col-xl-3">
								<a href=""><img src="images/comment.png"></a>
							</div>
							<div class="col-xl-3">
								<a href=""><img src="images/retweet.png"></a>
							</div>
							<div class="col-xl-3">
								<a href=""><img src="images/like.png"></a>
							</div>
							<div class="col-xl-3">
								<a href=""><img src="images/envelope.png"></a>
							</div>
						</div>
						<div class="col-12">
								<form method="POST" action="php1.php">
									<?php echo '<input name="id" value="' . $res['id'] . '" >'; ?>
										<button>Удалить</button>
								</form>
								<form method="POST" action="change.php">
									<?php echo '<input name="text" value="' . $res['text'] . '">'; ?>
									<?php echo '<input name="id" value="' . $res['id'] . '" >'; ?>
										<button>Реадактировать</button>
								</form>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
			<!--Правая колонка-->
			<div class="col-3">
				
			</div>
		</div>	
	</div>
</body>
</html>
<!-- header("Location: название сайта")  header("Location: http://twitter/index.php");-->