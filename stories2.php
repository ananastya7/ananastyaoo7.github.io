<?php 
include ("count.php");
?>
<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
<title>������� ��������� | �������� �������</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
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
include ("menu3.php");
?>
<br>
<?PHP

include('connect.php');
if ($_GET['id']) {  
 $id = (int)$_GET['id'];
        $result = mysql_query("SELECT * FROM history  WHERE `id` = '$id' LIMIT 1");
        $row = mysql_fetch_assoc($result);
                //$news=$row['text2'];
				$news_result=$row['text2'];
                $title_result=$row['name'];
              //  echo $news;
				printf( '<div>'."<div class='four'>"."<h2>".$title_result."</h2>"."</div>".$news_result."</div>",$result['name']);
 
}
?>

						<!--		<div id="bigArticl">
	<img src="/images/01.jpg" alt="Основы" title="Основы правильного питания">
	<div class="clear"><br> </div>
	<p>Совершенно не важно, хотите ли вы похудеть или просто нормализовать свой рацион, режим питания должен строиться на основе определенных правил. 
	Перед тем, как вы решите кардинально изменить свое питание, примите во внимание следующие принципы:</p>
	<p> <ul type="square">
   <li><strong>не мучайте</strong> себя изнурительными <strong>диетами</strong> и не приучайте организм к перманентному <strong>чувству голода</strong>. 
	При недостатке пищи и питательных веществ, организм не оздоравливается, а воспринимает данную ситуацию как сложный период, 
	запасаясь питательными веществами. Таким образом, похудение не наступает, вы можете наоборот набрать вес, так как энергия 
	будет «резервироваться», а не расходоваться;</li>
    <li><strong>соблюдайте режим питания</strong>: ешьте несколько раз в день в одно и то же время, 
	не пропуская приемы пищи. Однако следите и за объемом порций он должен быть не большим, чтобы не возникло переедания;</li> 
	<li><strong>рацион</strong> должен быть <strong>сбалансированным и разнообразным</strong> – в вашем меню в обязательном порядке должны присутствовать сырые фрукты, 
	богатые микроэлементами и витаминами. Такие продукты не просто насыщают организм питательными веществами, но и способствуют нормализации 
	обменных процессов. Количественно овощи и фрукты должны преобладать в вашем рационе над мясными продуктами;</li>
    <li><strong>соблюдайте питьевой режим</strong> – при отсутствии противопоказаний (заболевания почек и т.д.) выпивать следует не менее двух литров жидкости в сутки, 
	причем желательно чтобы это была негазированная минеральная вода или другие несладкие напитки;</li>
    <li>старайтесь отдавать <strong>предпочтение легкой пище</strong>, но даже если вам очень захочется чего-то калорийного, не отказывайте себе в этом. 
	Помните, что калорийные блюда рекомендуется употреблять в первой половине дня, а вот после обеда стоит ограничиться минимальным количеством 
	жиров и углеводов;</li>
    <li>отдавайте <strong>предпочтение блюдам вареным</strong> или приготовленным на пару, нежели жареной пище. В готовке используйте растительное масло; </li>
	<li>никогда <strong>не пропускайте завтрак</strong> – даже если вы встаете рано и не имеете никакого аппетита, ограничьтесь чем-то легким, ведь завтрак помогает организму 
	восстановиться после сна и нормализовать обменные процессы;</li>
    <li><strong>правильно сочетайте продукты</strong> – при употреблении в пищу несочетаемых блюд в кишечнике 
	происходят процессы гниения и брожения, что всегда негативным образом сказывается на вашем самочувствии. 
	Постарайтесь сделать собственный рацион как можно проще. В нем должны преобладать натуральные, 
	несмешанные продукты, и пусть их будет не более пяти за прием пищи;</li>
    <li><strong>следите</strong> не только за количеством порций, но и <strong>качеством потребляемых продуктов</strong>. 
	О правильном питании может идти речь лишь тогда, когда вы употребляете только свежие продукты. 
	Старайтесь не хранить долго приготовленные блюда, ведь даже в холодильнике в них неизбежно происходят процессы брожения, которые неблагоприятно 
	сказываются на полезных свойствах пищи;</li>
<li>	и наконец, последнее правило здорового питания – <strong>от пищи необходимо получать удовольствие</strong>. 
	Это значит, что есть нужно то, что нравится, не торопясь, тщательно все пережевывая. 
	Желательно воздержаться во время еды от разговоров и чтения.</li></p>
	<p> Подытожив все вышесказанное, можно сделать простой вывод, что <strong>правильноe питание</strong> – это всегда <strong>свежая и разнообразная пища</strong>, 
	употребляемая <strong>регулярно в умеренных количествах</strong> и обязательно в удовольствие.</p>
	<div class="clear"><br> </div>
	<img src="/images/02.jpg" alt="Основы" title="Основы правильного питания">
	
	</div>-->
	<br>
<?php 
include ("footer.php");
?>




<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>