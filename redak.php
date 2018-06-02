<?php
include ("count.php");
?>
<!doctype html>
<html lang="ru">
<head>
<title>Редактирование | Здоровое питание</title>
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
include ("menu_p5.php");
?>  

<div class="row">
<span class="header">Что редактируем??</span>
<nav class="vertical-nav center-nav">
  <ul>
    <li><a href="r_glav.php">Главная</a></li>
	<li><a href="r_novosty.php">Новости</a></li>
    <li><a href="r_analiz.php">Анализаторы</a></li>
	<li><a href="r_staty.php">Статьи</a></li>
    <li><a href="r_history.php">Истории похудения</a></li>
	<li><a href="#">Витамины и добавки</a></li>
	<li><a href="r_diety.php">Диеты</a></li>
  </ul>
</nav>
</div>	
<br>	
<?php 

include ("footer.php");
?> 
</body>
</html>