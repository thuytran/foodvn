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
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/recipes">Recipes</a>
					</li>
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/restaurants">Restaurants</a>
					</li>
						<li class="current">
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
			
		<div id="content_b">
				
					<ul>
			<li>
				<?php for($i=0;$i<count($blogs);$i++){ 
					$item = $blogs[$i];
					?>
					<h2> <?php echo $item['title']; ?> </h2>
					<img src="http://localhost/foodvn/upload/<?php echo $item['file_name'];?>" width="60px" height="60px" />
					<h5><i> <?php echo $item['summary'];?> </i></h5>
					
					<a href="http://localhost/foodvn/index.php/welcome/detail/?id=<?php echo $item["id"] ?>"> Continue... </a>
					<?php } ?>
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