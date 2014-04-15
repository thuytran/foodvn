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
						<a href="http://localhost/foodvn/index.php"><img src="http://localhost/foodvn/public/image/logo.png"/></a>
					</div>
					<div>
						<div>
							<a href="index.php/user/sign_up">My account</a>
							<a href="index.php/user/sign_in">Sign in</a>
						</div>
						<form action="#">
							<input type="text" id="search" maxlength="40" />
							<input type="submit" value="" id="searchbtn" />
						</form>
					</div>
				</div>
				<ul>
					<li class="current">
						<a href="http://localhost/foodvn/index.php">Home</a>
					</li>
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/about">About us</a>
					</li>
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/recipes">Recipes</a>
					</li>
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/restaurants">Restaurants</a>
					</li>
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/collections">Collections</a>
					</li>
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/blogs">Blogs</a>
					</li>
				</ul>
		</div>	
		</div>
		
		<div id="content_b">
		<ul>
			<li id="title">
				<b><?php echo $blogs['title']; ?></b>
			</li>
			<li id="summary">
				<i><?php echo $blogs['summary']; ?></i>
			</li>
			<li id="file_name">
				<img src="http://localhost/foodvn/upload/<?php echo $blogs['file_name'];?>" width="300px" height ="300px" />
			</li>
			<li id="content">
				<?php echo $blogs['content']; ?>
			</li>
			<li id="signature">
				<i><?php echo $blogs['signature'];?></i>
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