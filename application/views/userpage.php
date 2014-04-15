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
		</div>
	</div>
		<div id="content">
			<div class="home">
				<div class="aside">
					<form id="user_info" action="http://localhost/foodvn/index.php/user/update" method="post">
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
				<div>
					<form id="upload" method="post" action="http://localhost/foodvn/index.php/user/upload_new_recipe" enctype="multipart/form-data">
						<table>
							
								<p id="result_upload"><h2><b><i><?php echo $result;?></i></b></h2></p>
								<p> <b> upload new recipe </b> </p>
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
				<div>
					<ul>
					<li>
						<a href=""> Following </a>
					</li>
					<li>
						<a href=""> Followers </a>
					</li>
					<li>
						<a href=""> Collections </a>
					</li>
					<li>
						<a href=""> Notifications </a>
					</li>
					<li>
						<a href=""> Activity </a>
					</li>
					</ul>
				</div>
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