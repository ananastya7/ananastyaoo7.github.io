<?php include("connect.php");
header("Content-type: text/html; charset=windows-1251");

//**********************************************
if(empty($_POST['js'])){
	if($_POST['sms'] != '' && $_POST['author'] != ''){

		$author = @iconv("UTF-8", "windows-1251", $_POST['author']);
		$author = addslashes($author);
		$author = htmlspecialchars($author);
		$author = stripslashes($author);
		$author = mysql_real_escape_string($author);
		
		$sms = @iconv("UTF-8", "windows-1251", $_POST['sms']);
		$sms = addslashes($sms);
		$sms = htmlspecialchars($sms);
		$sms = stripslashes($sms);
		$sms = mysql_real_escape_string($sms);

		$date = date("d-m-Y в H:i:s");
		$result = mysql_query("INSERT INTO novosty (author, sms, date) VALUES ('$author', '$sms', '$date')");
		if($result == true){
			echo 0; //Ваше сообшение успешно отправлено
		}else{
			echo 1; //Сообщение не отправлено. Ошибка базы данных
		}
	}else{
		echo 2; //Нельзя отправлять пустые сообщения
	}
}

//**************************************** Если отключен JavaScript ************************************

if($_POST['js'] == 'no'){
	if($_POST['sms'] != '' && $_POST['author'] != ''){

		$author = $_POST['author'];
		$author = addslashes($author);
		$author = htmlspecialchars($author);
		$author = stripslashes($author);
		$author = mysql_real_escape_string($author);
		
		$sms = $_POST['sms'];
		$sms = addslashes($sms);
		$sms = htmlspecialchars($sms);
		$sms = stripslashes($sms);
		$sms = mysql_real_escape_string($sms);

		$date = date("d-m-Y в H:i:s");
		$result = mysql_query("INSERT INTO novosty (author, sms, date) VALUES ('$author', '$sms', '$date')");
		if($result == true){
			echo "Ваше сообшение успешно отправлено"; //Ваше сообшение успешно отправлено
		}else{
			echo "Сообщение не отправлено. Ошибка базы данных"; //Сообщение не отправлено. Ошибка базы данных
		}
	}else{
		echo "Нельзя отправлять пустые сообщения"; //Нельзя отправлять пустые сообщения
	}
}
?>      	
