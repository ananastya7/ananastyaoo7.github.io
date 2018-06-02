<?php
	require_once "connect.php";
	if (isset($_POST['do_pass'])){
		    $oldpass = $_POST['old_pass'];
			$password = $_POST['password'];
		    $reppass = $_POST['pass2'];
	if ($oldpass == '') {
        exit("Вы не ввели текущий пароль<br><a href='smena.php'>Вернуться назад</a>");
    }
	
	if ($password == '') {
        exit("Вы не ввели новый пароль<br><a href='smena.php'>Вернуться назад</a>");
    }	
	
	if ($reppass == '') {
        exit("Вы не подтвердили новый пароль<br><a href='smena.php'>Вернуться назад</a>");
    }
    

			$up = mysql_query("UPDATE users SET password='$password' WHERE 1");
			if ($up == true) {
				echo "<meta http-equiv='Refresh' content='0; URL=smena.php'>";
	}
	 
}
?>
<html>
<head>
<title>Смена пароля | Здоровое питание</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->

<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="icon" href="images/logo.ico">
</head>

	<body>
	<div class="regis">Смена пароля</div>
	<div id="cd-login">
		<form action="pass.php" method="POST" class="cd-form">
		
			<p class="fieldset">
				<label class="image-replace cd-password" for="signin-password">Пароль</label>
				<input class="full-width has-padding has-border" id="signin-password" type="password" name="old_pass" placeholder="Текущий пароль">
				<span class="cd-error-message">Здесь сообщение об ошибке!</span>
			</p>
			
			<p class="fieldset">
				<label class="image-replace cd-password" for="signin-password">Пароль</label>
				<input class="full-width has-padding has-border" id="signin-password" type="password" name="password" placeholder="Новый пароль">
				<span class="cd-error-message">Здесь сообщение об ошибке!</span>
			</p>
			
			<p class="fieldset">
				<label class="image-replace cd-password" for="signin-password">Пароль</label>
				<input class="full-width has-padding has-border" id="signin-password" type="password" name="pass2" placeholder="Подтвердите пароль">
				<span class="cd-error-message">Здесь сообщение об ошибке!</span>
			</p>
			
			
			
			<p class="fieldset">
				<input class="width" type="submit" value="Изменить пароль" name="do_pass">
			</p>
			</div>
		</form>
	</body>
</html>