<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript">
$(function() {
	$("#send").click(function(){
		var author = $("#author").val();
		var message = $("#message").val();				
		$.ajax({
			type: "POST",
			url: "sendMessage.php",
			data: {"author": author, "message": message},
			cache: false,						
			success: function(response){
				var messageResp = new Array('Ваше сообщение отправлено','Сообщение не отправлено Ошибка базы данных','Нельзя отправлять пустые сообщения');
				var resultStat = messageResp[Number(response)];
				if(response == 0){
					$("#author").val("");
					$("#message").val("");
					$("#commentBlock").append("<div id='blok'><img width='100' height='100' src='images/1.jpg'></div><div id='blok'><h2>"+author+"</h2><p>"+message+"</p></div><div class='clear'><br> </div>");
				}
				$("#resp").text(resultStat).show().delay(1500).fadeOut(800);
				
			}
		});
		return false;
				
	});
});
</script>

<div class="header-nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Меню</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Главная</a></li>
							<li><a href="novosty.php">Новости</a></li>
							<li><a href="analiz.php">Анализаторы</a></li>
							<li><a href="staty.php">Статьи</a></li>
							<li><a href="stories.php">Истории похудения</a></li>
							<li><a href="#">Витамины и добавки</a></li>
							<li><a href="diety.php">Диеты</a></li>
							<li class="active"><a href="otzyvy.php">Отзывы</a></li>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
	</div>
