<?php
    require "connect.php";
		if (isset($_POST['do_login'])){
			$user_name = $_POST['user_name'];
			$password = $_POST['password']; 
		
		$user = mysql_query("SELECT id FROM users WHERE user_name='$user_name' AND password='$password'");
		$id_user = mysql_fetch_array($user);
		if (empty($id_user['id'])){
			exit ("Извините, введённый вами логин или пароль неверный. <a href='login.php'>Назад</a>");
		}
		else {
			$_SESSION['password'] = $password; 
			$_SESSION['user_name'] = $user_name; 
			$_SESSION['id'] = $id_user['id'];
		}
		echo "<meta http-equiv='Refresh' content='0; URL=profile.php'>";
		}
?>

<!DOCTYPE html>
<html>
<head>
<title>Вход | Здоровое питание</title>
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
    <div class="regis">Авторизация</div>
            <div id="cd-login">

				    <form action="login.php" method="POST" class="cd-form">

						<p class="fieldset">
						    <label class="image-replace cd-email" for="signin-email">Логин</label>
						    <input class="full-width has-padding has-border" id="signin-email" type="text" name="user_name" value="<?php echo $_POST['user_name']; ?>" placeholder="Логин" required>
						    <span class="cd-error-message">Здесь сообщение об ошибке!</span>
						</p>

						<p class="fieldset">
						    <label class="image-replace cd-password" for="signin-password">Пароль</label>
						    <input class="full-width has-padding has-border" id="signin-password" type="password" name="password" placeholder="Пароль" required>
						    
						</p>

						<p class="fieldset">
						    <input type="checkbox" id="remember-me" checked>
						    <label for="remember-me">Запомнить меня</label>
						</p>

						<p class="fieldset">
						    <input class="width" type="submit" value="Войти" name="do_login">
						</p>

				    </form>

				</div> 

<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>