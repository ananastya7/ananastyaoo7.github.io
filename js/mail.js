 $(document).ready(function() {
				  $("#contact").submit(function(){
					  $.ajax({
						  type: "POST",
						  url: "mail.php",
						  data: $(this).serialize()
					  }).done(function(){
						  alert("Сообщение отправлено! Ждите, мы с вами свяжемся.");
					  });
					  return false;
				});
});