<?php
include ("count.php");
?>
<!doctype html>
<html lang="ru">
<head>
<title>�������������� | �������� �������</title>
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
    $host="localhost";    //����
    $user="root";        //������������
    $pass="";             //������������� ���� ������
    $db_name="pravpitBase";    //�������� ��
    $link=mysql_connect($host,$user,$pass); //�����������
    mysql_select_db($db_name,$link);        //�������� ��
    
    if (isset($_GET['del_id'])) { //���������, ���� �� ���������� �� ��������
        $sql = mysql_query('DELETE FROM `analizatory` WHERE `id` = '.$_GET['del_id']); //������� ������ �� �������
    }
    
    if (isset($_POST['sub'])=='OK') { //���������, �������� �� ���������� �� ��������������
        if (isset($_POST['name'])) { //���� ����� ��� �������, �� ��������� � ��� � ����
            $sql = mysql_query("UPDATE analizatory SET name = '".$_POST[name]."',text = '".$_POST[text]."',text2 = '".$_POST[text2]."' WHERE id = ".$_POST[id].";");
						
        }
    }
?>
<table border='1'>
<tr>
    
    <td>��������</td>
    <td>������� ��������</td>
	<td>������ ��������</td>
</tr>
<?php
$sql = mysql_query("SELECT `id`, `name`, `text`, `text2` FROM `analizatory`", $link);
while ($result = mysql_fetch_array($sql)) {
    echo     '<tr><td>'.$result['name'].'</td>'.
             '<td>'.$result['text'].'</td>'.
			 '<td>'.$result['text2'].'</td>'.
             '<td><a href="?del_id='.$result['id'].'">�������</a></td>'.
             '<td><a href="?red_id='.$result['id'].'">�������������</a></td></tr>';
}
?>
</table>

<?php
    if (isset($_GET['red_id'])) { //���� �������� ���������� �� ��������������
        //������� ������� �� ��
        $sql = mysql_query("SELECT `id`, `name`, `text`, `text2` FROM `analizatory` WHERE `id`=".$_GET['red_id'], $link); //������ � ��
        $result = mysql_fetch_array($sql); //��������� ����� ������
        
        //������������ �����. �������� ��������, ��� �������� ������ ������� if �� ������� ������ ����� �����.
        //�.�. ���� ���������� red_id �� ��������, �� ����� �� ����������
        //� �� �����, ��� ������� ����� �� ��������� ��� PHP , ��� ������ ������������, ���� ������ �� ���������
        ?>
<div class="feedback2">
<table>
<form action="" method="post">
<tr><td><input type="hidden" type='text' name='id' value="<?php echo ($result['id']); ?>"><td></tr>
    <tr>
        <td>��������:</td>
        <td><input type="text" name="name" value="<?php echo ($result['name']); ?>"></td>
    </tr>
    <tr>
        <td>��������:</td>
        <td><textarea type="text" name="text"  value=""><?php echo ($result['text']); ?></textarea></td>
    </tr>
	 <tr>
        <td>�����������:</td>
        <td><textarea type="text" name="text2"  value=""><?php echo ($result['text2']); ?></textarea></td>
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