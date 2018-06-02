
<?php include("connect.php");?>
	<div class="banner">
		<div class="container">
			<div class="banner-info-grid">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
	<!--
							<?php $result = mysql_query("SELECT * FROM glavnaya", $db);
							$comment = mysql_fetch_array($result);
							do {
								echo "<li> <div class='banner-info'> <h1>".$comment['name']."</h1>";
								echo "<p>".mb_substr(strip_tags($comment['text']),0,400,'cp1251')."...</p></div>";
								echo "<div class='more'><a href='osnovy_pit2.php".$comment['id']."'>ѕодробнее</a></div>";
									 }
							while ($comment = mysql_fetch_array($result));?>-->
								<?PHP
$sql=mysql_query("SELECT* FROM glavnaya ORDER BY  `text` DESC, name DESC, `id` DESC ");
                while($result = mysql_fetch_array($sql))
                {
                        $id=$result['id'];
                $news_result=$result['text'];
                        $title_result=$result['name'];
printf( '<li>.<div class="banner-info">'."<h1>".$title_result."</h1>"."<p>".$news_result."</p>"."<div class='more'>"."<a href='osnovy_pit2.php?id=$id'>"."ѕодробнее"."</a>"."</div>"."</div>"."</li>");
 
 
                }?>
							<!--<li>	<div class="banner-info">
									<h1>ќсновы правильного питани€</h1>
									<p>—овершенно не важно, хотите ли вы похудеть или просто нормализовать свой рацион, режим питани€ должен строитьс€ на основе определенных правил. 
									ѕеред тем, как вы решите кардинально изменить свое питание, примите во внимание следующие принципы..</p>
									<div class="more">
										<a href="osnovy_pit.php">ѕодробнее</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h1>–егул€рность питани€</h1>
									<p>√овор€ о правильном питании, особое внимание необходимо уделить его регул€рности. ќчень важно составить режим питани€ и не нарушать его. 
									ѕо мнению большинства диетологов оптимальным считаетс€ четырехразовое питание..</p>
									<div class="more">
										<a href="reg_pit.php">ѕодробнее</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h1>¬редные продукты дл€ ѕѕ</h1>
									<p> онечно, полностью отказатьс€ от употреблени€ вредной, но часто вкусной пищи вр€д ли возможно, однако ограничить ее все же необходимо. 
									ћы рекомендуем свести к минимуму употребление...</p>
									<div class="more">
										<a href="vred.php">ѕодробнее</a>
									</div>
								</div>
							</li>-->
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>