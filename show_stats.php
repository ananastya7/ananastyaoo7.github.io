<?php

// ��������� ���������, � ������� ����� �������� ���������� �� ���� 
@mysqli_query ($db, 'set character_set_results = "cp1251"');

// ��������� ���������� �� ������� ���� (���������� date �������� ���� �� ����� count.php, �������, � ���� �������, ������������ � ������ ������� ������)
$res = mysql_query( "SELECT `views`, `host` FROM `visits` WHERE `date`='$date'",$db);
$row = mysql_fetch_assoc($res);

echo '<p>���������: ' . $row['host'] . '|';
echo '����������: ' . $row['views'] . '</p>';