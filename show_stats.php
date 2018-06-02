<?php

// Указываем кодировку, в которой будет получена информация из базы 
@mysqli_query ($db, 'set character_set_results = "cp1251"');

// Извлекаем статистику по текущей дате (переменная date попадает сюда из файла count.php, который, в свою очередь, подключается в каждом обычных файлов)
$res = mysql_query( "SELECT `views`, `host` FROM `visits` WHERE `date`='$date'",$db);
$row = mysql_fetch_assoc($res);

echo '<p>Посещений: ' . $row['host'] . '|';
echo 'Просмотров: ' . $row['views'] . '</p>';