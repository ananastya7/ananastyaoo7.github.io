<?php
    require "connect.php";        
                    if (isset($_POST['do_signup'])){
						
                        if (empty($_POST['user_name'])){	 
                       		echo '<br><font style="text-align: center; display: block;" color="red"><img border="0" src="images/error.gif" alt="������� �����"><br> ������� �����!</font>';
                        }
						elseif (!preg_match("/^\w{3,}$/", $_POST['user_name'])) {
							echo '<br><font style="text-align: center; display: block;" color="red"><img border="0" src="images/error.gif" alt="� ���� "�����" ������� ������������ �������!"><br>� ���� "�����" ������� ������������ �������! ������ �����, ����� � �������������!</font>';
						}
                        
                  		elseif(empty($_POST['password'])) {
							echo '<br><font style="text-align: center; display: block;" color="red"><img border="0" src="images/error.gif" alt="������� ������ !"><br>������� ������!</font>';
						}
						elseif (!preg_match("/\A(\w){4,20}\Z/", $_POST['password'])) {
							echo '<br><font style="text-align: center; display: block;" color="red"><img border="0" src="images/error.gif" alt="������ ������� ��������!"><br>������ ������� ��������! ������ ������ ���� �� ����� 6 ��������! </font>';
						}
						elseif(empty($_POST['reppass'])) {
							echo '<br><font style="text-align: center; display: block;" color="red"><img border="0" src="images/error.gif" alt="������� ������������� ������!"><br>������� ������������� ������!</font>';
						}
						elseif($_POST['password'] != $_POST['reppass']) {
							echo '<br><font style="text-align: center; display: block;" color="red"><img border="0" src="images/error.gif" alt="��������� ������ �� ���������!"><br>��������� ������ �� ���������!</font>';
						}
						elseif(empty($_POST['email'])) {
							echo '<br><font style="text-align: center; display: block;" color="red"><img border="0" src="images/error.gif" alt="������� E-mail!"><br>������� E-mail! </font>';
						}
						elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
							echo '<br><font style="text-align: center; display: block;" color="red"><img border="0" src="images/error.gif" alt="E-mail ����� ������������ ������!"><br>E-mail ����� ������������ ������! ��������, name@gmail.com! </font>';
						}

						else{
							$user_name = $_POST['user_name'];
							$password = $_POST['password'];
							$mdPassword = md5($password);
							$password2 = $_POST['reppass'];
							$email = $_POST['email'];
							$rdate = date("d-m-Y � H:i");
						
						$query = ("SELECT id FROM users WHERE user_name='$user_name'");
						$sql = mysql_query($query) or die(mysql_error());
						if (mysql_num_rows($sql) > 0) {
							echo '<font style="text-align: center; display: block;" color="red"><img border="0" src="images/error.gif" alt="������������ � ����� ������� �����������������!"><br>������������ � ����� ������� ���������������!</font>';
						}
						else {
							$query2 = ("SELECT id FROM users WHERE email='$email'");
							$sql = mysql_query($query2) or die(mysql_error());
						if (mysql_num_rows($sql) > 0){
							echo '<font style="text-align: center; display: block;" color="red"><img border="0" src="images/error.gif"  alt="������������ � ����� e-mail ���������������!"><br>������������ � ����� e-mail ��� ���������������!</font>';
						}
						else{
							$query = "INSERT INTO users (user_name, password, email)
							VALUES ('$user_name', '$mdPassword', '$email')";
							$result = mysql_query($query) or die(mysql_error());;
							echo '<font style="text-align: center; display: block;" color="green"><img border="0" src="images/ok.gif"  alt="�� ������� ������������������!"><br>�� ������� ������������������!</font><br><a style=" text-align: center; display: block; text-transform: uppercase;" href="index.php">�� �������</a>';
						}
						}
						}
				}
?>

<!DOCTYPE html>
<html>
<head>
<title>����������� | �������� �������</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->

<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="icon" href="images/logo.ico">
</head>
<body>
  

<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>