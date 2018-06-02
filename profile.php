<?php
include ("count.php");
	require_once "connect.php";

	$id_user = $_SESSION['id'];
	$connect = mysqli_connect("localhost","root","","pravpitBase");
	$cnt = mysqli_query($connect, "SELECT * FROM users WHERE id='$id_user'");
	$result = mysqli_fetch_assoc($cnt);
	
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<title>Профиль | Здоровое питание</title>
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
include ("menu_p.php");
?>        
<?php 
include ("editprofile.php");
?>  

<?php 
include ("footer.php");
?>  
    
    
               
              
                
                
            
        
    </body>
</html>