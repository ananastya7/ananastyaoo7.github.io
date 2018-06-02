<?php 
include ("count.php");
?>
<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Статистика | Здоровое питание</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/main.js"></script>
<script src="js/mail.js"></script><script src="js/jquery.dropdown.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
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
include ("menu_p4.php");
?>  
<div class="clear"><br> </div>
<div class="clear"><br> </div>
<div class="statis">
    <div class="regis">Статистика посещений</div>

<p><a href="?interval=1">За сегодня</a></p>
<p><a href="?interval=7">За последнюю неделю</a></p>

<table style="border: 1px solid silver;">

<tr>
    <td style="border: 1px solid silver;">Дата</td>
    <td style="border: 1px solid silver;">Уникальных посетителей</td>
    <td style="border: 1px solid silver;">Просмотров</td>
</tr>
<?php
// Если в массиве GET есть элемент interval (т.е. был клик по одной из ссылок выше)
if ($_GET['interval'])
{
	$interval = $_GET['interval'];
    
    // Если в качестве параметра передано не число
    if (!is_numeric ($interval))
    {
        echo '<p><b>Недопустимый параметр!</b></p>';        
    }
    
    // Указываем кодировку, в которой будет получена информация из базы 
    @mysqli_query ($db, 'set character_set_results = "cp1251"');
    
    // Получаем из базы данные, отсортировав их по дате в обратном порядке в количестве interval штук
	$res = mysql_query( "SELECT * FROM `visits` ORDER BY `date` DESC LIMIT $interval",$db);    
    
    // Формируем вывод строк таблицы в цикле
	while ($row = mysql_fetch_assoc($res))
    {
		echo '<tr>
			     <td style="border: 1px solid silver;">' . $row['date'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['host'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['views'] . '</td>
			 </tr>';
	}
}
?>
</table>
</div>
<div class="clear"><br> </div>
<div class="clear"><br> </div>
<div class="clear"><br> </div>
<div class="clear"><br> </div>
<div class="clear"><br> </div>
<div class="clear"><br> </div>
<div class="clear"><br> </div>

<?php 
include ("footer.php");
?> 

<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>