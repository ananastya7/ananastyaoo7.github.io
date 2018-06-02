<?php include 'count.php'?>
<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Диеты | Здоровое питание</title>
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
  <!-- #header-->
<?php 
include ("header.php");
?>
<?php 
include ("menu6.php");
?>
<br>
<div id="rachod"> 
<?PHP


if ($_GET['id']) {  
 $id = (int)$_GET['id'];
        $result = mysql_query("SELECT * FROM diety  WHERE `id` = '$id' LIMIT 1");
        $row = mysql_fetch_assoc($result);
                //$news=$row['text2'];
				$news_result=$row['text2'];
                $title_result=$row['name'];
              //  echo $news;
				printf( '<div>'."<div class='four'>"."<h1>".$title_result."</h1>"."</div>"."<div class='bigArticl'>".$news_result."</div>"."</div>",$result['name']);
 
}
?>

	<div class="clear"><br></div>
</div>
<?php 
include ("footer.php");
?>

<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>