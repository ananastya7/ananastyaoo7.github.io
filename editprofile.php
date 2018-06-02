<?php
	require "connect.php";
	
?>
<!DOCTYPE html>
<head>
<title>Изменение данных | Здоровое питание</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/js.js"></script>
<!-- //js -->

<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="icon" href="images/logo.ico">
</head>
    <body>
<?php
	$mail = $_POST['email'];
	$user_name = $_POST['user_name'];
	$name_user = $_POST['name_user'];
	$country = $_POST['country'];
	$city = $_POST['city'];
		
		
		
		if (isset($_POST['user_name'])){
		$user_name= stripslashes($user_name);
		$user_name = htmlspecialchars($user_name);
		$user_name = trim($user_name);

		$up = mysql_query("UPDATE users SET user_name='$user_name' WHERE 1");
		if ($up == true) {
			echo "<meta http-equiv='Refresh' content='0; URL=profile.php'>";
		}
	}
	
		if (isset($_POST['name_user'])){
		$name_user= stripslashes($name_user);
		$name_user = htmlspecialchars($name_user);
		$name_user = trim($name_user);

		$up = mysql_query("UPDATE users SET name_user='$name_user' WHERE 1");
		if ($up == true) {
			echo "<meta http-equiv='Refresh' content='0; URL=profile.php'>";
		}
	}
		 if (isset($_POST['country'])){
			$country = stripslashes($country);
			$country = htmlspecialchars($country);
			$country = trim($country);

			$up = mysql_query("UPDATE users SET country='$country' WHERE 1");
			if ($up == true) {
				echo "<meta http-equiv='Refresh' content='0; URL=profile.php'>";
	}
}
		 if (isset($_POST['city'])){
			$city = stripslashes($city);
			$city = htmlspecialchars($city);
			$city = trim($city);

			$up = mysql_query("UPDATE users SET city='$city' WHERE 1");
			if ($up == true) {
				$_SESSION['city'] = $city;
				echo "<meta http-equiv='Refresh' content='0; URL=profile.php'>";
	}
}
				 if (isset($_POST['email'])){
					$mail = stripslashes($mail);
					$mail = htmlspecialchars($mail);
					$mail = trim($mail);

					if (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
							echo '<br><font style="text-align: center; display: block;" color="red"><img border="0" src="img/error.gif" alt="E-mail имеет недопустимий формат!"><br>E-mail имеет недопустимий формат! Например, name@gmail.com! </font>';
					}

					$up = mysql_query("UPDATE users SET email='$mail' WHERE 1");
					if ($up == true) {
						$_SESSION['email'] = $mail;
						echo "<meta http-equiv='Refresh' content='0; URL=profile.php'>";
	}
}
		
?>
				<div class="wrap_for_edit">
					<div class="regis">Изменение персональных данных</div>
						<form action="editprofile.php" method="POST" class="cd-form" enctype='multipart/form-data'>

							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Почта</label>
								<input class="full-width has-padding has-border" id="signin-email" type="text" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Новый e-mail: name@gmail.ru" required>
							</p>
							
							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Логин</label>
								<input class="full-width has-padding has-border" id="signin-email" type="text" name="user_name" value="<?php echo $_POST['user_name']; ?>" placeholder="Новый логин" required>
								<span class="cd-error-message">Здесь сообщение об ошибке!</span>
							</p>
							
							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Имя пользователя</label>
								<input class="full-width has-padding has-border" id="signin-email" type="text" name="name_user" value="<?php echo $_POST['name_user']; ?>" placeholder="Новое имя пользователя" required>
								<span class="cd-error-message">Здесь сообщение об ошибке!</span>
							</p>
							
							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Страна</label>
								<input class="full-width has-padding has-border" id="signin-email" type="text" name="country" value="<?php echo $_POST['country']; ?>" placeholder="Страна" required>
								<span class="cd-error-message">Здесь сообщение об ошибке!</span>
							</p>
							
							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Город</label>
								<input class="full-width has-padding has-border" id="signin-email" type="text" name="city" value="<?php echo $_POST['city']; ?>" placeholder="Город" required>
								<span class="cd-error-message">Здесь сообщение об ошибке!</span>
							</p>

							<p class="fieldset">
								<input class="width" type="submit" value="Изменить данные" name="do_login">
							</p>
						</form>
						</div>
	</body>
</html>