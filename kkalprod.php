<?php include 'count.php'?>
<!DOCTYPE html>
<html>
<head>
<title>Анализатор продуктов питания</title>
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
<br>

<?PHP

include('connect.php');
if ($_GET['id']) {  
 $id = (int)$_GET['id'];
        $result = mysql_query("SELECT * FROM analizatory  WHERE `id` = '$id' LIMIT 1");
        $row = mysql_fetch_assoc($result);
                //$news=$row['text2'];
				$news_result=$row['text2'];
                $title_result=$row['name'];
				

              //  echo $news;
				printf( '<div>'."<div class='four'>"."<h1>".$title_result."</h1>"."</div>"."<div class='rachod'>"."<p>".$news_result."</p>"
				."</div>"."</div>",$result['name']);
 
}
?>
<!--<div class="four"><h1>Анализатор калорийности продуктов</h1></div>-->
<div id="rachod"> 

<?
  
        $query ="SELECT * FROM product";
    $res = mysql_query($query);
	
	
   echo" <p><input type='hidden' type='text' class='form-control' list='character' name='name' placeholder='Продукт'>
   <datalist id='character'>";

    while($users = mysql_fetch_array($res)) {               
           echo "
    <option name='name'>
                         ".$users["name"]."
	</option>";  
	
    }
     echo "</datalist></p>";  
?>
	<!--<p> Набирайте продукт и вы увидите подсказки. Выбирайте нужный вам и вводите вес. 
	Результат посчитается автоматически. Строки добавляются кнопкой «Добавить новый продукт».</p>-->
	<table border="1" id="ap_table">
	<thead>
		<tr>
			<td class="ac_h" width="3%">№</td>
			<td class="ac_h" width="45%">Продукт</td>
			 
			<td class="ac_h" width="12%">Вес, гр</td>
			<td class="ac_h" width="10%">Бел, гр</td>
			<td class="ac_h" width="10%">Жир, гр</td>
			<td class="ac_h" width="10%">Угл, гр</td>
			<td class="ac_h" width="10%">Кал, ккал</td>
		</tr>
	</thead>
	
	<tfoot>
		<tr>
			<td class="ac_t">&nbsp;</td>
			<td class="ac_t" style="text-align: left;">Итого:</td>
			<td class="ac_t" id="ap_w">0.00</td>
			<td class="ac_t" id="ap_p">0.00</td>
			<td class="ac_t" id="ap_f">0.00</td>
			<td class="ac_t" id="ap_c">0.00</td>
			<td class="ac_t" id="ap_k">0.00</td>
		</tr>
		<tr>
			<td class="ac_t">&nbsp;</td>
			<td class="ac_t" style="text-align: left;">Итого на 100 грамм:</td>
			<td class="ac_t" id="ap_w100">100.00</td>
			<td class="ac_t" id="ap_p100">&nbsp;</td>
			<td class="ac_t" id="ap_f100">&nbsp;</td>
			<td class="ac_t" id="ap_c100">&nbsp;</td>
			<td class="ac_t" id="ap_k100">&nbsp;</td>
		</tr>
	</tfoot>
	<tbody>
	<tr style="" id="tr0"><td style="text-align:center">1</td><td style="text-align:left"><div id="ap_prod_0" class="ap_prod">
	<p><input list="character" style="width:28em" >
   <datalist id="character">
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
   </datalist></p></td></div>
   <td style="text-align:left">
   <input type="text" class="ap_inp" style="text-align:center" id="ap_w_0" value="">
   <div class="tooltip" style="width: 165px; opacity: 0.9;"></div></td>
   <td style="text-align:right" title="" id="ap_p_0"></td>
   <td style="text-align:right" title="" id="ap_f_0"></td>
   <td style="text-align:right" title="" id="ap_c_0"></td>
   <td style="text-align:right" title="" id="ap_k_0"></td>
   </tr>
   </tbody>
</table>
<br>
<p>
<input id="ap_addrow" type="button" value=" Добавить новый продукт ">
</p>
	</div>
	
	<br>
	
<?php 
include ("footer.php");
?>




<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>