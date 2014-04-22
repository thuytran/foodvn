<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="http://localhost/foodvn/public/css/blogs.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="header">
			<div>
				<div>
					<div id="logo">
						<img src="http://localhost/foodvn/public/image/logo.png"/>
					</div>
					<div>
						<form action="#">
							<input type="text" id="search" maxlength="40" />
							<input type="submit" value="" id="searchbtn" />
						</form>
					</div>
				</div>
				<ul>
					<li>
						<a href="http://localhost/foodvn/index.php">Home</a>
					</li>
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/about">About us</a>
					</li>
					<li  class="current">
						<a href="http://localhost/foodvn/index.php/welcome/recipes">Recipes</a>
					</li>
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/restaurants">Restaurants</a>
					</li>
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/blogs">Blogs</a>
					</li>
				</ul>
		</div>	
		</div>
		
		<div id="detail_recipes">
		<ul>
			<li id="title">
				<b><?php echo $article['title_article']; ?></b> 
			</li>
			<li id="file_name">
				<img src="http://localhost/foodvn/upload/<?php echo $article['file_name'];?>" width="300px" height ="320px" />
			</li>
			<li id="ingredients">
				<h3>Ingredients: </h3><i><?php echo nl2br($article['ingredients']); ?></i>
			</li>
			<li id="step1">
				<h3>1. Prepare: </h3><?php echo nl2br($article['step1_prepare']);?>
			</li>
			<li id="step2">
				<h3>2. Making: </h3><?php echo nl2br($article['step2_making']); ?>
			</li>
			<li>
				<form><input type="button" id="backbtn" value="Click to go back" onClick="history.go(-1);return true;"></form>
			</li>
		</ul>	
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