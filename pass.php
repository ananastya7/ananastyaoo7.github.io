<?php
	require_once "connect.php";
	if (isset($_POST['do_pass'])){
		    $oldpass = $_POST['old_pass'];
			$password = $_POST['password'];
		    $reppass = $_POST['pass2'];
	if ($oldpass == '') {
        exit("�� �� ����� ������� ������<br><a href='smena.php'>��������� �����</a>");
    }
	
	if ($password == '') {
        exit("�� �� ����� ����� ������<br><a href='smena.php'>��������� �����</a>");
    }	
	
	if ($reppass == '') {
        exit("�� �� ����������� ����� ������<br><a href='smena.php'>��������� �����</a>");
    }
    

			$up = mysql_query("UPDATE users SET password='$password' WHERE 1");
			if ($up == true) {
				echo "<meta http-equiv='Refresh' content='0; URL=smena.php'>";
	}
	 
}
?>
<html>
<head>
<title>����� ������ | �������� �������</title>
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
	<div class="regis">����� ������</div>
	<div id="cd-login">
		<form action="pass.php" method="POST" class="cd-form">
		
			<p class="fieldset">
				<label class="image-replace cd-password" for="signin-password">������</label>
				<input class="full-width has-padding has-border" id="signin-password" type="password" name="old_pass" placeholder="������� ������">
				<span class="cd-error-message">����� ��������� �� ������!</span>
			</p>
			
			<p class="fieldset">
				<label class="image-replace cd-password" for="signin-password">������</label>
				<input class="full-width has-padding has-border" id="signin-password" type="password" name="password" placeholder="����� ������">
				<span class="cd-error-message">����� ��������� �� ������!</span>
			</p>
			
			<p class="fieldset">
				<label class="image-replace cd-password" for="signin-password">������</label>
				<input class="full-width has-padding has-border" id="signin-password" type="password" name="pass2" placeholder="����������� ������">
				<span class="cd-error-message">����� ��������� �� ������!</span>
			</p>
			
			
			
			<p class="fieldset">
				<input class="width" type="submit" value="�������� ������" name="do_pass">
			</p>
			</div>
		</form>
	</body>
</html>