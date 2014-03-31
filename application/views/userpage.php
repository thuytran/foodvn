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
						<a href="http://localhost/foodvn/index.php/user/homepage"><img src="http://localhost/foodvn/public/image/logo.ico"/></a>
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
					<form id="upload" method="post" action="">
						<table>
							
								<p> <b> upload new recipe </b> </p>
								<p>Choose type</p>
								<select name="choose">
									<option value="breakfast">Breakfast</option>
									<option value="appetizer">Appetizer</option>
									<option value="main_course">Main course</option>
									<option value="dessert">Dessert</option>
									<option value="drink">Drink</option>
									<option value="cake">Cake</option>
								</select>
								<p> <input type="text" name="title" placeholder="article title " /> </p>
								<p> <input type="file" value="upload image" name="image" /> </p>
								<p><textarea name="ingredients">Ingredients...</textarea></p>
								<textarea name="instructions">Instruction...</textarea>
								<input type="submit" value="post" />
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
						<li><a href="http://facebook.com/" target="_blank" class="facebook">Facebook</a></li>
						<li><a href="http://twitter.com/" target="_blank" class="twitter">Twitter</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>