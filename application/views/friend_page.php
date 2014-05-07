<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="http://localhost/foodvn/public/css/home.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="header">
			
					<div id="logo">
						<a href="http://localhost/foodvn/index.php/user/homepage"><img src="http://localhost/foodvn/public/image/logo.png"/></a>
					</div>
		</div>
		
		<div>
			
		<div id="profile_user">
			<table id="tb_profile_user">
				<tr>
					<td><h3><p>About: <b> <?php echo $user["username"]; ?> </b></p></h3></td>
				</tr>
				<tr>
					<td>Full name:  </td>
					<td><?php echo $user["fullname"]; ?></td>
				</tr>
				<tr>
					<td>Birthday:  </td>
					<td><?php echo $user["dob"]; ?></td>
				</tr>
				<tr>
					<td>Home town:  </td>
					<td><?php echo $user["regions"]; ?></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><a  target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=<?php echo $user["email"]?>&body=THIS EMAIL SEND BY YOUR FRIEND IN FOOD.VN"><?php echo $user["email"]; ?></a></td>
				</tr>
			</table>	
		</div>
		
		<div id="friend_activity">
			<p><b>Recent activity</b></p>
						<?php for($i=0;$i<count($activity);$i++){
							$item = $activity[$i]; ?>
						<p><?php echo $item["username"];?>: <a href="http://localhost/foodvn/index.php/user/detail_article/?id_article=<?php echo $item["id_article"];?>"> <?php  echo $item["activity"]; ?></a> at  <?php  echo $item["time"];?> 
							</p>
						<?php } ?>
		</div>
		
		<div id="friend_of_friend">
			<p><b>Friend</b></p>
			<?php for($i=0;$i<count($relative);$i++){
							$item = $relative[$i]; ?>
						<p><?php echo $item["iduser_follow"];?></p>
						<?php } ?>
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