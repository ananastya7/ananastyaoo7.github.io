
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
								echo "<div class='more'><a href='osnovy_pit2.php".$comment['id']."'>���������</a></div>";
									 }
							while ($comment = mysql_fetch_array($result));?>-->
								<?PHP
$sql=mysql_query("SELECT* FROM glavnaya ORDER BY  `text` DESC, name DESC, `id` DESC ");
                while($result = mysql_fetch_array($sql))
                {
                        $id=$result['id'];
                $news_result=$result['text'];
                        $title_result=$result['name'];
printf( '<li>.<div class="banner-info">'."<h1>".$title_result."</h1>"."<p>".$news_result."</p>"."<div class='more'>"."<a href='osnovy_pit2.php?id=$id'>"."���������"."</a>"."</div>"."</div>"."</li>");
 
 
                }?>
							<!--<li>	<div class="banner-info">
									<h1>������ ����������� �������</h1>
									<p>���������� �� �����, ������ �� �� �������� ��� ������ ������������� ���� ������, ����� ������� ������ ��������� �� ������ ������������ ������. 
									����� ���, ��� �� ������ ����������� �������� ���� �������, ������� �� �������� ��������� ��������..</p>
									<div class="more">
										<a href="osnovy_pit.php">���������</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h1>������������ �������</h1>
									<p>������ � ���������� �������, ������ �������� ���������� ������� ��� ������������. ����� ����� ��������� ����� ������� � �� �������� ���. 
									�� ������ ����������� ���������� ����������� ��������� �������������� �������..</p>
									<div class="more">
										<a href="reg_pit.php">���������</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h1>������� �������� ��� ��</h1>
									<p>�������, ��������� ���������� �� ������������ �������, �� ����� ������� ���� ���� �� ��������, ������ ���������� �� ��� �� ����������. 
									�� ����������� ������ � �������� ������������...</p>
									<div class="more">
										<a href="vred.php">���������</a>
									</div>
								</div>
							</li>-->
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>