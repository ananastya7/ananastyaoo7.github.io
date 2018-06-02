
<?php include("connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Отзывы</title>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script src="js/js.js"></script>
</head>
<body>

<div id="commentBlock">
<?php
$result = mysql_query("SELECT * FROM messages",$db);
$comment = mysql_fetch_array($result);
do{?>
	<div id='blok'><img width="100" height="100" src="images/1.jpg" alt=""></div>
<?php echo "<div id='blok'><p align='right'>".$comment['date']."</p><h2>".$comment['author']."</h2><p>".$comment['message']."</p></div><div class='clear'><br> </div>";
}while($comment = mysql_fetch_array($result));
?>
</div>
<div class="feedback">
<form action="sendMessage.php" method="post" name="form">
	<span class="fb">Оставить отзыв</span>
	<p>
		<label>Автор:</label><br> 
		<input name="author" type="text" id="author">
	</p>
	<p>
		<label>Текст сообщения:</label><br>
		<textarea name="message" rows="5" cols="50" id="message"></textarea>
	</p>
	<input name="js" type="hidden" value="no" id="js">
	<p>
		<input name="button" type="submit" value="Отправить" id="send"> <span id="resp"></span>
	</p>
</form>
</div>

</body>
</html>
