<?php 
include ("count.php");
?>
<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Анализаторы | Здоровое питание</title>
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
include ("menu2.php");
?>
<div class="clear"><br> </div>
<div id="blok1">
<!--
	
							<?php $result = mysql_query("SELECT * FROM analizatory", $db);
							$comment = mysql_fetch_array($result);
							do {
				echo " <div id='blok1'><img src='/images/4.jpg' alt='Анализатор' title='Анализатор каллорийности продуктов'><a href='kkalprod.php<h2>".$comment['']."</h2></a>";
				echo "<p>".mb_substr(strip_tags($comment['text']),0,400,'cp1251')."...</p></div>";
				echo "<div class='more'><a href='kkalprod.php".$comment['id']."'>Подробнее</a></div>";
									 }
							while ($comment = mysql_fetch_array($result));?>-->
								<?PHP
$sql=mysql_query("SELECT* FROM analizatory ORDER BY  `text` DESC, name DESC, `img` DESC, `id` DESC ");
                while($result = mysql_fetch_array($sql))
                {
                        $id=$result['id'];
						$news_result=$result['text'];
						$title_result=$result['name'];
						$img=$result['img'];
                
                        
printf( '<div id="blok1">'.$img."<a href='kkalprod.php?id=$id'><h2>".$title_result."</h2></a><p>".$news_result."</p>"."</div>");
 
 
                }?>
</div>	
<?php 
include ("footer.php");
?>
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
	