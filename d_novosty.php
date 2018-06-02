<?php
include ("count.php");
	require_once "connect.php";

	
	
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<title>Добавление новостей | Здоровое питание</title>
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
include ("header1.php");
?>
<?php 
include ("menu_p3.php");
?>  
   <?php
	$title = $_POST['title'];
	$sms = $_POST['sms'];
	$autor = $_POST['autor'];
		
		
		
		if (isset($_POST['title'])&& (isset($_POST['sms']) && (isset($_POST['autor'])))){
		$title= stripslashes($title);
		$title = htmlspecialchars($title);
		$title = trim($title);
		$sms= stripslashes($sms);
		$sms = htmlspecialchars($sms);
		$sms = trim($sms);
		$autor= stripslashes($autor);
		$autor = htmlspecialchars($autor);
		$autor = trim($autor);

		$up = mysql_query("INSERT INTO novosty (title,sms,autor) values ('$title', '$sms','$autor')");
		if ($up == true) {
			echo "<meta http-equiv='Refresh' content='0; URL=d_novosty.php'>";
		}
	}	
?> 
<div class="wrap_for_edit">
					<div class="regis">Добавление новостей</div>
						<form action="d_novosty.php" method="POST" class="cd-form" enctype='multipart/form-data'>

							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Название</label>
								<input class="full-width has-padding has-border" id="signin-email" type="text" name="title" value="<?php echo $_POST['title']; ?>" placeholder="Название" required>
							</p>
							
							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Текст новости</label>
								<textarea class="full-width has-padding has-border" id="signin-email" type="text" name="sms" value="<?php echo $_POST['sms']; ?>" placeholder="Текст новости" required></textarea>
								<span class="cd-error-message">Здесь сообщение об ошибке!</span>
							</p>
							
							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Автор</label>
								<input class="full-width has-padding has-border" id="signin-email" type="text" name="autor" value="<?php echo $_POST['autor']; ?>" placeholder="Автор" required>
								<span class="cd-error-message">Здесь сообщение об ошибке!</span>
							</p>

							<p class="fieldset">
								<input class="width" type="submit" value="Добавить новость" name="d_novosty">
							</p>
						</form>
						</div>
<?php 
include ("footer.php");
?>  
</body>
</html>