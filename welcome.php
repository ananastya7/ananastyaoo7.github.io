<!-- welcome-bottom -->
	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-grids">
				<div class="welcome-bottom-grid-l">
							
<?PHP
$sql=mysql_query("SELECT* FROM history ORDER BY  `text` DESC, name DESC, `id` DESC ");
                while($result = mysql_fetch_array($sql))
                {
                $id=$result['id'];
                $news_result=$result['text'];
                $title_result=$result['name'];
printf( '<div class="welcome-bottom-grid-left"><h2>'.$title_result.'</h2><p>'.$news_result.'</p><div class="more"><a href="stories2.php?id='.$id.'">���������</a></div><br><br><br><div style="background-color:gray; width:1050px;height:10px;"></div></div>');
 
 
                }?>
				
				<!--<div class="more">
			<a href="#">���������</a>
			</div>	
				</div>
				<div class="welcome-bottom-grid-left">
					<h2>��� ������� ��������� �� 60 ��</h2>
<p>�������� ��� � 2010 ����, � ���� ������� ��� ��� ��� 127 ��. ��� � ��� �������, �� ����� ����� �������, ������������ �� �����, �� ��� ��� �������� �� ������ ��������. � ���� � ��� ������ ������������ �������, � ����-�� ����������� ��������, � � ����-�� � ������������. 
����� ����, � ���� ��� ���� � ����� � ��-�� ����� � ����������� ��� �����, ���� ������� ����� �����������-�� � �� ����. ��� �����...</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<br>
	
	<div class="welcome-bottom1">
		<div class="container">
			<div class="welcome-bottom-grids1">
				<div class="welcome-bottom-grid-l1">
				<div class="more">
			<a href="#">���������</a>
			</div>	
				</div>
				<div class="welcome-bottom-grid-left1">
					<h2>��� ������� ��������� �� 60 ��</h2>
<p>�������� ��� � 2010 ����, � ���� ������� ��� ��� ��� 127 ��. ��� � ��� �������, �� ����� ����� �������, ������������ �� �����, �� ��� ��� �������� �� ������ ��������. � ���� � ��� ������ ������������ �������, � ����-�� ����������� ��������, � � ����-�� � ������������. 
����� ����, � ���� ��� ���� � ����� � ��-�� ����� � ����������� ��� �����, ���� ������� ����� �����������-�� � �� ����. ��� �����...</p>-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //welcome-bottom --> 