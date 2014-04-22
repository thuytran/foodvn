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
						<a href="http://localhost/foodvn/index.php/user/homepage"><img src="http://localhost/foodvn/public/image/logo.png"/></a>
					</div>
					<div>
						<div>
							 <a>Hi <b> <?php echo $user["username"]; ?></b></a>
							 <a href="http://localhost/foodvn/index.php/user/userpage">Profile</a>
							 <a href="http://localhost/foodvn/index.php/user/logout">Log out</a>
						</div>
						<form action="#">
							<input type="text" id="search" maxlength="40" />
							<input type="submit" value="" id="searchbtn" />
						</form>
					</div>
				</div>
				<ul>
					<li class="current">
						<a href="http://localhost/foodvn/index.php/user/homepage">Home</a>
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
						<a href="http://localhost/foodvn/index.php/welcome/blogs">Blogs</a>
					</li>
				</ul>
				</div>
				</div>
				
		<div id="wrapper">
        <div id="slider-wrapper">
        
            <div id="slider" class="nivoSlider">
                <a href=""><img src="http://localhost/foodvn/public/image/breakfast.png" alt="" title="#htmlcaption" /></a>
                <img src="http://localhost/foodvn/public/image/appetizers.png" alt="" title="#htmlcaption2" />
                <img src="http://localhost/foodvn/public/image/main.png" alt="" title="#htmlcaption3" />
                <img src="http://localhost/foodvn/public/image/dessert.png" alt="" title="#htmlcaption4" />
                <img src="http://localhost/foodvn/public/image/drinks.png" alt="" title="#htmlcaption5" />
                <img src="http://localhost/foodvn/public/image/cake.png" alt="" title="#htmlcaption6" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <a href="#">Recipe for Breakfast</a>
            </div>
            <div id="htmlcaption2" class="nivo-html-caption">
                <a href="#">Recipe for Appetizer</a>
            </div>
            <div id="htmlcaption3" class="nivo-html-caption">
                <a href="#">Recipe for Main</a>
            </div>
            <div id="htmlcaption4" class="nivo-html-caption">
                <a href="#">Recipe for Dessert</a>
            </div>
            <div id="htmlcaption5" class="nivo-html-caption">
                <a href="#">Recipe for Drinks</a>
            </div>
            <div id="htmlcaption6" class="nivo-html-caption">
                <a href="#">Recipe for Cakes</a>
            </div>
        
        </div>

    </div>
    <script type="text/javascript" src="http://localhost/foodvn/public/js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="http://localhost/foodvn/public/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    
    <div id="fb-root"></div>
		<script>
			( function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id))
						return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>
    
    
		<div id="content">
			<?php for($i=0;$i<count($article);$i++){
							$item = $article[$i];
				if (($item["id_category"]) == 1) {  ?> 
			<table id="list_article" class="list_article_breakfast">
				<tr>
					<td>
					<h5>Posted by: <b> <a href="http://localhost/foodvn/index.php/user/check_user/?iduser=<?php echo $item["iduser"] ?>" id="url_user"><?php echo $item['username']; ?></a>    </b></h5> 
					</td>
				</tr>
				<tr>
					<td>
						<h4> <a href="http://localhost/foodvn/index.php/user/detail_article/?id_article=<?php echo $item["id_article"] ?>" > <?php echo $item['title_article']; ?> </a>  </h4>
					</td>
				</tr>
				<tr>
					<td>
						<img src="http://localhost/foodvn/upload/<?php echo $item['file_name'];?>" width="140px" height="160px" />
					</td>
				</tr>
				<tr>
					<td>
						<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-width="60" data-type="button"></div>
					</td>
				</tr>
				<?php } ?> 
			</table>
			<?php if(($item["id_category"])==2){ ?>
				<table id="list_article" class="list_article_appetizer">
				<tr>
					<td>
					<h5>Posted by: <b> <a href="http://localhost/foodvn/index.php/user/check_user/?iduser=<?php echo $item["iduser"] ?>" id="url_user"><?php echo $item['username']; ?></a>    </b></h5> 
					</td>
				</tr>
				<tr>
					<td>
						<h4> <a href="http://localhost/foodvn/index.php/user/detail_article/?id_article=<?php echo $item["id_article"] ?>" > <?php echo $item['title_article']; ?> </a>  </h4>
					</td>
				</tr>
				<tr>
					<td>
						<img src="http://localhost/foodvn/upload/<?php echo $item['file_name'];?>" width="140px" height="160px" />
					</td>
				</tr>
				<tr>
					<td>
						<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-width="60" data-type="button"></div>
					</td>
				</tr>
				<?php } ?> 
			</table>
			
			<?php if(($item["id_category"])==3){ ?>
				<table id="list_article" class="list_article_main">
				<tr>
					<td>
					<h5>Posted by: <b> <a href="http://localhost/foodvn/index.php/user/check_user/?iduser=<?php echo $item["iduser"] ?>" id="url_user"><?php echo $item['username']; ?></a>    </b></h5> 
					</td>
				</tr>
				<tr>
					<td>
						<h4> <a href="http://localhost/foodvn/index.php/user/detail_article/?id_article=<?php echo $item["id_article"] ?>" > <?php echo $item['title_article']; ?> </a>  </h4>
					</td>
				</tr>
				<tr>
					<td>
						<img src="http://localhost/foodvn/upload/<?php echo $item['file_name'];?>" width="140px" height="160px" />
					</td>
				</tr>
				<tr>
					<td>
						<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-width="60" data-type="button"></div>
					</td>
				</tr>
				<?php } ?> 
			</table>
			
			<?php if(($item["id_category"])==4){ ?>
				<table id="list_article" class="list_article_dessert">
				<tr>
					<td>
					<h5>Posted by: <b> <a href="http://localhost/foodvn/index.php/user/check_user/?iduser=<?php echo $item["iduser"] ?>" id="url_user"><?php echo $item['username']; ?></a>    </b></h5> 
					</td>
				</tr>
				<tr>
					<td>
						<h4> <a href="http://localhost/foodvn/index.php/user/detail_article/?id_article=<?php echo $item["id_article"] ?>" > <?php echo $item['title_article']; ?> </a>  </h4>
					</td>
				</tr>
				<tr>
					<td>
						<img src="http://localhost/foodvn/upload/<?php echo $item['file_name'];?>" width="140px" height="160px" />
					</td>
				</tr>
				<tr>
					<td>
						<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-width="60" data-type="button"></div>
					</td>
				</tr>
				<?php } ?> 
			</table>
			
			<?php if(($item["id_category"])==5){ ?>
				<table id="list_article" class="list_article_drink">
				<tr>
					<td>
					<h5>Posted by: <b> <a href="http://localhost/foodvn/index.php/user/check_user/?iduser=<?php echo $item["iduser"] ?>" id="url_user"><?php echo $item['username']; ?></a>    </b></h5> 
					</td>
				</tr>
				<tr>
					<td>
						<h4> <a href="http://localhost/foodvn/index.php/user/detail_article/?id_article=<?php echo $item["id_article"] ?>" > <?php echo $item['title_article']; ?> </a>  </h4>
					</td>
				</tr>
				<tr>
					<td>
						<img src="http://localhost/foodvn/upload/<?php echo $item['file_name'];?>" width="140px" height="160px" />
					</td>
				</tr>
				<tr>
					<td>
						<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-width="60" data-type="button"></div>
					</td>
				</tr>
				<?php } ?> 
			</table>
			
			<?php if(($item["id_category"])==6){ ?>
				<table id="list_article" class="list_article_cake">
				<tr>
					<td>
					<h5>Posted by: <b> <a href="http://localhost/foodvn/index.php/user/check_user/?iduser=<?php echo $item["iduser"] ?>" id="url_user"><?php echo $item['username']; ?></a>    </b></h5> 
					</td>
				</tr>
				<tr>
					<td>
						<h4> <a href="http://localhost/foodvn/index.php/user/detail_article/?id_article=<?php echo $item["id_article"] ?>" > <?php echo $item['title_article']; ?> </a>  </h4>
					</td>
				</tr>
				<tr>
					<td>
						<img src="http://localhost/foodvn/upload/<?php echo $item['file_name'];?>" width="140px" height="160px" />
					</td>
				</tr>
				<tr>
					<td>
						<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-width="60" data-type="button"></div>
					</td>
				</tr>
				<?php } ?> 
			</table>
			
			<?php } ?>
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