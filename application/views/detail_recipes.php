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
						<a href="http://localhost/foodvn/index.php/user/session"><img src="http://localhost/foodvn/public/image/logo.png"/></a>
					</div>
				</div>
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
			<li id="user">
				 <b>Posted by: <a href="http://localhost/foodvn/index.php/user/check_user/?iduser=<?php echo $article["iduser"];?>" id="url_user" ><?php echo $article['username']; ?></a></b> 
			</li>
			<li>
				<form><input type="button" id="backbtn" value="Click to go back" onClick="history.go(-1);return true;"></form>
			</li>
		</ul>	
		</div>	
		
		<div id="fb-root"></div>
		<script>
			( function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id))
						return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
				</script>
		
		<div class="fb-like" data-href="https://www.facebook.com/foodvnam" data-width="60" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		
		<div id="rating">
			<form action="http://localhost/foodvn/index.php/user/rating" method="post">
			<p>Rate this recipe </p>
			<input type="radio" value="1" name="point_rating" id="point1" title="1-poor"/>
			<input type="radio" value="2" name="point_rating" id="point2" title="2-fair"/>
			<input type="radio" value="3" name="point_rating" id="point3" title="3-average"/>
			<input type="radio" value="4" name="point_rating" id="point4" title="4-good"/>
			<input type="radio" value="5" name="point_rating" id="point5" title="5-excellent"/>
			<input type="hidden" name="id_article" value="<?php echo $article['id_article'];?>" />
			<p>Point: <?php echo $point_article; ?></p>
			<input type="submit" value="rating" />
			</form>
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