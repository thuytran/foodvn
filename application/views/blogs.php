<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="http://localhost/foodvn/public/css/blogs.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="header">
					<div id="logo">
						<img src="http://localhost/foodvn/public/image/logo.ico"/>
					</div>
		</div>
		
		<div id="content">
		<ul>
			<li>
				<?php for($i=0;$i<count($blogs);$i++){ 
					$item = $blogs[$i];
					?>
					<h2> <?php echo $item['title']; ?> </h2>
					<h5><i> <?php echo $item['summary'];?> </i></h5>
					
					<a href="http://localhost/foodvn/index.php/welcome/detail"> Continue... </a>
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
								<li><a href="http://facebook.com/" target="_blank" class="facebook">Facebook</a></li>
								<li><a href="http://twitter.com/" target="_blank" class="twitter">Twitter</a></li>
							</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>