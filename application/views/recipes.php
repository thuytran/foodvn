<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="http://localhost/foodvn/public/css/home.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div id="header">
			<div>
				<div>
					<div id="logo">
						<img src="http://localhost/foodvn/public/image/logo.png"/>
					</div>
					<div>
					</div>
				</div>
		</div>	
		</div>
		
		
		<div id="content">
			
			<div class="search_res">
				<div id="search_res_form">
			   <form method="post" action="http://localhost/foodvn/index.php/user/search_recipe" >
					<input type="text" placeholder="enter suggestion key to search recipe for cook " name="key_search" size="80px"  />
					<input type="submit" id="search_restaurant_btn" value=" "/>
			   </form>
			   </div>
       			<div>
				<img src="http://localhost/foodvn/public/image/search_recipe.png" />
				</div>
				<div id="result_search">

						<?php for($i=0;$i<count($article);$i++){ 
					$item = $article[$i];
					?>
					<a href="http://localhost/foodvn/index.php/user/detail_article/?id_article=<?php echo $item["id_article"] ?>" > <?php echo $item['title_article']; ?> </a>
					<?php } ?>
						
				</div>
				
				<form><input type="button" id="backbtn" value="Click to go back" onClick="history.go(-1);return true;"></form>
				
			</div>
		</div>
		<div id="footer">
			<div class="home">
				<div>
					<div class="connect">
						<span>Follow Us</span>
						<ul>
						<li><a href="https://www.facebook.com/foodvnam" target="_blank" class="facebook">Facebook</a></li>
						<li><a href="http://twitter.com/" target="_blank" class="twitter">Twitter</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>