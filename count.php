<?php include 'connect.php';

// Указываем кодировку, в которой будет получена информация из базы 
@mysqli_query ($db, 'set character_set_results = "cp1251"');

// Получаем IP-адрес посетителя и сохраняем текущую дату	
$visitor_ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d");

// Узнаем, были ли посещения за сегодня   
$res = mysql_query( "SELECT `visit_id` FROM `visits` WHERE `date`='$date'",$db) or die ("Проблема при подключении к БД");

// Если сегодня еще не было посещений
if (mysql_num_rows($res) == 0)
{
    // Очищаем таблицу ips
    mysql_query("DELETE FROM `ips`",$db);
    
    // Заносим в базу IP-адрес текущего посетителя
    mysql_query("INSERT INTO `ips` SET `ip_adress`='$visitor_ip'", $db);
    
    // Заносим в базу дату посещения и устанавливаем кол-во просмотров и уник. посещений в значение 1
    $res_count = mysql_query("INSERT INTO `visits` SET `date`='$date', `host`=1,`views`=1",$db);
}

// Если посещения сегодня уже были
else
{   
    // Проверяем, есть ли уже в базе IP-адрес, с которого происходит обращение
    $current_ip = mysql_query( "SELECT `ip_id` FROM `ips` WHERE `ip_adress`='$visitor_ip'",$db);
    
    // Если такой IP-адрес уже сегодня был (т.е. это не уникальный посетитель) 
    if (mysql_num_rows($current_ip) == 1)
    {
        // Добавляем для текущей даты +1 просмотр (хит)
        mysql_query("UPDATE `visits` SET `views`=`views`+1 WHERE `date`='$date'",$db);
    }
    
    // Если сегодня такого IP-адреса еще не было (т.е. это уникальный посетитель)
    else
    {   
        // Заносим в базу IP-адрес этого посетителя
        mysql_query( "INSERT INTO `ips` SET `ip_adress`='$visitor_ip'",$db);
        
        // Добавляем в базу +1 уникального посетителя (хост) и +1 просмотр (хит)
        mysql_query( "UPDATE `visits` SET `host`=`host`+1,`views`=`views`+1 WHERE `date`='$date'",$db);
    }
}
?>