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
					<div>
						<form action="#">
							<input type="text" id="search" maxlength="40" />
							<input type="submit" value="" id="searchbtn" />
						</form>
					</div>
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
		
			<div style="clear: both"/>
			<div style="width: 100%; float: left; text-align: center;">
				<?php
					// Lấy ra trang hiện tại đang hiển thị
					$current_page = 1;
					if(array_key_exists ("page", $_GET)){
						$current_page = intval($_GET["page"]);
						if($current_page < 1){
							$current_page = 1;
						}
					}
					// Tính tổng số trang
					$total_page = $total/5 + ($total % 5 > 0 ? 1 : 0);
					for($i = 1; $i <= $total_page; $i++){
					?>
						<a style="<?php echo ($i == $current_page ? "" : "border: solid 1px #888"); ?>; padding: 3px; text-decoration: none; display: inline-block" href="?page=<?php echo $i?>"> 
							<?php echo $i?> 
						</a>
					<?php
					}
					
				?> - Tổng số <?php echo $total ?> món		
			</div>
		<div style="clear: both"/>
		
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