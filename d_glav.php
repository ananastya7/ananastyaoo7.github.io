<?php
include ("count.php");
	require_once "connect.php";

	
	
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<title>Добавление статей на главную | Здоровое питание</title>
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
	$name = $_POST['name'];
	$text = $_POST['text'];
	$text2 = $_POST['text2'];
		
		
		
		if (isset($_POST['name'])&& (isset($_POST['text']) && (isset($_POST['text2'])))){
		$name= stripslashes($name);
		$name = htmlspecialchars($name);
		$name = trim($name);
		$text= stripslashes($text);
		$text = htmlspecialchars($text);
		$text = trim($text);
		$text2= stripslashes($text2);
		$text2 = htmlspecialchars($text2);
		$text2 = trim($text2);

		$up = mysql_query("INSERT INTO glavnaya (name,text,text2) values ('$name', '$text','$text2')");
		if ($up == true) {
			echo "<meta http-equiv='Refresh' content='0; URL=d_glav.php'>";
		}
	}	
?> 
<div class="wrap_for_edit">
					<div class="regis">Добавление статей на главную</div>
						<form action="d_glav.php" method="POST" class="cd-form" enctype='multipart/form-data'>

							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Название статьи</label>
								<input class="full-width has-padding has-border" id="signin-email" type="text" name="name" value="<?php echo $_POST['name']; ?>" placeholder="Название статьи" required>
							</p>
							
							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Краткая статья</label>
								<textarea class="full-width has-padding has-border" id="signin-email" type="text" name="text" value="<?php echo $_POST['text']; ?>" placeholder="Краткая статья" required></textarea>
								<span class="cd-error-message">Здесь сообщение об ошибке!</span>
							</p>
							
							<p class="fieldset">
								<label class="image-replace cd-email" for="signin-email">Полная статья</label>
								<textarea class="full-width has-padding has-border" id="signin-email" type="text" name="text2" value="<?php echo $_POST['text2']; ?>" placeholder="Полная статья" required></textarea>
								<span class="cd-error-message">Здесь сообщение об ошибке!</span>
							</p>

							<p class="fieldset">
								<input class="width" type="submit" value="Добавить данные" name="d_glav">
							</p>
						</form>
						</div>
<?php 
include ("footer.php");
?>  
</body>
</html>