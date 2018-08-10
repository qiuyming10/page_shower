<!DOCTYPE <html>
		<style type="text/css">
			    .article {
				margin-top:20% ;
				border-radius: 20%;
				width: 70%;
				background-color:gainsboro;
				}
				.article-head {
				margin-top:10% ;
				}
				.article-head-line {
				height:1%;
				background-color:white;
				}
				.article_body {
				width:90%;
				margin-top:15% ;
				}
		</style>
		<?php
				$t=fopen("title.txt","r");
				$title=fread($t,filesize("title.txt"));
				fclose($t);
				$b=fopen("body.txt","r");
				$body=fread($b,filesize("body.txt"));
				fclose($b);
				 ?>
		<title>
			<?php
				echo $title;
				 ?>
		</title> 
		<center>
		<div class="article">
			<div class="article-head">
			<center>
			<h1>
				<?php
			echo $title;
				 ?>
				 </h1>
			</center>
			</div>
			<span class="article-head-line"></span>
			<div class="article-body">
				<?php 
					echo $body;
					?>
			</div>
		</div>
	</center>
</html>