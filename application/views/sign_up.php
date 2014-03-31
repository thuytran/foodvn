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
						<a href="http://localhost/foodvn/index.php"><img src="http://localhost/foodvn/public/image/logo.ico"/></a>
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
						<a href="http://localhost/foodvn/index.php/welcome/collections">Collections</a>
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
							<form method="post" action="http://localhost/foodvn/index.php/user/register">
								<span>Form register</span>
								<h4> <?php echo $result;?> </h4>
								<table>
									<tr>
										<td><label for="fullname">Full name</label></td>
										
										<td> <input type="text" name="fullname" id="fullname" /> </td>
									</tr>
									<br />
									<tr>
										<td><label for="dob">Birth day</label></td>
										<td><input type="date" name="dob" id="dob"/></td>
									</tr>
									<br />
									<tr>
										<td><label for="regions">Region</label></td>
										<td><input type="text" name="regions" id="regions" /></td>
									</tr>
									<br />
									<tr>
										<td><label for="email">Email</label></td>
										<td><input type="text" name="email" id="email" /></td>
									</tr>
									
									<tr>
										<td><label for="username">User name</label></td>
										<td><input type="text" name="username" id="username"/></td>
									</tr>
									
									<tr>
										<td><label for="password">Password</label></td>
										<td><input type="password" name="password" id="password" placeholder="over 8 characters" /></td>
									</tr>
							
									<tr>
										<td><label for="password_2">Repeat password </label></td>
										<td><input type="password" name="password_2" id="password_2"/>  </td>
									</tr>
									<tr>
										<td></td>
										<td><input type="submit" value="Submit" id="submitbtn"/> </td>
									</tr>
								</table>
								
							</form>
							
						</div>
					</div>
				</div>
			</div>
	</body>
	</html>