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
						<a href="http://localhost/foodvn/index.php"><img src="http://localhost/foodvn/public/image/logo.png"/></a>
					</div>
					<div>
						<div>
							<a href="sign_up">My account</a>
							<a href="sign_in">Sign in</a>
						</div>
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
					<li>
						<a href="http://localhost/foodvn/index.php/welcome/blogs">Blogs</a>
					</li>
				</ul>
				</div>
			</div>
			<div id="content">
		<div>
			<div id="account">
				<div>
					<form action="http://localhost/foodvn/index.php/user/signin">
						<span>SIGN-IN</span>
						<table>
							<tr>
									<b><?php echo $result;?></b>
							</tr>
							<tr>
								<td><label for="username">Username</label></td>
								<td><input type="text" id="username" name="username"/></td>
							</tr>
							<tr>
								<td><label for="password">Password</label></td>
								<td><input type="password" id="password" name="password"/></td>
							</tr>
							<tr>
								<td></td>
								<td class="rememberme"><label for="rememberme"><input type="checkbox" id="rememberme" /> Remember me on this computer</label></td>
							</tr>
							<tr>
										<td></td>
										<td><input type="submit" value="Log in" id="submitbtn"/> </td>
									</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
			</body>
			</html>