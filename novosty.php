<?php include("connect.php"); ?>
<?php include("count.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Новости | Здоровое питание</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>

<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/js.js"></script>
<!-- //js -->

<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="icon" href="images/logo.ico">
</head>
<body>
<!-- #header-->
<?php 
include ("header.php");
?>
<?php 
include ("menu5.php");
?>
<br>

<div id="commentBlock">
<?php
$result = mysql_query("SELECT * FROM novosty",$db);
$comment = mysql_fetch_array($result);
do{?>
	<div id='blok'><img width="100" height="110" src="images/news.jpg" alt=""></div>
<?php echo "<div id='blok'><p align='right'>".$comment['autor']."</p><h2>".$comment['title']."</h2><p>".$comment['sms']."</p></div><div class='clear'><br> </div>";
}while($comment = mysql_fetch_array($result));
?>
</div>

<br>
<br>


<?php 
include ("footer.php");
?>




<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->

</body>
</html>
