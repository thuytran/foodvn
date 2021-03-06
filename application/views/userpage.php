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
					</div>
				</div>
			</div>
		</div>
		
		
		<div id="content">
		
				
				<div id="user_info">
					<form action="http://localhost/foodvn/index.php/user/update" method="post">
						<table id="change_info">
							<tr> <td><b>Change your profile</b></td> </tr>
							<input name="iduser" type="hidden" value="<?php echo $user["iduser"]; ?>" />
							<tr>
								<td>Full name</td>
								<td><input type="text" name="fullname2" value="<?php echo $user["fullname"]; ?>" /></td>
							</tr>
							<tr>
								<td>Birth day</td>
								<td><input type="text" name="dob2" value="<?php echo $user["dob"]; ?>" /></td>
							</tr>
							<tr>
								<td>Region</td>
								<td><input type="text" name="regions2" value="<?php echo $user["regions"]; ?>" /></td>
							</tr>
							<tr>
								<td>Email</td>
								<td> <?php echo $user["email"]; ?> </td>
							</tr>
							<tr>
								<td>Change password</td>
								<td><input type="password" name="password_old" placeholder="old password" />
									<input type="password" placeholder="new password" name="password_new" />
								</td>
							</tr>
							<tr>
								<td>
							<input type="submit" value="Submit" id="submitbtn"/>
								</td>
							</tr>
						</table>
					</form> 
				</div>
				
				
					
					<div id="upload">
					<form  method="post" action="http://localhost/foodvn/index.php/user/upload_new_recipe" enctype="multipart/form-data">
						<table>
							
								<p id="result_upload"><h2><b><i><?php echo $result;?></i></b></h2></p>
								<p> <b> Upload new recipe </b> </p>
								<p>Choose type</p>
								
								<select name="id_category" id="id_category">
									<option value="1">Breakfast</option>
									<option value="2">Appetizer</option>
									<option value="3">Main course</option>
									<option value="4">Dessert</option>
									<option value="5">Drink</option>
									<option value="6">Cake</option>
								</select>
								<p> <input type="text" name="title_article" id="title_article" placeholder="article title " /> </p>
								<p> <input type="file" name="file_name" id="file_name"/> </p>
								<p><textarea name="ingredients" id="ingredients" rows="15" cols="30">Ingredients...</textarea></p>
								<p><textarea name="step1_prepare" id="step1_prepare" rows="12" cols="30">Prepare: </textarea></p>
								<p><textarea name="step2_making" id="step2_making" rows="12" cols="30">Making: </textarea></p>				
								<input type="submit" name="submit" value="post" id="submit"/>
						</table>
					</form>
					</div>
					
	
				
					
					<div id="activity">
						<div id="recent_activity">
						<p><b>Recent activity</b></p>
						<?php for($i=0;$i<count($activity);$i++){
							$item = $activity[$i]; ?>
						<p><?php echo $item["username"];?>: <a href="http://localhost/foodvn/index.php/user/detail_article/?id_article=<?php echo $item["id_article"];?>"> <?php  echo $item["activity"]; ?></a> at  <?php  echo $item["time"];?> 
							</p>
						<?php } ?>
						</div>
						
						<div id="list_uploaded">
							<table>
							<tr>
								<td>
									<p>The recipes you have posted</p>
								</td>
							</tr>
								<?php for($i=0;$i<count($list_article_byid);$i++){
									$item = $list_article_byid[$i]; ?>
									<tr>
										<td>
											<a href="http://localhost/foodvn/index.php/user/detail_article/?id_article=<?php echo $item["id_article"] ?>" > <?php echo $item['title_article']; ?> </a>  
										</td>
										
										<td id="delete">
											<a href="http://localhost/foodvn/index.php/user/delete_article/?id_article=<?php echo $item["id_article"] ?>"> delete </a>
										</td>
									</tr>
								<?php } ?>
							</table>
						</div>
						
						
						<div id="friend_followed">
							<p><b>Friend you followed</b></p>
							<?php for($i=0;$i<count($relative);$i++){
							$item = $relative[$i]; ?>
						<p><b> <a href="http://localhost/foodvn/index.php/user/check_user/?iduser=<?php echo $item["iduser_follow"] ?>" id="url_user"><?php echo $item['username_follow']; ?></a> </b></p>
						<?php } ?>
						</div>
						
						</div>
						
			
		</div> <!-- dong the content -->
		
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