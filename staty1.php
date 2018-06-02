<div class="article">
<?PHP
$sql=mysql_query("SELECT* FROM staty ORDER BY  `text` DESC, name DESC, `img` DESC, `id` DESC ");
                while($result = mysql_fetch_array($sql))
                {
                        $id=$result['id'];
						$news_result=$result['text'];
						$title_result=$result['name'];
						$img=$result['img'];
                
                        
printf( '<div class="article">'.$img."<a href='staty2.php?id=$id'><h2>".$title_result."</h2></a><p>".$news_result."</p>"."</div>");
 
 
                }?>


</div>