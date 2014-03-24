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
					<li class="current">
						<a href="http://localhost/foodvn/index.php">Home</a>
					</li>
					<li>
						<a href="">About us</a>
					</li>
					<li>
						<a href="">Recipes</a>
					</li>
					<li>
						<a href="">Restaurants</a>
					</li>
					<li>
						<a href="">Collections</a>
					</li>
					<li>
						<a href="">Blogs</a>
					</li>
				</ul>
				</div>
			</div>
			<div id="content">
				<div>
					<div id="account">
						<div>
							<form method="post" action="http://localhost/foodvn/index.php/user/register">
								<span>Đăng ký tài khoản mới</span>
								<h4> <?php echo $result;?> </h4>
								<table>
									<tr>
										<td><label for="fullname">Họ và tên</label></td>
										
										<td> <input type="text" name="fullname" id="fullname" /> </td>
									</tr>
									<br />
									<tr>
										<td><label for="dob">Ngày sinh</label></td>
										<td><input type="date" name="dob" id="dob"/></td>
									</tr>
									<br />
									<tr>
										<td><label for="regions">Quê quán</label></td>
										<td><input type="text" name="regions" id="regions" /></td>
									</tr>
									<br />
									<tr>
										<td><label for="email">Email</label></td>
										<td><input type="text" name="email" id="email" /></td>
									</tr>
									
									<tr>
										<td><label for="username">Tên Đăng Nhập</label></td>
										<td><input type="text" name="username" id="username"/></td>
									</tr>
									
									<tr>
										<td><label for="password">Mật khẩu</label></td>
										<td><input type="password" name="password" id="password" placeholder="8 kí tự trở lên" /></td>
									</tr>
							
									<tr>
										<td><label for="password_2">Nhập lại mật khẩu</label></td>
										<td><input type="password" name="password_2" id="password_2"/>  </td>
									</tr>
								</table>
								<input type="submit" value="Đăng ký" class="submitbtn"/> 
							</form>
						</div>
					</div>
				</div>
			</div>
	</body>