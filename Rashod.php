<?php include 'count.php'?>
<!DOCTYPE html>
<html>
<head>
<title>Анализатор расхода калорий</title>
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
<div class="four"><h1>Анализатор расхода калорий</h1></div>
	<div id="rachod">
	<p> Анализатор поможет рассчитать примерный расход калорий при занятиях различными видами деятельности.</p>

<p>Введите ваш вес, выберете деятельность, время занятий и результат посчитается автоматически. Строки добавляются кнопкой «Добавить новый ряд».</p>
  <p style="font-weight:bold;color:red">
  ОБЯЗАТЕЛЬНО укажите Ваш вес в килограммах:
  <input class="ac_inp" id="ac_weight"
  kl_virtual_keyboard_secure_input="on" type="text" value>
  </p>
  <br>
  <table border="1" id="table"
  <thead>
  <tr>
  <td class="ac_h" width="5%">№</td>
  <td class="ac_h" width="65%">Вид деятельности</td>
   <td class="ac_h" width="15%">
   Время
   <br>
   в минутах
   </td>
   <td class="ac_h" width="15%">
   Расход
   <br>
   ккал
   </td>
   </thead>
   <tfoot>
   <tr>
<td class="ac_t">&nbsp;</td>
<td class="ac_t" style="text-align:left;">Итого:</td>
<td class="ac_t" id="ac_time">&nbsp;</td>
<td class="ac_t" id="ac_result">&nbsp;</td>
</tr>
	</tfoot>
<tbody>
<tr style id="tr0">
<td>1</td>
<td>
<select id="ac_parent_0" style="width=24%" >
<option value="0"> </option>
<option value="1">Домашние хлопоты </option>
<option value="2"> Танцы</option>
</select>
<select id="ac_child_0" style="width=75%" >
<option class="sub1" value="188">Генеральная уборка</option>
<option class="sub1" value="750">Балет</option>
</select>
</td>
<td style="text-align:center">
<input type="text" class="ac_inp" id="ac_time_0">
</td>
<td style="text-align:right" id="ac_result_0"></td>
</tr>
</tbody>
</table>
<br>
<p> 
<input id="ac_addrow" type="button" value="Добавить новый ряд">
</p>

	
</div>	
	

<?php 
include ("footer.php");
?>




<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>