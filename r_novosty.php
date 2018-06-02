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
<br>
<div class='redak'>
<?php
    $host="localhost";    //хост
    $user="root";        //пользователь
    $pass="";             //установленный вами пароль
    $db_name="pravpitBase";    //название бд
    $link=mysql_connect($host,$user,$pass); //коннектимся
    mysql_select_db($db_name,$link);        //выбираем БД
    
    if (isset($_GET['del_id'])) { //проверяем, есть ли переменная на удаление
        $sql = mysql_query('DELETE FROM `novosty` WHERE `id` = '.$_GET['del_id']); //удаляем строку из таблицы
    }
    
    if (isset($_POST['sub'])=='OK') { //Проверяем, передана ли переменная на редактирования
        if (isset($_POST['title'])) { //Если новое имя предано, то обновляем и имя и цену
            $sql = mysql_query("UPDATE novosty SET title = '".$_POST[title]."',sms = '".$_POST[sms]."',autor = '".$_POST[autor]."' WHERE id = ".$_POST[id].";");
						
        }
    }
?>
<table border='1'>
<tr>
    
    <td>Заголовок</td>
    <td>Текст</td>
	<td>Автор</td>
</tr>
<?php
$sql = mysql_query("SELECT `id`, `title`, `sms`, `autor` FROM `novosty`", $link);
while ($result = mysql_fetch_array($sql)) {
    echo     '<tr><td>'.$result['title'].'</td>'.
             '<td>'.$result['sms'].'</td>'.
			 '<td>'.$result['autor'].'</td>'.
             '<td><a href="?del_id='.$result['id'].'">Удалить</a></td>'.
             '<td><a href="?red_id='.$result['id'].'">Редактировать</a></td></tr>';
}
?>
</table>

<?php
    if (isset($_GET['red_id'])) { //Если передана переменная на редактирование
        //Достаем запсись из БД
        $sql = mysql_query("SELECT `id`, `title`, `sms`, `autor` FROM `novosty` WHERE `id`=".$_GET['red_id'], $link); //запрос к БД
        $result = mysql_fetch_array($sql); //получение самой записи
        
        //Отрисовываем форму. Обратите внимание, что фигурную скобку условия if мы закроем только после формы.
        //Т.е. если переменная red_id не передана, то форма не отрисуется
        //И не важно, что посреди цыкла мы закрываем тег PHP , его работа продолжается, пока скобка не закроется
        ?>
<div class="feedback2">
<table>
<form action="" method="post">
    <tr><td><input type="hidden" type='text' name='id' value="<?php echo ($result['id']); ?>"><td></tr>
	<tr>
        <td>Название:</td>
        <td><input type="text" name="title" value="<?php echo ($result['title']); ?>"></td>
    </tr>
    <tr>
        <td>Новость:</td>
        <td><textarea type="text" name="sms"  value=""><?php echo ($result['sms']); ?></textarea></td>
    </tr>
	 <tr>
        <td>Автор:</td>
        <td><input  type="text" name="autor"  value="<?php echo ($result['autor']); ?>"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name='sub' value="OK"></td>
    </tr>
</form>
</table>
</div>
        <?php
    }
?>
</div>
<br>
<?php 

include ("footer.php");
?> 
</body>
</html>