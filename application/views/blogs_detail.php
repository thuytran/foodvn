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